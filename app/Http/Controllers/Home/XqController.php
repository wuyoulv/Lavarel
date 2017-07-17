<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Film_info;
use App\Model\Film_cmt;
use App\Model\User;
use App\Model\User_vip;

class XqController extends Controller
{
    public function index($id)
    {
    	$info=\DB::table('film_info')->limit(4)->get();
        $filmcmt=\DB::table('film_cmt')->join('user','film_cmt.user_id','=','user.id')->join('film_info','film_cmt.film_id','=','film_info.id')->select('film_cmt.id','user.name','user.picname','film_info.title','film_cmt.text','film_cmt.time')->where('film_info.id',$id)->get();

        $filminfo=Film_info::where('id',$id)->get();
        foreach($filminfo as $q){
            $w=$q->id;
        }

        //影片点击量加一
        $data['click']=($q->click)+1;
        Film_info::where('id',$id)->Update($data);

        //获取影片的状态
        $filminfo2 = Film_info::select('status')->where('id','=',$id)->first()->toArray();
        $last2 = last($filminfo2);

        //判断会员权限是否大于影片权限
        if(session('adminn')){
            $user=User::select('role')->where('account','=',session('adminn'))->first()->toArray();
            $last = last($user);
            if($last>=$last2){
                return view("home.xq.index",['filminfo'=>$filminfo,'filmcmt'=>$filmcmt,'info'=>$info,'w'=>$w]);
            }else{
                return redirect('a/home');
            }
        }else{
            if($last2>0){
                return view("home.xq.index",['filminfo'=>$filminfo,'filmcmt'=>$filmcmt,'info'=>$info,'w'=>$w]);
            }else{
                return redirect('a/home');
            }
        }
    }

    public function add(Request $request,$w)
    {
        $user=User::where('account','=',session('adminn'))->get();
        //dd($user);die;
        foreach($user as $users){
            $id=$users->id;
        }
        $data['user_id'] = $id;
        $data['title'] = $users->picname;
         // echo "<pre>";
         // print_r($usersid);die;
        
         //获取指定的部分数据
        $data['text'] = $request->input("content");
        // echo "<pre>";
        // print_r($data);die;
        $t = time();
        $data['time']=date('Y-m-d H:i:s',$t);
        $data['film_id']=$w;
        // echo "<pre>";
        // print_r($data);die;
        \DB::table('film_cmt')->insertGetId(['user_id'=>$data['user_id'],'film_id'=>$data['film_id'],'title'=>$data['title'],'text'=>$data['text'],'time'=>$data['time']]);
        return redirect("/home/xq/{$w}");
        
    }

    public function updates(Request $request)
    {
        $cc=User::where('account','=',session('adminn'))->get();
        foreach($cc as $dd){
            $id=$dd->id;
        }

        $months=$request->input('months');
        date_default_timezone_set('prc');
        if (date("n") + $months >= 12) {
            $tmpMonth = date("n") + $months - 11;
            $tmpYear = date ("Y") + 1;
            $tmpDay = date("d");
            $tmpH = date("H:i:s");
        }else{
            $tmpMonth = date ("n") + $months;
            $tmpYear = date ("Y");
            $tmpDay = date("d");
            $tmpH = date("H:i:s");
        }
        $tmpDate = "$tmpYear-$tmpMonth-$tmpDay $tmpH";
        $data['dead_line'] = $tmpDate;
        $data['months'] = $_POST['months'];
        $data['money'] = $_POST['money'];
        $data['buy_time'] = date("Y-m-d H:i:s");
        
        $cc = User::where('id',$id)->Update($data);

        if(!empty($cc)){
            //判断User_vip表里是否有当前id号
            
            $us=User_vip::where('userid','=',$id)->get();
            //return 2;
            if(empty($us)){
                $res1 = User_vip::insertGetId(['userid'=>$id,'role'=>1]);
                return 2;
            }
            return 2;
        }else{
            return 1;
        }
         return redirect('home/user/index');
    }
}

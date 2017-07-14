<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Film_info;
use App\Model\Film_cmt;

class XqController extends Controller
{
    public function index($id)
    {
    	$filminfo=Film_info::where('id',$id)->get();
        foreach($filminfo as $q){
            $w=$q->id;
            //print_r ($w);die;

        }
        //echo "<pre>";
    	 // print_r($w);die;
        $info=\DB::table('film_info')->limit(2)->get();
    	$filmcmt=Film_cmt::where('film_id',$id)->get();
    	//echo "<pre>";
    	//var_dump($list);die;
    	return view("home.xq.index",['filminfo'=>$filminfo,'filmcmt'=>$filmcmt,'info'=>$info,'w'=>$w]);
    }

    public function add(Request $request,$w)
    {
        $data['user_id'] = session('adminn')->id;
        $data['title'] = session('adminn')->name;
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
}

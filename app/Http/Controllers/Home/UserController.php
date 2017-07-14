<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Film_info;
use App\Model\Film_type;
use App\Model\Ad;
use App\Model\User;
use App\Model\User_vip;

class UserController extends Controller
{



    public function index()
    {
      
        $cc=User::where('account','=',session('adminn'))->get();
        foreach($cc as $dd){
            $id=$dd->id;
        }
        $Film_info=Film_info::get();
        $Film_type=Film_type::get();
        $Ad=Ad::get();
        $list = User::find($id)->toArray();
       // echo '<pre>';
        //print_r($list);die; 
        return view("home.user.index",['ad'=>$Ad,'list'=>$list]);

    }

    public function zhanghu()
    {
        $cc=User::where('account','=',session('adminn'))->get();
        foreach($cc as $dd){
            $id=$dd->id;
        }
        $Film_info=Film_info::get();
        $Film_type=Film_type::get();
        $Ad=Ad::get();
        $list = User::find($id)->toArray();   // 
        //echo "<pre>";
        //var_dump($list);
        return view("home.user.zhanghu",['filminfo'=>$Film_info,'filmtype'=>$Film_type,'ad'=>$Ad,'list'=>$list]);
    	//echo "1345";
      //return view('home.user.zhanghu');
    }

        public function jilu()
    {
        $cc=User::where('account','=',session('adminn'))->get();
        foreach($cc as $dd){
            $id=$dd->id;
        }
        $Film_info=Film_info::get();
        $Film_type=Film_type::get();
        //$User_film=User_film::get();
        $Ad=Ad::get();
        $list = Film_info::find($id);   // 
        //echo "<pre>";
        //var_dump($list);
        return view("home.user.jilu",['filminfo'=>$Film_info,'filmtype'=>$Film_type,'ad'=>$Ad,'list'=>$list]);
        //echo "1345";
      //return view('home.user.zhanghu');
    }

        public function huiyuan()
    {
      
      //echo "111111";
        //$id = session('adminn')['id'];
        $Film_info=Film_info::get();
        $Film_type=Film_type::get();
        $User_vip=User_vip::get();
        $Ad=Ad::get();
        //$list = User::find($id);   // 
        //echo "<pre>";
        //print_r($list);
        return view("home.user.huiyuan",['filminfo'=>$Film_info,'filmtype'=>$Film_type,'ad'=>$Ad]);
    }

        public function zhifu()
    {
        //echo '111111';
        $id = session('adminn')['id'];
        $Film_info=Film_info::get();
        $Film_type=Film_type::get();
        $User_film=User_film::get();
        $Ad=Ad::get();
        $list = Film_info::find($id);  
        //echo "<pre>";
        //var_dump($list);
        return view("home.user.zhifu",['filminfo'=>$Film_info,'filmtype'=>$Film_type,'ad'=>$Ad,'list'=>$list]);
        //echo "1345";
      //return view('home.user.zhanghu');
    }

    public function edit($id)
    {
        $cc=User::where('account','=',session('adminn'))->get();
        foreach($cc as $dd){
            $id=$dd->id;
        }
        $re=User::find($id);
        //echo "<pre>";
        //var_dump($re);
        return view('home.user.zhanghu',['user'=>$re]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //echo '我进了';

        //die();
     
        
       /* $input = $request->only(['account','picname','name','birthday','tel','email','address']);


        //如果有图片就上传 如果没有就直接将传进来的数组（不含picname）   图片先执行上传  再插入数据库
        if
        //调用上传方法 $name =   $_FILES['picname']['name'];     $this->doupload($name);
*/

        $cc=User::where('account','=',session('adminn'))->get();
        foreach($cc as $dd){
            $id=$dd->id;
        }
         $array= [];
        //获取除图片外的信息
        $data = $request->only(['account','name','birthday','tel','email','address']);
        //$picname = $data['picname'];
        //echo "<pre>";
        //print_r($data);
        //
        //判断是否是有效的文件
        if ($request->file('picname') && $request->file('picname')->isValid()){
            //获取上传文件信息
            $file = $request->file('picname');
            //echo "<pre>";
            //print_r($file);
            $ext = $file->extension(); //获取文件的扩展名

            //随机一个新的文件名
            $filename = time().rand(1000,9999).".".$ext;
            
            $array['picname'] = $filename;
            //echo "<pre>";
            //print_r($array);


            //var_dump($filename);
            //die();
            //拼接两个信息            
            $info = array_merge($data,$array);
            //echo "<pre>";
            //print_r($info);
            //添加进数据库
            User::where('id',$id)->Update($info);
            //print_r($array);
            //移动图片
            //echo "<pre>";
            //print_r($filename);
            $file->move("./uploads/",$filename);
            //$file->move("./uploads/s_".$filename,$fileneme)->resize(100,100);
            //$img1->save("./uploads/s_".$filename);                   
            //return response($filename); //输出
            
        } 


        
         return redirect('home/user/zhanghu');
    }

    private function doupload($picname)
    {

        //执行图片上传

    }

    public function store(Request $request)
    {
        //定义一个空数组
      
       
    }

}

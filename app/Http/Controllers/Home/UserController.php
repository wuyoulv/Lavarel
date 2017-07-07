<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Film_info;
use App\Model\Film_type;
use App\Model\Ad;
use App\Model\User;

class UserController extends Controller
{
    public function index($id)
    {
        $Film_info=Film_info::get();
        $Film_type=Film_type::get();
        $Ad=Ad::get();
        $list = User::find(1);   // 
        //echo "<pre>";
        //var_dump($list);
        return view("home.user.index",['filminfo'=>$Film_info,'filmtype'=>$Film_type,'ad'=>$Ad,'list'=>$list]);
    }

    public function zhanghu()
    {
        $Film_info=Film_info::get();
        $Film_type=Film_type::get();
        $Ad=Ad::get();
        $list = User::find(1);   // 
        //echo "<pre>";
        //var_dump($list);
        return view("home.user.zhanghu",['filminfo'=>$Film_info,'filmtype'=>$Film_type,'ad'=>$Ad,'list'=>$list]);
    	//echo "1345";
      //return view('home.user.zhanghu');
    }

    public function edit($id)
    {
        $id = 1;
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
        $id = 1;

        
       /* $input = $request->only(['account','picname','name','birthday','tel','email','address']);


        //如果有图片就上传 如果没有就直接将传进来的数组（不含picname）   图片先执行上传  再插入数据库
        if
        //调用上传方法 $name =   $_FILES['picname']['name'];     $this->doupload($name);
*/


        $input = $request->only(['account','picname','name','birthday','tel','email','address']);
        $id = User::where('id',$id)->update($input);
        
        if($id>0){
            return redirect('home/user/zhanghu');
            echo "修改成功!";
        }else{            
            return "失败!";
            //echo "失败!";
            
        }
    }

    private function doupload($picname)
    {

        //执行图片上传

    }

    public function store(Request $request)
    {
        //定义一个空数组
        $array= [];
        //获取除图片外的信息
        $data = $request->only(['account','name','birthday','tel','email','address']);
        //$picname = $data['picname'];
        //echo "<pre>";
        //print_r($data);


        //


        //判断是否是有效的文件
        if ($request->file('picname') !== null && $request->file('picname')->isValid()){
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


            var_dump($filename);
            die();
            //拼接两个信息            
            $info = array_merge($data,$array);
            //echo "<pre>";
            //print_r($info);
            //添加进数据库
            User::insertGetId($info);
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

}

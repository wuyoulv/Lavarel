<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\User;
use App\Model\Login;

class HomeLogController extends Controller
{
    public function index()
    {
        return view("home.homelog.index");
    }
    
    public function doLogin(Request $request)
    {
        
    	// var_dump($_POST);die;
        $res=$request->input("account");
        $password=$request->input('password');


        $cd=Login::where('account','=',$res)->first();

        if(!empty($cd)){
            //判断密码
            if(MD5($password)==$cd->password){
                //存储session跳转页面
                session()->put("adminn",$cd->account);
                return redirect("a/home");
               //echo "测试成功!";
               
            }
        }
        return back()->with("msg","账号或密码错误！");
    }

    //执行退出
   public function logout(Request $request)
   {

       $request->session()->forget('adminn');
       return redirect('a/home');
   }
}

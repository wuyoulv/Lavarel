<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
        $cd=Login::where('account','=',$res)->get();
        foreach($cd as $dc){
        	var_dump($dc->account);
        }
        if(!empty($cd)){
            //判断密码
            if(md5($password)==$dc->password){
                //存储session跳转页面
                session()->put("adminu",$dc->account);
                return redirect("home");
               //echo "测试成功!";
            }
        }
        return back()->with("msg","账号或密码错误！");
    }
}

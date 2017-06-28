<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gregwar\Captcha\CaptchaBuilder;
use App\Model\Login;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin.login");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function getcode(Request $request)
    {
        $builder = new CaptchaBuilder;
        $builder->build(150,32);
        $request->session()->put('phrase',$builder->getPhrase()); //存储验证码
        return response($builder->output())->header('Content-type','image/jpeg');
    }

    public function dologin(Request $request)
    {
        $yan = $request->session()->get('phrase');
        //var_dump($yan);die;
        if($_POST['mycode'] !== $yan){
            return back()->with("msg","验证码错误！".$_POST['mycode'].":".$yan);
        }
        //执行登陆判断
        $admin = $request->input("account");
        $password = $request->input("password");
        //获取对应用户信息
        $user = Login::get();
        foreach ($user as $users){
            var_dump($users->password);
        }
        //var_dump(md5($password));die;
        if(!empty($user)){
            //判断密码
            if(md5($password)==$users->password){
                //存储session跳转页面
                session()->put("adminuser",$user);
                return redirect("admin");
               //echo "测试成功!";
            }
        }
        return back()->with("msg","账号或密码错误！");
        //return view("admin/ceshi");
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

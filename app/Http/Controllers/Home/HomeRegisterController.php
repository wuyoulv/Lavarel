<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use iscms\Alisms\SendsmsPusher as Sms;


class HomeRegisterController extends Controller
{
    //显示注册页面
    public function index()
    {
        return view('home.register.index');
    }
    //注册注册判断
    public function Register()
    {
        
    }
    
    public function sendSms(Sms $sms)
    {
      return $sms->send("$phone","$name","$content",'$code');
    }
}

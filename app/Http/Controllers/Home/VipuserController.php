<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Vipuser;
use zgldh\QiniuStorage\QiniuFilesystemServiceProvider;

class VipuserController extends Controller
{
    public function index()
    {
    	$db = \DB::table('film_info')->select('id','title','pic_address','introduction','score','status')->where('status','1')->get();

    	  
    	return view("home.vipuser.vipuser",['info_vip'=>$db]);
    }
}


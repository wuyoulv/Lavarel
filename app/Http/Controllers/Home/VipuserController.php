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
    	//$list=Film_info::find($id);
    	//where('id',"=",$id)->
    	//echo "<pre>";
    	//var_dump($list);die;
    	return view("home.vipuser.vipuser");
    }
}


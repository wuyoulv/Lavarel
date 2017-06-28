<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Qiniu_info;

class Qiniu_infoController extends Controller
{
    public function index()
    {
    	$qiniu_info=Qiniu_info::all();
    	//var_dump($qiniu_info);
    	return view('admin.Qiniu_info.index',['data'=>$qiniu_info]);
    }
}

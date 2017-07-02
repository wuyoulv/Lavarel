<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Film_info;

class XqController extends Controller
{
    public function index($id)
    {
    	$list=Film_info::find($id);
    	//where('id',"=",$id)->
    	//echo "<pre>";
    	//var_dump($list);die;
    	return view("home.xq.index");
    }
}

<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Film_info;
use App\Model\Film_cmt;

class XqController extends Controller
{
    public function index($id)
    {
    	$filminfo=Film_info::where('id',$id)->get();
    	//print_r($filminfo);die;
    	$filmcmt=Film_cmt::get();
    	//where('id',"=",$id)->
    	//echo "<pre>";
    	//var_dump($list);die;
    	return view("home.xq.index",['filminfo'=>$filminfo,'filmcmt'=>$filmcmt]);
    }
}

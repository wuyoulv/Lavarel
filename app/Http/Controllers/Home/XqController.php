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
    	//print_r($dara);die;
        $info=Film_info::get(); 
    	$filmcmt=Film_cmt::where('film_id',$id)->get();
    	//where('id',"=",$id)->
    	//echo "<pre>";
    	//var_dump($list);die;
    	return view("home.xq.index",['filminfo'=>$filminfo,'filmcmt'=>$filmcmt,'info'=>$info]);
    }
}

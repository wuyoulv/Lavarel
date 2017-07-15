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
        $info=Film_info::get(); 
    	$filmcmt=Film_cmt::where('film_id',$id)->get();
    	return view("home.xq.index",['filminfo'=>$filminfo,'filmcmt'=>$filmcmt,'info'=>$info]);
    }
}

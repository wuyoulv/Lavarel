<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Vipuser;

class VipuserController extends Controller
{
    public function index()
    {
    	$db = \DB::table('film_info')->get();
    	
    	    	
    	return view("home.vipuser.vipuser",['film_info'=>$db]);
    }
}

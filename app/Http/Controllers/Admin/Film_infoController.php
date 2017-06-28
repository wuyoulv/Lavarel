<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Film_info;

class Film_infoController extends Controller
{
    public function index()
    {
    	$film_info=Film_info::all();
    	//var_dump($film_info);
    	return view('admin.Film_info.index',['data'=>$film_info]);
    }
}

<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Film_cmt;
class Film_cmtController extends Controller
{
   public function index(){
		$table = Film_cmt::all();
    	return view('admin.Film_cmt.index',['cmt'=>$table]);
	}
}

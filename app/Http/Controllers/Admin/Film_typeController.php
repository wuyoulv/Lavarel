<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Film_type;
class Film_typeController extends Controller
{
    public function index(){
		$table = Film_type::all();
    	return view('admin.Film_type.index',['type'=>$table]);
		}
}

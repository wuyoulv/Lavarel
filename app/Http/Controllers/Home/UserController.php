<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Film_info;
use App\Model\Film_type;
use App\Model\Ad;
use App\Model\User;

class UserController extends Controller
{
    public function index($id)
    {
        $Film_info=Film_info::get();
        $Film_type=Film_type::get();
        $Ad=Ad::get();
        $list = User::all(); 
        var_dump($id);
        return view("home.user.index",['filminfo'=>$Film_info,'filmtype'=>$Film_type,'ad'=>$Ad,'list'=>$list]);
    }
}

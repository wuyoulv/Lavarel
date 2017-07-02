<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Film_info;
use App\Model\Film_type;
use App\Model\Ad;

class IndexController extends Controller
{
    public function index(){
        $Film_info=Film_info::get();
        $Film_type=Film_type::get();
        $Ad=Ad::get();
        //echo "<pre>";
        //var_dump($Film_type);
        //var_dump($Film_info);
        //var_dump($Ad);die;
        return view("home.index.index",['filminfo'=>$Film_info,'filmtype'=>$Film_type,'ad'=>$Ad]);
    }
}

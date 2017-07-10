<?php

namespace App\Http\Controllers\Home;


use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Model\Ad;


class AdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index()
    {
        $user = \DB::get();
        var_dump($user);
       
        return view('home.index.index',['list'=>$user]);
    }
}
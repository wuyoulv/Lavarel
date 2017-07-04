<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeLogController extends Controller
{
    public function index()
    {
        view("home.homelog.index");
    }
    
    public function doLogin(Request $request)
    {
        $res=$request->input("account");
        
    }
}

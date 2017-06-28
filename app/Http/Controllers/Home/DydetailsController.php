<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DydetailsController extends Controller
{
    public function index()
    {
        return view("home.dydetails.index");
    }
}

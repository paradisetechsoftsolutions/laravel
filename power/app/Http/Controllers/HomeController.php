<?php

namespace power\Http\Controllers;

use power\Models\Programs;
use Illuminate\Http\Request;



class HomeController extends Controller
{
    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $programs = Programs::take(4)->get();
        return view('front.home.index', compact('programs'));
    }


    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    
    /**
     * Show the application profile.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.profile.index');
    }


}

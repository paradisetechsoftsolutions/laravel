<?php

namespace power\Http\Controllers;

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
    	$active = 'profile';
		$title = 'My Profile';
        return view('front.profile.index', compact('active', 'title'));	
    }


}

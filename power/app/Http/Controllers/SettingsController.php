<?php

namespace power\Http\Controllers;

use power\User;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
	/**
	* Show the application profile.
	*
	* @return \Illuminate\Http\Response
    * @param Request $request
	*/
	public function profile()
	{
		$profile = User::findorfail(auth()->user()->id);
		$active = 'profile';
		$title = 'Your Profile';
		return view('front.settings.profile', compact('profile', 'active', 'title'));		
	}


	/**
	* Show the application admin.
	*
	* @return \Illuminate\Http\Response
    * @param Request $request
	*/
	public function admin()
	{
		$active = 'admin';
		$title = 'Account Settings';
		return view('front.settings.admin', compact('active', 'title'));		
	}


	/**
	* Show the application notifications.
	*
	* @return \Illuminate\Http\Response
    * @param Request $request
	*/
	public function notifications()
	{
		$active = 'notifications';
		$title = 'Notifications';
		return view('front.settings.notifications', compact('active', 'title'));		
	}


	/**
	* Show the application programs.
	*
	* @return \Illuminate\Http\Response
    * @param Request $request
	*/
	public function programs()
	{
		$active = 'programs';
		$title = 'My Programs';
		return view('front.settings.programs', compact('active', 'title'));		
	}

	/**
	* Show the application programs.
	*
	* @return \Illuminate\Http\Response
    * @param Request $request
	*/
	public function billing()
	{
		$active = 'billing';
		$title = 'Billing';
		return view('front.settings.billing', compact('active', 'title'));		
	}


}

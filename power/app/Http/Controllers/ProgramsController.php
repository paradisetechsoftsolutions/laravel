<?php

namespace power\Http\Controllers;

use power\Models\Programs;
use power\Models\Modules;
use power\Models\Chapters;
use Illuminate\Http\Request;

class ProgramsController extends Controller
{    
	/**
	* Show the application profile.
	*
	* @return \Illuminate\Http\Response
	*/
	public function index()
	{
		$programs = Programs::all();
		return view('front.programs.index', compact('programs'));
	}

 	/**
	* Show the application profile.
	*
	* @return \Illuminate\Http\Response
	* @param Request $request
	*/
	public function preview(Request $request)
	{
		$program = Programs::where('slug', $request->slug)->first();
		return view('front.programs.preview', compact('program'));
	}

	/**
	* Show the application profile.
	*
	* @return \Illuminate\Http\Response
	* @param Request $request
	*/
	public function details(Request $request)
	{
		$program = Programs::where('slug', $request->slug)->first();
		return view('front.programs.details', compact('program'));
	}

	/**
	* Show the application single video page.
	*
	* @return \Illuminate\Http\Response
	* @param Request $request
	*/
	public function videos(Request $request)
	{
		$module = $chapter = '';
		$program = Programs::where('slug', $request->program)->first();
		if($request->module){
			$module = Modules::where('slug', $request->module)->first();
		}
		if($request->chapter){
			$chapter = Chapters::where('slug', $request->chapter)->first();
		}		
		return view('front.programs.videos', compact('program', 'module', 'chapter'));
	}


}

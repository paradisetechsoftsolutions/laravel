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
		$active = 'programs';
		$title = 'Programs';
		return view('front.programs.index', compact('programs', 'active', 'title'));
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
		$active = 'programs';
		$title = $program->title;
		return view('front.programs.preview', compact('program', 'active', 'title'));
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
		$active = 'programs';
		$title = $program->title;
		return view('front.programs.details', compact('program', 'active', 'title'));
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
		$title = $program->title;
		if($request->module){
			$module = Modules::where('slug', $request->module)->first();
			$title = $module->title;
		}
		if($request->chapter){
			$chapter = Chapters::where('slug', $request->chapter)->first();
			$title = $chapter->title;
		}
		$active = 'programs';
		
		return view('front.programs.videos', compact('program', 'module', 'chapter', 'active', 'title'));
	}


}

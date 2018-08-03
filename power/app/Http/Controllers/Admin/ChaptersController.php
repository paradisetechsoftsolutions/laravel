<?php

namespace App\Http\Controllers\Admin;

use App\Models\Programs;
use App\Models\Modules;
use App\Models\Chapters;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ChaptersRequest;

class ChaptersController extends Controller
{
	var $active = 'programs';
	var $title = 'Chapters';
	/**
	* Show the application Chapters.
	*
	* @return \Illuminate\Http\Response
	*/
	public function index(Programs $program, Modules $module)
	{
		$chapters = Chapters::all();
		$active = $this->active;
		$title = $this->title;
		$program_id = request()->segment(3);
		return view('admin.chapters.index', compact('program', 'module', 'chapters', 'active', 'title'));
	}

	/**
	* Show the form for creating a new Modules.
	*
	* @param  \App\Models\Programs $program
	* @param  \App\Models\Modules $module
	* @return \Illuminate\Http\Response
	*/
	public function create(Programs $program, Modules $module)
    {
    	$active = $this->active;
		$title = $this->title;
        return view('admin.chapters.create', compact('program', 'module', 'active', 'title'));
    }

    /**
	* Store a newly created resource in storage.
	*
	* @param  \App\Models\Programs $program
	* @param ChaptersRequest $request
	* @return void
	*/
    public function store(ChaptersRequest $request, Programs $program, Modules $module)
    {
        $chapter = Chapters::create($request->all());
        $request->session()->flash('success', "Chapter {$chapter->title} created!");
        return redirect()->route('chapters.index', [$program->id, $module->id]);
    }



}

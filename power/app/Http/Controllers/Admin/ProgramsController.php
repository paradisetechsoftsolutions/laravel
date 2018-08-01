<?php

namespace App\Http\Controllers\Admin;

use App\Models\Programs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProgramsRequest;

class ProgramsController extends Controller
{
	var $active = 'programs';
	var $title = 'Programs';
	/**
	* Show the application Programs.
	*
	* @return \Illuminate\Http\Response
	*/
	public function index()
	{
		$programs = Programs::all();
		$active = $this->active;
		$title = $this->title;
		return view('admin.programs.index', compact('programs', 'active', 'title'));
	}

	/**
	* Show the form for creating a new Programs.
	*
	* @return \Illuminate\Http\Response
	*/
    public function create()
    {
    	$active = $this->active;
		$title = $this->title;
        return view('admin.programs.create', compact('active', 'title'));
    }

	/**
	* Store a newly created resource in storage.
	*
	* @param ProgramsRequest $request
	* @return void
	*/
    public function store(ProgramsRequest $request)
    {
        $program = Programs::create($request->all());
        $request->session()->flash('success', "Programs {$program->title} created!");
        return redirect()->route('programs.index');
    }

	/**
	* Show the form for editing the specified resource.
	*
	* @param  \App\Models\Programs $program
	* @return \Illuminate\Http\Response
	*/
    public function edit(Programs $program)
    {
    	$active = $this->active;
		$title = $this->title;
        return view('admin.programs.edit', compact('program', 'active', 'title'));
    }

	/**
	* Update the specified resource in storage.
	*
	* @param ProgramsRequest $request
	* @param  \App\Models\Programs $program
	* @return \Illuminate\Http\Response
	*/
    public function update(ProgramsRequest $request, Programs $program)
    {
        $program->update($request->all());
        $request->session()->flash('success', "Programs {$program->title} updated!");
        return redirect()->route('programs.index');
    }

	/**
	* Remove the specified resource from storage.
	*
	* @param Request $request
	* @param  \App\Models\Programs $program
	* @return \Illuminate\Http\Response
	* @throws \Exception
	*/
    public function destroy(Request $request, Programs $program)
    {
        $request->session()->flash('error', "Program {$program->title} deleted!");
        $program->delete();
        return redirect()->route('programs.index');
    }

}

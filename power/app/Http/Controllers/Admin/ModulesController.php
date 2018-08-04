<?php

namespace App\Http\Controllers\Admin;

use App\Models\Programs;
use App\Models\Modules;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ModulesRequest;

class ModulesController extends Controller
{
	var $active = 'programs';
	var $title = 'Modules';

	/**
	* Show the application Modules.
	*
	* @param  \App\Models\Programs $program
	* @return \Illuminate\Http\Response
	*/
	public function index(Programs $program)
	{
		$modules = Modules::all();
		$active = $this->active;
		$title = $this->title;
		return view('admin.modules.index', compact('modules', 'program', 'active', 'title'));
	}

	/**
	* Show the form for creating a new Modules.
	*
	* @param  \App\Models\Programs $program
	* @return \Illuminate\Http\Response
	*/
	public function create(Programs $program)
    {
    	$active = $this->active;
		$title = $this->title;
        return view('admin.modules.create', compact('program', 'active', 'title'));
    }

    /**
	* Store a newly created resource in storage.
	*
	* @param  \App\Models\Programs $program
	* @param ModulesRequest $request
	* @return void
	*/
    public function store(ModulesRequest $request, Programs $program)
    {
        $module = Modules::create($request->all());
        $request->session()->flash('success', "Module {$module->title} created!");
        return redirect()->route('modules.index', $program->id);
    }

    /**
	* Show the form for show the specified resource.
	*
	* @param  \App\Models\Programs $program
	* @param  \App\Models\Modules $module
	* @return \Illuminate\Http\Response
	*/
    public function show(Programs $program, Modules $module)
    {
    	$active = $this->active;
		$title = $this->title;
        return view('admin.modules.show', compact('module', 'active', 'title'));
    }


    /**
	* Show the form for editing the specified resource.
	*
	* @param  \App\Models\Programs $program
	* @param  \App\Models\Modules $module
	* @return \Illuminate\Http\Response
	*/
    public function edit(Programs $program, Modules $module)
    {
    	$active = $this->active;
		$title = $this->title;
        return view('admin.modules.edit', compact('module', 'program', 'active', 'title'));
    }

	/**
	* Update the specified resource in storage.
	*
	* @param ModulesRequest $request
	* @param  \App\Models\Programs $program
	* @param  \App\Models\Modules $module
	* @return \Illuminate\Http\Response
	*/
    public function update(ModulesRequest $request, Programs $program, Modules $module)
    {
        $module->update($request->all());
        $request->session()->flash('success', "Module {$module->title} updated!");
        return redirect()->route('modules.index', $program->id);
    }


    /**
	* Remove the specified resource from storage.
	*
	* @param Request $request
	* @param  \App\Models\Programs $program
	* @param  \App\Models\Modules $module
	* @return \Illuminate\Http\Response
	* @throws \Exception
	*/
    public function destroy(Request $request, Programs $program, Modules $module)
    {
        $request->session()->flash('error', "Module {$module->title} deleted!");
        $module->delete();
        return redirect()->route('modules.index', $program->id);
    }


}

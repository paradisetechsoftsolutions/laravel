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
	* @return \Illuminate\Http\Response
	*/
	public function index()
	{
		$modules = Modules::all();
		$active = $this->active;
		$title = $this->title;
		$program_id = request()->segment(3);
		return view('admin.modules.index', compact('modules', 'active', 'title', 'program_id'));
	}

	/**
	* Show the form for creating a new Modules.
	*
	* @return \Illuminate\Http\Response
	*/
	public function create()
    {
    	$active = $this->active;
		$title = $this->title;
		$program_id = request()->segment(3);
        return view('admin.modules.create', compact('active', 'title', 'program_id'));
    }

    /**
	* Store a newly created resource in storage.
	*
	* @param ModulesRequest $request
	* @return void
	*/
    public function store(ModulesRequest $request)
    {
        $module = Modules::create($request->all());

        $request->session()->flash('success', "Module {$module->title} created!");
        return redirect()->route('modules.index');
    }

    /**
	* Show the form for show the specified resource.
	*
	* @param  \App\Models\Modules $module
	* @return \Illuminate\Http\Response
	*/
    public function show(Modules $module)
    {
    	$active = $this->active;
		$title = $this->title;
        return view('admin.module.show', compact('module', 'active', 'title'));
    }


    /**
	* Show the form for editing the specified resource.
	*
	* @param  \App\Models\Modules $module
	* @return \Illuminate\Http\Response
	*/
    public function edit(Programs $program, Modules $module)
    {
    	print_r($module); die;
    	$active = $this->active;
		$title = $this->title;
        return view('admin.modules.edit', compact('module', 'active', 'title'));
    }

	/**
	* Update the specified resource in storage.
	*
	* @param ModulesRequest $request
	* @param  \App\Models\Modules $module
	* @return \Illuminate\Http\Response
	*/
    public function update(ModulesRequest $request, Modules $module)
    {
        $module->update($request->all());

        $request->session()->flash('success', "Module {$module->title} updated!");
        return redirect()->route('modules.index');
    }


    /**
	* Remove the specified resource from storage.
	*
	* @param Request $request
	* @param  \App\Models\Modules $module
	* @return \Illuminate\Http\Response
	* @throws \Exception
	*/
    public function destroy(Request $request, Modules $module)
    {
        $request->session()->flash('error', "Module {$module->title} deleted!");
        $module->delete();
        return redirect()->route('modules.index');
    }


}

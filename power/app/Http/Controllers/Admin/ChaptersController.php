<?php

namespace power\Http\Controllers\Admin;

use power\Models\Programs;
use power\Models\Modules;
use power\Models\Chapters;
use power\Models\ChaptersUploads;

use Illuminate\Http\Request;
use power\Http\Controllers\Controller;
use power\Http\Requests\Admin\ChaptersRequest;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Validator;

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
		$chapters = Chapters::where('modules_id', $module->id)->get();
		$active = $this->active;
		$title = $this->title;
		$program_id = request()->segment(3);
		return view('admin.chapters.index', compact('program', 'module', 'chapters', 'active', 'title'));
	}

	/**
	* Show the form for creating a new Modules.
	*
	* @param  \power\Models\Programs $program
	* @param  \power\Models\Modules $module
	* @return \Illuminate\Http\Response
	*/
	public function create(Programs $program, Modules $module)
    {
    	$active = $this->active;
		$title = $this->title;
		$check = 'create';
        return view('admin.chapters.create', compact('program', 'module', 'active', 'title', 'check'));
    }

    /**
	* Store a newly created resource in storage.
	*
	* @param  \power\Models\Programs $program
	* @param  \power\Models\Modules $module
	* @param ChaptersRequest $request
	* @return void
	*/
    public function store(ChaptersRequest $request, Programs $program, Modules $module)
    {	//echo '<pre>';print_r($request->all());die;
        $chapter = Chapters::create($request->all());
      
        //images
        if(isset($request->images) && count($request->images)>0){
        	foreach($request->images as $image){
        		$uploads = new ChaptersUploads;
        		$uploads->programs_id = $program->id;
        		$uploads->modules_id = $module->id;
        		$uploads->chapters_id = $chapter->id;
        		$uploads->name = $image;
        		$uploads->type = 'image';
        		$uploads->save();
        	}
        }
        //files
        if(isset($request->filesdata) && count($request->filesdata)>0){
        	foreach($request->filesdata as $file){
        		$uploads = new ChaptersUploads;
        		$uploads->programs_id = $program->id;
        		$uploads->modules_id = $module->id;
        		$uploads->chapters_id = $chapter->id;
        		$uploads->name = $file;
        		$uploads->type = 'file';
        		$uploads->save();
        	}
        }

        $request->session()->flash('success', "Chapter {$chapter->title} created!");
        return redirect()->route('chapters.index', [$program->id, $module->id]);
    }




    /**
	* Store a newly created resource in storage.
	*
	* @param  \power\Models\Programs $program
	* @param  \power\Models\Modules $module
	* @param  \power\Models\Chapters $chapter
	* @param ChaptersRequest $request
	* @return void
	*/
    public function edit(Programs $program, Modules $module, Chapters $chapter)
    {    	
    	$active = $this->active;
		$title = $this->title;
		$check = 'edit';
        return view('admin.chapters.edit', compact('program', 'module', 'chapter', 'active', 'title', 'check'));
    }


	/**
	* Update the specified resource in storage.
	*
	* @param ChaptersRequest $request
	* @param  \power\Models\Programs $program
	* @param  \power\Models\Modules $module
	* @param  \power\Models\Chapters $chapter
	* @return \Illuminate\Http\Response
	*/
    public function update(ChaptersRequest $request, Programs $program, Modules $module, Chapters $chapter)
    {
        $chapter->update($request->all());

        //images
        if(isset($request->images) && count($request->images)>0){
        	foreach($request->images as $image){
        		$uploads = new ChaptersUploads;
        		$check = $uploads->where('chapters_id', $chapter->id)->where('name', $image)->first();
        		if(!$check){
	        		$uploads->programs_id = $program->id;
	        		$uploads->modules_id = $module->id;
	        		$uploads->chapters_id = $chapter->id;
	        		$uploads->name = $image;
	        		$uploads->type = 'image';
	        		$uploads->save();
        		}
        	}
        }
        //files
        if(isset($request->filesdata) && count($request->filesdata)>0){
        	foreach($request->filesdata as $file){
        		$uploads = new ChaptersUploads;
        		$check = $uploads->where('chapters_id', $chapter->id)->where('name', $file)->first();
        		if(!$check){
	        		$uploads->programs_id = $program->id;
	        		$uploads->modules_id = $module->id;
	        		$uploads->chapters_id = $chapter->id;
	        		$uploads->name = $file;
	        		$uploads->type = 'file';
	        		$uploads->save();
	        	}
        	}
        }

        $request->session()->flash('success', "Chapter {$chapter->title} updated!");
        return redirect()->route('chapters.index', [$program->id, $module->id]);
    }

    /**
	* Show the form for show the specified resource.
	*
	* @param  \power\Models\Programs $program
	* @param  \power\Models\Modules $module
	* @param  \power\Models\Chapters $chapter
	* @return \Illuminate\Http\Response
	*/
    public function show(Programs $program, Modules $module, Chapters $chapter)
    {
    	$active = $this->active;
		$title = $this->title;
        return view('admin.chapters.show', compact('program', 'module', 'chapter', 'active', 'title'));
    }



    /**
	* Store a newly created resource in storage.
	*
	* upload images using ajax
	* @param Request $request
	* @return void
	*/
    public function uploadImage(Request $request)
    {

    	$validator = Validator::make($request->all(),
			['file' => 'required|mimes:jpeg,jpg,png|max:1024']			
		);
		if ($validator->fails()){
			return array(
			'response' => false,
			'errors' => $validator->getMessageBag()->toArray()
			);
		}

        if ($request->hasFile('file')){
	        $image = $request->file('file');
	        $filename = uniqid(time()) . '.' . $image->getClientOriginalExtension();
	        $path = 'uploads/chapters/images/'.$filename;
	        Image::make($image)->resize(500, 300)->save($path);
	        return response()->json(['filename'=>$filename, 'response'=>true]);
	    }
    }

    /**
	* Store a newly created resource in storage.
	*
	* upload files using ajax
	* @param Request $request
	* @return void
	*/
    public function uploadFiles(Request $request)
    {

    	$validator = Validator::make($request->all(),
			['file' => 'required|mimes:pdf,txt,docx,csv|max:4096']
		);
		if ($validator->fails()){
			return array(
			'response' => false,
			'errors' => $validator->getMessageBag()->toArray()
			);
		}

        if ($request->hasFile('file')){
	        $file = $request->file('file');
	        $filename = uniqid(time()) . '.' . $file->getClientOriginalExtension();
	        $path = 'uploads/chapters/files/';
	        $request->file('file')->move($path, $filename);
	        return response()->json(['filename'=>$filename, 'response'=>true]);
	    }
    }


    /**
	* Store a newly created resource in storage.
	*
	* delete uploaded files using ajax
	* @param Request $request
	* @return void
	*/
    public function deleteFiles(Request $request)
    {
    	if($request->all()){
	    	$value = $request->value;
	    	$type = $request->type;
	    	$file = public_path('uploads/chapters/'.$type.'/'.$value);
	    	if($file){
	    		unlink($file);
	    	}
	    	return response()->json(['response'=>true]);
    	}
    	else{
    		return response()->json(['response'=>false]);
    	}
    }


    /**
	* Remove the specified resource from storage.
	*
	* @param Request $request
	* @param  \power\Models\Programs $program
	* @param  \power\Models\Modules $module
	* @param  \power\Models\Chapters $chapter
	* @return \Illuminate\Http\Response
	* @throws \Exception
	*/
    public function destroy(Request $request, Programs $program, Modules $module, Chapters $chapter)
    {
        $request->session()->flash('error', "Chapter {$chapter->title} deleted!");
        $chapter->delete();
        return redirect()->route('chapters.index', [$program->id, $module->id]);
    }






}

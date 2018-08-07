<?php

namespace App\Http\Controllers\Admin;

use App\Models\ChaptersUploads;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ChaptersUploadsController extends Controller
{
    /**
	* Store a newly created resource in storage.
	*
	* delete uploaded files using ajax
	* @param Request $request
	* @return void
	*/
    public function deleteUploads(Request $request)
    {
    	if($request->all()){
    		$id = $request->id;
    		$value = $request->value;
	    	$type = $request->type;

    		$uploads = new ChaptersUploads;
    		$check = $uploads->find($id);
    		if($check){
	    		$check->delete();
		    	$value = $request->value;
		    	$type = $request->type;
		    	if($type!='video'){
			    	$file = public_path('uploads/chapters/'.$type.'s/'.$value);
			    	if($file){
			    		unlink($file);
			    	}
			    }
			}
	    	return response()->json(['response'=>true]);
    	}
    	else{
    		return response()->json(['response'=>false]);
    	}
    }

}

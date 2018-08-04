<?php

namespace App\Http\Controllers\Admin;

use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManagerStatic as Image;
use App\Http\Requests\Admin\NewsRequest;

class NewsController extends Controller
{
	var $active = 'news';
	var $title = 'News';
	/**
	* Show the application News.
	*
	* @return \Illuminate\Http\Response
	*/
	public function index()
	{
		$news = News::all();
		$active = $this->active;
		$title = $this->title;
		return view('admin.news.index', compact('news', 'active', 'title'));
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
        return view('admin.news.create', compact('active', 'title'));
    }

    /**
	* Store a newly created resource in storage.
	*
	* @param  \App\Models\News $news
	* @param NewsRequest $request
	* @return void
	*/
    public function store(NewsRequest $request, News $news)
    {
        $news = News::create($request->all());
        //upload image
        if ($request->file('image')) {
        	$path = 'uploads/news/';
        	$image = $news->id.'.png';
        	Image::make($request->file('image'))->resize(500, 350)->save($path.$image);
        	Image::make($request->file('image'))->resize(250, 150)->save($path.'small/'.$image);
		}

        $request->session()->flash('success', "News {$news->title} created!");
        return redirect()->route('news.index');
    }

	/**
	* Show the form for editing the specified resource.
	*
	* @param  \App\Models\News $news
	* @return \Illuminate\Http\Response
	*/
    public function edit(News $news)
    {
    	$active = $this->active;
		$title = $this->title;
        return view('admin.news.edit', compact('news', 'active', 'title'));
    }

	/**
	* Update the specified resource in storage.
	*
	* @param NewsRequest $request
	* @param  \App\Models\News $news
	* @return \Illuminate\Http\Response
	*/
    public function update(NewsRequest $request, News $news)
    {
        $news->update($request->all());
        //upload image
        if ($request->file('image')) {
        	$path = 'uploads/news/';
        	$image = $news->id.'.png';
        	Image::make($request->file('image'))->resize(500, 350)->save($path.$image);
        	Image::make($request->file('image'))->resize(250, 250)->save($path.'small/'.$image);
		}
        $request->session()->flash('success', "News {$news->title} updated!");
        return redirect()->route('news.index');
    }


    /**
	* Show the form for show the specified resource.
	*
	* @param  \App\Models\News $news
	* @return \Illuminate\Http\Response
	*/
    public function show(News $news)
    {
    	$active = $this->active;
		$title = $this->title;
        return view('admin.news.show', compact('news', 'active', 'title'));
    }


	/**
	* Remove the specified resource from storage.
	*
	* @param Request $request
	* @param  \App\Models\News $news
	* @return \Illuminate\Http\Response
	* @throws \Exception
	*/
    public function destroy(Request $request, News $news)
    {
        $request->session()->flash('error', "News {$news->title} deleted!");
        $news->delete();
        return redirect()->route('news.index');
    }


}

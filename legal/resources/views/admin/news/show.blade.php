@extends('layouts.admin')

@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-form">
                <div class="box-header">
                    <h3 class="box-title">Show {{ $title }}</h3>
                    <a href="{{ route('news.index') }}" class="btn btn-success pull-right"><i class="fa fa-arrow-left"></i> Back</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="col-md-12">
                        <div class="box-header with-border">
                            <h3 class="box-title">{{ $news->title }}</h3>
                            <div class="pull-right">		                        

		                        @if($news->active =='1')
	                            <button class="btn btn-success">Active</button>
	                            @else
		                        <button class="btn btn-danger">De-active</button>
		                        @endif

		                        <a href="{{ route('news.edit', $news->id) }}" class="btn btn-warning"><i class="fa fa-edit"></i> Edit</a>


	                    	</div>
                        </div>
						<div class="col-md-8">
							<strong>Description</strong>
	                        			<p>{!! $news->description !!}</p>
						</div>
						<div class="col-md-4">
							<span class="show-image pull-right">
								<img src="{{ asset('uploads/news/small/'.$news->id.'.png') }}">
							</span>
						</div>

                        
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>
</section>
@stop

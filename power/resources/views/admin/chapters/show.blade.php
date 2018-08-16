@extends('layouts.admin')

@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-form">
                <div class="box-header">
                    <h3 class="box-title">Show {{ $title }}</h3>
                    <a href="{{ route('chapters.index', [$program->id, $module->id]) }}" class="btn btn-success pull-right"><i class="fa fa-arrow-left"></i> Back</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="col-md-12">
                        <div class="box-header with-border">
                            <h3 class="box-title">{{ $chapter->title }}</h3>
                            <div class="pull-right">

                            	@if($chapter->active =='1')
	                            <button class="btn btn-success">Active</button>
	                            @else
		                        <button class="btn btn-danger">De-active</button>
		                        @endif

		                        <a href="{{ route('chapters.edit', [$program->id, $module->id, $chapter->id]) }}" class="btn btn-warning"><i class="fa fa-edit"></i> Edit</a>

	                    	</div>
                        </div>
						
						<div class="col-md-12">
	                        <strong>Description</strong>
	                        <p>{!! $chapter->description !!}</p>
						</div>

                        <div class="col-md-8">
                            <div class="form-group"><hr>
                                <label>Video</label>
                                <iframe width="100%" height="345" src="{{ $chapter->video }}" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                            </div>
                            
                            @foreach($chapter->chaptersupload as $upload)
                                <div class="form-group"><hr>
                                    <label>{{ $upload->type }}</label><br>       
                                    @if($upload->type=='image')
                                        <img src="{{ asset('uploads/chapters/images/'.$upload->name) }}">
                                    @elseif($upload->type=='file')    
                                        <a href="{{ asset('uploads/chapters/files/'.$upload->name) }}">{{ $upload->name }}</a>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                        
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>
</section>
@stop
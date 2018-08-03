@extends('layouts.admin')

@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-form">
                <div class="box-header">
                    <h3 class="box-title">Show {{ $title }}</h3>
                    <a href="{{ route('programs.index') }}" class="btn btn-success pull-right"><i class="fa fa-arrow-left"></i> Back</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="col-md-12">
                        <div class="box-header with-border">
                            <h3 class="box-title">{{ $program->title }}</h3>
                            <div class="pull-right">
		                        <a href="{{ route('programs.edit', $program->id) }}" class="btn btn-warning"><i class="fa fa-edit"></i> Edit</a>

		                        @if($program->active =='1')
	                            <button class="btn btn-success">Active</button>
	                            @else
		                        <button class="btn btn-danger">De-active</button>
		                        @endif

		                        <a href="{{ route('modules.create', $program->id) }}" class="btn btn-success"><i class="fa fa-plus"></i> Add Module</a>

	                    	</div>
                        </div>
						<div class="col-md-8">
							<strong>Type</strong>
							<p>{{ $program->type }}</p>
							<strong>Price</strong>
							<p>$ {{ $program->price }}/-</p>
							<strong>Short Video Link</strong>
							<p><a href="{{ $program->short_video }}">{{ $program->short_video }}</a></p>
							<strong>Video Link</strong>
							<p><a href="{{ $program->video }}">{{ $program->video }}</a></p>
						</div>
						<div class="col-md-4">
							<span class="show-image pull-right">
								<img src="{{ asset('uploads/programs/small/'.$program->id.'.png') }}">
							</span>
						</div>

						<div class="col-md-12">
	                        <strong>Description</strong>
	                        <p>{!! $program->description !!}</p>
						</div>
                        
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>
</section>
@stop
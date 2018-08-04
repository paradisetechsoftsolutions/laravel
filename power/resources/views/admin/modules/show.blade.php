@extends('layouts.admin')

@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-form">
                <div class="box-header">
                    <h3 class="box-title">Show {{ $title }}</h3>
                    <a href="{{ route('modules.index', $module->program_id) }}" class="btn btn-success pull-right"><i class="fa fa-arrow-left"></i> Back</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="col-md-12">
                        <div class="box-header with-border">
                            <h3 class="box-title">{{ $module->title }}</h3>
                            <div class="pull-right">

                            	@if($module->active =='1')
	                            <button class="btn btn-success">Active</button>
	                            @else
		                        <button class="btn btn-danger">De-active</button>
		                        @endif

		                        <a href="{{ route('modules.edit', [$module->program_id, $module->id]) }}" class="btn btn-warning"><i class="fa fa-edit"></i> Edit</a>

		                        <a href="{{ route('chapters.index', [$module->program_id, $module->id]) }}" class="btn btn-success">Chapters</a>

	                    	</div>
                        </div>
						
						<div class="col-md-12">
	                        <strong>Description</strong>
	                        <p>{!! $module->description !!}</p>
						</div>
                        
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>
</section>
@stop
@extends('layouts.admin')

@section('content')
<section class="content">                    
    <!-- /.row -->
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">List {{ $title }}</h3>
                    <div class="pull-right">
                        <a href="{{ route('modules.show', [$program->id, $module->id]) }}" class="btn btn-success"><i class="fa fa-arrow-left"></i> Back</a>

                        <a href="{{ route('chapters.create', [$program->id, $module->id]) }}" class="btn btn-success"><i class="fa fa-plus"></i> Add</a>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <th>Sr.</th>
                                <th>Title</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            @foreach($chapters as $k => $chapter)
                            <tr>
                                <td>{{ $k+1 }}</td>
                                <td>{{ $chapter->title }}</td>
                                <td>
                                    @if($chapter->active =='1')
                                        <i class="fa fa-check success"></i>
                                    @else
                                        <i class="fa fa-times danger"></i>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('chapters.show', [$program->id, $module->id, $chapter->id]) }}"">
                                        <i class="fa fa-list info"></i>
                                    </a>  
                                    <a href="{{ route('chapters.edit', [$program->id, $module->id, $chapter->id]) }}">
                                        <i class="fa fa-pencil info"></i>
                                    </a>                            
                                    <a data-method="Delete" data-confirm="Are you sure?" href="{{ route('chapters.destroy', [$program->id, $module->id, $chapter->id]) }}">
                                        <i class="fa fa-trash-o danger"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>
@stop
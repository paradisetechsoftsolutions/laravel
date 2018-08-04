@extends('layouts.admin')

@section('content')
<section class="content">                    
    <!-- /.row -->
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">List {{ $title }}</h3>
                    <a href="{{ route('programs.create') }}" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <th>Sr.</th>
                                <th>Title</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            @foreach($programs as $k => $program)
                            <tr>
                                <td>{{ $k+1 }}</td>
                                <td><a href="{{ route('programs.show', $program->id) }}"">{{ $program->title }}</a></td>
                                <td>$ {{ $program->price }}</td>
                                <td>
                                    @if($program->active =='1')
                                        <i class="fa fa-check success"></i>
                                    @else
                                        <i class="fa fa-times danger"></i>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('programs.show', $program->id) }}"">
                                        <i class="fa fa-list info"></i>
                                    </a>  
                                    <a href="{{ route('programs.edit', $program->id) }}"">
                                        <i class="fa fa-pencil info"></i>
                                    </a>                            
                                    <a data-method="Delete" data-confirm="Are you sure?" href="{{ route('programs.destroy', $program->id) }}">
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
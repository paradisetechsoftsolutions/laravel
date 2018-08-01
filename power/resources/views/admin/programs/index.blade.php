@extends('layouts.admin')

@section('content')
<section class="content">                    
    <!-- /.row -->
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">List {{ $title }}</h3>
                    <a type="submit" href="{{ route('programs.create') }}" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <th>Sr.</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            @foreach($programs as $k => $program)
                            <tr>
                                <td>{{ $k+1 }}</td>
                                <td>{{ $program->title }}</td>
                                <td>image</td>
                                <td>{{ $program->price }}</td>
                                <td>{{ $program->active }}</td>
                                <td>
                                    <a class="btn btn-xs btn-info" href="{{ route('programs.edit', $program->id) }}"">
                                        <i class="fa fa-pencil"></i>
                                    </a>                            
                                    <a data-method="DELETE" data-confirm="Are you sure?" href="{{ route('programs.destroy', $program->id) }}" class="btn btn-xs btn-danger">
                                        <i class="fa fa-trash-o"></i>
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
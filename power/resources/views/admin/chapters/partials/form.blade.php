{!! Form::hidden('program_id', $program->id) !!}
{!! Form::hidden('module_id', $module->id) !!}

<div class="form-group {!! ($errors->has('title') ? 'has-error' : '') !!}">
    {!! Form::label('title','Title', ['class' => 'control-label']) !!}
    {!! Form::text('title', null, ['class' => 'form-control' . ($errors->has('title') ? ' is-invalid' : '') ]) !!}
    {!! $errors->first('title', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group {!! ($errors->has('description') ? 'has-error' : '') !!}">
    {!! Form::label('description','Description', ['class' => 'control-label']) !!}
    {!! Form::textarea('description', null, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'rows' => '4' ]) !!}
    {!! $errors->first('description', '<span class="help-block">:message</span>') !!}
</div>

@if($check=='edit')

@foreach($chapter->chaptersupload as $cha)
          {{ $cha->name}} 
@endforeach



@endif




<div id="add_new_chart"></div>

<hr>
<div class="form-group">
    {!! Form::label('Add New Chart','Add New Chart', ['class' => 'control-label']) !!}
</div>
<div class="form-group">
    <button type="button" class="btn btn-danger" onclick="newChart('video')"><i class="fa fa-youtube-play"></i> Add Video</button>
    <button type="button" class="btn btn-warning" onclick="newChart('image')"><i class="fa fa-picture-o"></i> Add Image</button>
    <button type="button" class="btn btn-info" onclick="newChart('file')"><i class="fa fa-paperclip"></i> Add File</button>
</div> 
<hr>

<div class="form-group {!! ($errors->has('active') ? 'has-error' : '') !!}">
    {!! Form::label('active','Active', ['class' => 'control-label']) !!}</br>
    {!! Form::radio('active', 1) !!} Yes
    {!! Form::radio('active', 0) !!} No
    {!! $errors->first('active', '<span class="help-block">:message</span>') !!}
</div>

@section('script')
<script src="{{ asset('js/chapter_chart.js') }}"></script>
@stop
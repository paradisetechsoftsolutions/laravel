{!! Form::hidden('programs_id', $program->id) !!}
{!! Form::hidden('modules_id', $module->id) !!}

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

<div class="form-group {!! ($errors->has('video') ? 'has-error' : '') !!}">
    {!! Form::label('video','Video Link', ['class' => 'control-label']) !!}
    <div class="input-group">
    {!! Form::url('video', null, ['class' => 'form-control' . ($errors->has('video') ? ' is-invalid' : '') ]) !!}
        <div class="input-group-addon video btn btn-success">Get</div>
    </div>
    {!! $errors->first('video', '<span class="help-block">:message</span>') !!}
</div>

@if($check=='edit')
    @foreach($chapter->chaptersupload as $upload)
        <div class="form-group"><hr>
            <label>{{ $upload->type }}</label><br>
            <span class="pull-right deleteThis" data-type="{{ $upload->type }}" data-id="{{ $upload->id }}" data-value="{{ $upload->name }}"><i class="fa fa-trash"></i></span>
            @if($upload->type=='image')
                <img src="{{ asset('uploads/chapters/images/'.$upload->name) }}">
                <input type="hidden" data-type="images" name="images[]" value="{{ $upload->name }}">
            @elseif($upload->type=='file')
                <a href="{{ asset('uploads/chapters/files/'.$upload->name) }}">{{ $upload->name }}</a>
                <input type="hidden" data-type="files" name="filesdata[]" value="{{ $upload->name }}">
            @endif
        </div>
    @endforeach
@endif

<div id="add_new_chart"></div>

<hr>
<div class="form-group">
    {!! Form::label('Add New Chart','Add New Chart', ['class' => 'control-label']) !!}
</div>
<div class="form-group">
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
<script>
CKEDITOR.replace('description');
</script>
@endsection
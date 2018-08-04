<div class="form-group {!! ($errors->has('title') ? 'has-error' : '') !!}">
    {!! Form::label('title','Title', ['class' => 'control-label']) !!}
    {!! Form::text('title', null, ['class' => 'form-control' . ($errors->has('title') ? ' is-invalid' : '') ]) !!}
    {!! $errors->first('title', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group {!! ($errors->has('image') ? 'has-error' : '') !!}">
    {!! Form::label('image','Image', ['class' => 'control-label']) !!}
    {!! Form::file('image', null, ['class' => 'form-control' . ($errors->has('image') ? ' is-invalid' : '') ]) !!}
    {!! $errors->first('image', '<span class="help-block">:message</span>') !!}
    @if(Request::segment(4)=='edit')
        <span class="show-image">
            <img src="{{ asset('uploads/news/small/'.$news->id.'.png') }}">
        </span>
    @endif
</div>

<div class="form-group {!! ($errors->has('description') ? 'has-error' : '') !!}">
    {!! Form::label('description','Description', ['class' => 'control-label']) !!}
    {!! Form::textarea('description', null, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'rows' => '4' ]) !!}
    {!! $errors->first('description', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group {!! ($errors->has('active') ? 'has-error' : '') !!}">
    {!! Form::label('active','Active', ['class' => 'control-label']) !!}</br>
    {!! Form::radio('active', 1) !!} Yes
    {!! Form::radio('active', 0) !!} No
    {!! $errors->first('active', '<span class="help-block">:message</span>') !!}
</div> 
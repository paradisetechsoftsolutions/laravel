<div class="form-group {!! ($errors->has('title') ? 'has-error' : '') !!}">
    {!! Form::label('title','Title', ['class' => 'control-label']) !!}
    {!! Form::text('title', null, ['class' => 'form-control' . ($errors->has('title') ? ' is-invalid' : '') ]) !!}
    {!! $errors->first('title', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group {!! ($errors->has('type') ? 'has-error' : '') !!}">
    {!! Form::label('type','Type', ['class' => 'control-label']) !!}
    {!! Form::text('type', null, ['class' => 'form-control' . ($errors->has('type') ? ' is-invalid' : '') ]) !!}
    {!! $errors->first('type', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group {!! ($errors->has('price') ? 'has-error' : '') !!}">
    {!! Form::label('price','Price', ['class' => 'control-label']) !!}
    <div class="input-group">
        <div class="input-group-addon">
            <i class="fa fa-usd"></i>
        </div>
        {!! Form::number('price', null, ['class' => 'form-control' . ($errors->has('price') ? ' is-invalid' : '') ]) !!}
        {!! $errors->first('price', '<span class="help-block">:message</span>') !!}
    </div>
</div>

<div class="form-group {!! ($errors->has('image') ? 'has-error' : '') !!}">
    {!! Form::label('image','Image', ['class' => 'control-label']) !!}
    {!! Form::file('image', null, ['class' => 'form-control' . ($errors->has('image') ? ' is-invalid' : '') ]) !!}
    {!! $errors->first('image', '<span class="help-block">:message</span>') !!}
    @if(Request::segment(4)=='edit')
        <span class="show-image">
            <img src="{{ asset('uploads/programs/small/'.$program->id.'.png') }}">
        </span>
    @endif
</div>

<div class="form-group {!! ($errors->has('short_video') ? 'has-error' : '') !!}">
    {!! Form::label('short_video','Short Video Link', ['class' => 'control-label']) !!}
    {!! Form::url('short_video', null, ['class' => 'form-control' . ($errors->has('short_video') ? ' is-invalid' : '') ]) !!}
    {!! $errors->first('short_video', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group {!! ($errors->has('video') ? 'has-error' : '') !!}">
    {!! Form::label('video','Video Link', ['class' => 'control-label']) !!}
    {!! Form::url('video', null, ['class' => 'form-control' . ($errors->has('video') ? ' is-invalid' : '') ]) !!}
    {!! $errors->first('video', '<span class="help-block">:message</span>') !!}
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
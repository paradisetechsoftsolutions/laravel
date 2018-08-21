<div class="form-group {!! ($errors->has('title') ? 'has-error' : '') !!}">
    {!! Form::label('title','Title', ['class' => 'control-label']) !!}
    {!! Form::text('title', null, ['class' => 'form-control' . ($errors->has('title') ? ' is-invalid' : '') ]) !!}
    {!! $errors->first('title', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group {!! ($errors->has('description') ? 'has-error' : '') !!}">
    {!! Form::label('description','Description', ['class' => 'control-label']) !!}
    {!! Form::text('description', null, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : '') ]) !!}
    {!! $errors->first('description', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group {!! ($errors->has('categories_title') ? 'has-error' : '') !!}">
    {!! Form::label('categories_title','Categorie Title', ['class' => 'control-label']) !!}
    {!! Form::text('categories_title', null, ['class' => 'form-control' . ($errors->has('categories_title') ? ' is-invalid' : '') ]) !!}
    {!! $errors->first('categories_title', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group {!! ($errors->has('states_id') ? 'has-error' : '') !!}">
    {!! Form::label('states_id','States', ['class' => 'control-label']) !!}
    {!! Form::select('states_id', $states, null, ['class' => 'form-control' . ($errors->has('states_id') ? ' is-invalid' : '') ]) !!}
    {!! $errors->first('states_id', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group {!! ($errors->has('table_rows') ? 'has-error' : '') !!}">
    {!! Form::label('table_rows','Rows', ['class' => 'control-label']) !!}    
    {!! Form::select('table_rows', array('1' => 'One', '2' => 'Two'), null, ['class' => 'form-control' . ($errors->has('table_rows') ? ' is-invalid' : '') ]) !!}
    {!! $errors->first('table_rows', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group {!! ($errors->has('active') ? 'has-error' : '') !!}">
    {!! Form::label('active','Active', ['class' => 'control-label']) !!}</br>
    {!! Form::radio('active', 1) !!} Yes
    {!! Form::radio('active', 0) !!} No
    {!! $errors->first('active', '<span class="help-block">:message</span>') !!}
</div>
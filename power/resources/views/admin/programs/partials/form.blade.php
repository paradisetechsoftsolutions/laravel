<div class="form-group {!! ($errors->has('title') ? 'has-error' : '') !!}">
    {!! Form::label('title','Title', ['class' => 'control-label']) !!}
    {!! Form::text('title', null, ['class' => 'form-control' . ($errors->has('title') ? ' is-invalid' : '') ]) !!}
    {!! $errors->first('title', '<span class="help-block">:message</span>') !!}
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
        @if($program->image)
        <span class="show-image">
            <img src="{{ asset('uploads/programs/small/'.$program->image) }}">
        </span>
        @endif
    @endif
</div>

<div class="form-group {!! ($errors->has('short_video') ? 'has-error' : '') !!}">
    {!! Form::label('short_video','Short Video Link', ['class' => 'control-label']) !!}
    <div class="input-group">
    {!! Form::url('short_video', null, ['class' => 'form-control' . ($errors->has('short_video') ? ' is-invalid' : '') ]) !!}
        <div class="input-group-addon video btn btn-success">Get</div>
    </div>
    {!! $errors->first('short_video', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group {!! ($errors->has('video') ? 'has-error' : '') !!}">
    {!! Form::label('video','Video Link', ['class' => 'control-label']) !!}
    <div class="input-group">
    {!! Form::url('video', null, ['class' => 'form-control' . ($errors->has('video') ? ' is-invalid' : '') ]) !!}
        <div class="input-group-addon video btn btn-success">Get</div>
    </div>
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
@section('script')
<script>
    CKEDITOR.replace('description');




/**
* get video link
*/
jQuery(document).on('click', '.video', function () {
    var $click = jQuery(this);
    var $this = $click.parents('.form-group');
    $this.removeClass('has-error');
    $this.find('.help-block').html('');
    var fileData = $this.find('input[type=url]').val();
    $click.parents('.input-group').after('<span class="help-block"></span>');
    if(!fileData){
        $this.addClass('has-error');
        $this.find('.help-block').html('please add video url link');
        return;
    }
    $click.parents('iframe').hide(); 
    fileData = parseVideo(fileData);
    if(fileData){
        var src = jQuery(fileData).attr('src');
        $this.find('input[type=url]').val(src);
    }
    else {
        $this.addClass('has-error');
        $this.find('.help-block').html('please add video url link');
    }
});

/**
* get youtube/ vimeo video embeded link
*/
function parseVideo (input) {
    var pattern1 = /(?:http?s?:\/\/)?(?:www\.)?(?:vimeo\.com)\/?(.+)/g;
    var pattern2 = /(?:http?s?:\/\/)?(?:www\.)?(?:youtube\.com|youtu\.be)\/(?:watch\?v=)?(.+)/g;

    if (pattern2.test(input)) {
        var replacement = '<iframe width="100%" height="300" src="https://www.youtube.com/embed/$1" frameborder="0" allowfullscreen></iframe>';
        var input = input.replace(pattern2, replacement);
        // For start time, turn get param & into ?
        var input = input.replace('&amp;t=', '?t=');
        return input;
    }

    else if (pattern1.test(input)) {
        var replacement = '<iframe width="100%" height="300" src="https://player.vimeo.com/video/$1" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';
        var input = input.replace(pattern1, replacement);
        return input;
    }
    return;
}


</script>
@endsection
/**
*
* custom add buttons
* for chapters page
* use only admin
*/
var HTML;
var unsaved = false;
//newChart
function newChart(type){
	switch(type){
		case 'video':
		videoFun();	
		break;
		case 'image':
		imageFun();	
		break;
		case 'file':
		fileFun();	
		break;
	}
	unsaved = true;
}

//add video html
function videoFun(){
	HTML = '\
	<div class="form-group"><hr>\
		<label>Add Video Link</label>\
		<span class="pull-right removeHtml"><i class="fa fa-trash"></i></span>\
		<div class="input-group">\
			<input type="url" class="form-control" required>\
			<div class="input-group-addon video btn btn-success">Get</div>\
		</div>\
		<span class="help-block"></span>\
	</div>\
	';
	jQuery('#add_new_chart').append(HTML);
}

//add image html
function imageFun(){
	HTML = '\
	<div class="form-group"><hr>\
		<label>Add Image</label></br>\
		<span class="pull-right removeHtml"><i class="fa fa-trash"></i></span>\
		<input type="file" class="images">\
		<span class="help-block"></span>\
	</div>\
	';
	jQuery('#add_new_chart').append(HTML);
}

//add file html
function fileFun(){
	HTML = '\
	<div class="form-group"><hr>\
		<label>Add Files</label></br>\
		<span class="pull-right removeHtml"><i class="fa fa-trash"></i></span>\
		<input type="file" class="files">\
		<span class="help-block"></span>\
	</div>\
	';
	jQuery('#add_new_chart').append(HTML);
}

/**
*
* remove html
* for chapters page
* use only admin
*/
jQuery(document).on('click', '.removeHtml', function(){
	var $this = jQuery(this);
	var $click = $this.parent('.form-group').find("input[type=hidden]");
	var value = $click.val();
	var type = $click.attr('data-type');

	if(!value){
		$this.parent('.form-group').remove();
		return;
	}
	if(type=='images' || type=='files'){
		var formData = {value:value, type:type};
		var postUrl = "admin/delete_files";

		ajaxRequest1(formData, postUrl, function(res) {
			//processing the data
			if(res.response===true){
				$this.parent('.form-group').remove();
			}
			if(res.response===false){
				alert(type+' not deleted, try again');
			}
		});
	}
	else {
		$click.parent('.form-group').remove();
		return;
	}
});

/**
*
* remove html and data on edit page
* for chapters page
* use only admin
*/
jQuery(document).on('click', '.deleteThis', function(){
	var $this = jQuery(this);
	var type = $this.attr('data-type');
	var id = $this.attr('data-id');
	var value = $this.attr('data-value');
	var check=false;

	var formData = {id:id, type:type, value:value};
	var postUrl = "admin/delete_uploads";

    if (window.confirm("Are you sure?")) {
        check = true;
    }
    if(check==false){
    	return
    }

	ajaxRequest1(formData, postUrl, function(res) {
		//processing the data
		if(res.response===true){
			$this.parent('.form-group').remove();
			alert(type+' deleted');
		}
		if(res.response===false){
			alert(type+' not deleted, try again');
		}
	});
	
});


/**
*
* upload images
* for chapters page
* use only admin
*/
jQuery(document).on('change', '.images', function () {
	var $this = jQuery(this);
	if ($this.val() != '') {
		$this.parents('.form-group').removeClass('has-error');
		$this.parents('.form-group').find('.help-block').html('');
		var fileData = $this.prop('files')[0];
		var formData = new FormData();
		formData.append('file', fileData);

		var postUrl = "admin/upload_image";
		ajaxRequest(formData, postUrl, function(res) {
			//processing the data
			$this.val('');
			if(res.response===true){
				$this.hide();
				$this.after('<input type="hidden" data-type="images" name="images[]" value="'+res.filename+'">');
				$this.after('<img src="'+BASE_URL+'uploads/chapters/images/'+res.filename+'">');
			}
			if(res.response===false){
				$this.parents('.form-group').addClass('has-error');
				jQuery.each(res.errors.file, function( index, value ) {
					$this.parents('.form-group').find('.help-block').append('<p>'+value+'</p>');
				});
			}

		});
	}
});

/**
*
* upload files
* for chapters page
* use only admin
*/
jQuery(document).on('change', '.files', function () {
	var $this = jQuery(this);
	if ($this.val() != '') {
		$this.parents('.form-group').removeClass('has-error');
		$this.parents('.form-group').find('.help-block').html('');
		var fileData = $this.prop('files')[0];
		var formData = new FormData();
		formData.append('file', fileData);

		var postUrl = "admin/upload_files";
		ajaxRequest(formData, postUrl, function(res) {
			//processing the data
			$this.val('');
			if(res.response===true){
				$this.hide();
				$this.after('<input type="hidden" data-type="files" name="filesdata[]" value="'+res.filename+'">');
				$this.after('<a href="'+BASE_URL+'uploads/chapters/files/'+res.filename+'">'+res.filename+'</a>');
			}
			if(res.response===false){
				$this.parents('.form-group').addClass('has-error');
				jQuery.each(res.errors.file, function( index, value ) {
					$this.parents('.form-group').find('.help-block').append('<p>'+value+'</p>');
				});
			}

		});
	}
});


/**
*
* get video link
* for chapters page
* use only admin
*/
jQuery(document).on('click', '.video', function () {
	var $click = jQuery(this);
	var $this = $click.parents('.form-group');
	$this.removeClass('has-error');
	$this.find('.help-block').html('');
	var fileData = $this.find('input[type=url]').val();
	if(!fileData){
		$this.addClass('has-error');
		$this.find('.help-block').html('please add video url link');
		return;
	}
	fileData = parseVideo(fileData);
	if(fileData){
		var src = jQuery(fileData).attr('src');
		$click.parents('.input-group').hide();		
		$click.parents('.input-group').after(fileData);
		$this.after('<input type="hidden" data-type="video" name="videos[]" value="'+src+'">');
	}
	else {
		$this.addClass('has-error');
		$this.find('.help-block').html('please add video url link');
	}
});


/**
*
* get youtube/ vimeo video embeded link
* for chapters page
* use only admin
*/


function parseVideo (input) {
	var pattern1 = /(?:http?s?:\/\/)?(?:www\.)?(?:vimeo\.com)\/?(.+)/g;
	var pattern2 = /(?:http?s?:\/\/)?(?:www\.)?(?:youtube\.com|youtu\.be)\/(?:watch\?v=)?(.+)/g;

    if (pattern2.test(input)) {
		var replacement = '<iframe width="100%" height="345" src="//www.youtube.com/embed/$1" frameborder="0" allowfullscreen></iframe>';
		var input = input.replace(pattern2, replacement);
		// For start time, turn get param & into ?
		var input = input.replace('&amp;t=', '?t=');
		return input;
	}

	else if (pattern1.test(input)) {
		var replacement = '<iframe width="100%" height="345" src="//player.vimeo.com/video/$1" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';
		var input = input.replace(pattern1, replacement);
		return input;
	}
	return;
}


/**
*
* send ajax requests
* for chapters page
* use only admin
*/
function ajaxRequest(formData, postUrl, callback) {
	var res;
	jQuery.ajax({
        headers: { 'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content') }, 
        url: BASE_URL+postUrl,
        type: 'POST',
        data : formData,
        contentType: false,
        cache : false,
        processData: false,
        success: function (response) {
        	res = response;
        	callback(res);
        }
    });
}

/**
*
* send ajax requests without contentType
* for chapters page
* use only admin
*/
function ajaxRequest1(formData, postUrl, callback) {
	var res;
	jQuery.ajax({
        headers: { 'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content') }, 
        url: BASE_URL+postUrl,
        type: 'POST',
        data : formData,
        success: function (response) {
        	res = response;
        	callback(res);
        }
    });
}


/**
*
* page refresh requests
* if html append
* show alert for permission
*/
function unloadPage(){ 
    if(unsaved){
    return "Are you sure to reload this page?";
    }
}
window.onbeforeunload = unloadPage;
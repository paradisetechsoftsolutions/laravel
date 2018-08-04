/**
*
* custom add buttons
* for chapters page
* use only admin
*/
var HTML;
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
}

//add video html
function videoFun(){
	HTML = '\
	<div class="form-group"><hr>\
		<label>Add Video Link</label>\
		<span class="pull-right removeHtml"><i class="fa fa-trash"></i></span>\
		<input type="url" class="form-control" name="name[]" required>\
		<input type="hidden" name="type[video]">\
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

//remove html
jQuery(document).on('click', '.removeHtml', function(){
	jQuery(this).parent('.form-group').remove();
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
		var postUrl = "admin/upload_image";
		upload(fileData, postUrl, function(res) {
			//processing the data
			$this.val('');
			if(res.response===true){
				$this.hide();
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
		var postUrl = "admin/upload_files";
		upload(fileData, postUrl, function(res) {
			//processing the data
			$this.val('');
			if(res.response===true){
				$this.hide();
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
* send ajax requests
* for chapters page
* use only admin
*/
function upload(fileData, postUrl, callback) {
	var formData = new FormData();
	formData.append('file', fileData);
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
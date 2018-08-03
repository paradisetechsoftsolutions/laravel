(function() {
	//hide alerts
	setTimeout(function() { 
	   $('.alert').fadeOut(1000);
	}, 5000);

})();

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
		<label>Add Image</label>\
		<span class="pull-right removeHtml"><i class="fa fa-trash"></i></span>\
		<input type="file" name="name[]" required>\
		<input type="hidden" name="type[image]">\
	</div>\
	';
	jQuery('#add_new_chart').append(HTML);
}

//add file html
function fileFun(){
	HTML = '\
	<div class="form-group"><hr>\
		<label>Add Files</label>\
		<span class="pull-right removeHtml"><i class="fa fa-trash"></i></span>\
		<input type="file" name="name[]" required>\
		<input type="hidden" name="type[file]">\
	</div>\
	';
	jQuery('#add_new_chart').append(HTML);
}

//remove html
jQuery(document).on('click', '.removeHtml', function(){
	jQuery(this).parent('.form-group').remove();
});
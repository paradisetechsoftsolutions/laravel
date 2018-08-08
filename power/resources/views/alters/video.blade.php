
<div id="video-popup" class="success-popup modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <iframe width="100%" height="315" src="" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    </div>
  </div>
</div>

@section('script')
<script>
var $video = jQuery('#video-popup');
$video.modal('hide');
//show video in popup
jQuery('.homePopup').on('click', function(){
    jQuery('#video-popup iframe').attr('src', '');
    var src = jQuery(this).attr('data-src');
    jQuery('#video-popup iframe').attr('src', src);
    $video.modal('show');
});
</script>
@endsection
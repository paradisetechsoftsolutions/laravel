

jQuery('.single-item-slide > a').click( function(){
var video = jQuery(this).attr('href');
jQuery('.cstm-play-vid iframe').attr('src',video);
})


jQuery(window).scroll(function() {    
      var scroll = jQuery(window).scrollTop();

    if (scroll >= 200) {
        jQuery(".site-header").addClass("darkHeader");
    } else {
        jQuery(".site-header").removeClass("darkHeader");
    }
});


          jQuery('.center-slider').slick({
            centerMode: true,
            centerPadding: '0',
            slidesToShow: 3,
            dots: true,
            responsive: [
              {
                breakpoint: 768,
                settings: {
                  arrows: false,
                  centerMode: true,
                  centerPadding: '40px',
                  slidesToShow: 3
                }
              },
              {
                breakpoint: 480,
                settings: {
                  arrows: false,
                  centerMode: true,
                  centerPadding: '40px',
                  slidesToShow: 1
                }
              }
            ]
          });
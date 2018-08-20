jQuery(window).scroll(function() {
    var scroll = jQuery(window).scrollTop();

    if (scroll >= 1) {
        jQuery(".site-header").addClass("darkHeader");
    } else {
        jQuery(".site-header").removeClass("darkHeader");
    }
});


jQuery('.center-slider').slick({
    centerMode: true,
    centerPadding: '0',
    slidesToShow: 2,
    dots: true,
    responsive: [{
            breakpoint: 768,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '30px',
                slidesToShow: 2
            }
        },
        {
            breakpoint: 480,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '30px',
                slidesToShow: 1
            }
        }
    ]
});
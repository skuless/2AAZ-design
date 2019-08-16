'use strict';

  (function($) {
    $(document).ready(function() {
        $(".carouselHomePage").owlCarousel({
            slideSpeed: 300,
            loop: true,
            margin:10,
            paginationSpeed: 400,
            singleItem: true,
            animateOut: 'fadeOut',
            autoPlay: true,
            responsiveClass:true,
            autoplay:true,
            autoplayTimeout:4500,
            autoplayHoverPause:true,
            responsive:{
                0:{
                    items:1,
                },
                600:{
                    items:2,
                    nav:false
                },
                1000:{
                    items:3,
                    loop:false
                }
            }
          });
    });
}) (jQuery);
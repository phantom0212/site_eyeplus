 /*devolop by ngocbich85hd*/
/* day 12/04/2017---*/
(function ($) {
    'use strict';

    jQuery(document).ready(function () {


        /* Preloader */

        $(window).on('load', function () {
            $('body').addClass('loaded');
        });


        /* Smooth Scroll */

        $('a.smoth-scroll').on("click", function (e) {
            var anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $(anchor.attr('href')).offset().top - 50
            }, 1000);
            e.preventDefault();
        });


        /* Scroll Naviagation Background Change with Sticky Navigation */

        $(window).on('scroll', function () {
            if ($(window).scrollTop() > 100) {
                $('.header-top-area').addClass('navigation-background');
            } else {
                $('.header-top-area').removeClass('navigation-background');
            }
        });


        /* Mobile Navigation Hide or Collapse on Click */

        $(document).on('click', '.navbar-collapse.in', function (e) {
            if ($(e.target).is('a') && $(e.target).attr('class') != 'dropdown-toggle') {
                $(this).collapse('hide');
            }
        });
        $('body').scrollspy({
            target: '.navbar-collapse',
            offset: 195

        });


        /* Scroll To Top */




        $('.scroll-to-top').click(function () {
            $('html, body').animate({scrollTop: 0}, 800);
            return false;
        });


        /* Typed.js */

        $(window).load(function () {
            $(".typing").typed({
                strings: ["Chào mừng bạn đến với EyePlus Meadia", "Rất hân hạnh đón tiếp bạn.", "Chúng tôi là một gia đình "+'<i class="fa fa-heart"></i>'], /* You can change the home section typing text from
                 here and do not use "&" use "and" */
                typeSpeed: 50
            });
        });


        /* Parallax Background */

        $(window).stellar({
            responsive: true,
            horizontalScrolling: false,
            hideDistantElements: false,
            horizontalOffset: 0,
            verticalOffset: 0,
        });


        /* Portfolio Filtering */

        $('.icon-inner').mixItUp();


        /* Magnific Popup */

        $('.icon-popup').magnificPopup({
            type: 'image',

            gallery: {enabled: true},
            zoom: {
                enabled: true,
                duration: 500

            },

            image: {
                markup: '<div class="mfp-figure icon-pop-up">' +
                '<div class="mfp-close"></div>' +
                '<div class="mfp-img"></div>' +
                '<div class="mfp-bottom-bar portfolio_title">' +
                '<div class="mfp-title"></div>' +
                '<div class="mfp-counter"></div>' +
                '</div>' +
                '</div>',

                titleSrc: function (item) {
                    return item.el.attr('title');
                }
            }


        });


        /* Testimonial Carousel/Slider */
        $(".testimonial-carousel-list").owlCarousel({
            items: 3,
            autoPlay: false,
            stopOnHover: true,
            navigation: true,
            navigationText: ["<i class='fa fa-angle-left fa-2x owl-navi'></i>", "<i class='fa fa-angle-right fa-2x owl-navi'></i>"],
            itemsDesktop: [1199, 3],
            itemsDesktopSmall: [980, 3],
            itemsTablet: [768, 2],
            itemsTabletSmall: false,
            itemsMobile: [479, 1],
            autoHeight: true,
            pagination: true,
            transitionStyle: "backSlide"
        });

        /* Testimonial Carousel/Slider */
        $(".team-carousel-list").owlCarousel({
            items:5,
            autoPlay: true,
            stopOnHover: true,
            navigation: true,
            navigationText: ["<i class='fa fa-angle-left fa-2x owl-navi'></i>", "<i class='fa fa-angle-right fa-2x owl-navi'></i>"],
            itemsDesktop: [1199, 5],
            itemsDesktopSmall: [980, 3],
            itemsTablet: [768, 2],
            itemsTabletSmall: false,
            itemsMobile: [479, 1],
            autoHeight: true,
            pagination: true,
            transitionStyle: "backSlide"
        });

        /* Testimonial Carousel/Slider */
        $(".news-carousel-list").owlCarousel({
            items:4,
            autoPlay: true,
            stopOnHover: true,
            navigation: true,
            navigationText: ["<i class='fa fa-angle-left fa-2x owl-navi'></i>", "<i class='fa fa-angle-right fa-2x owl-navi'></i>"],
            itemsDesktop: [1199, 4],
            itemsDesktopSmall: [980, 3],
            itemsTablet: [768, 2],
            itemsTabletSmall: false,
            itemsMobile: [479, 1],
            autoHeight: true,
            pagination: true,
            transitionStyle: "backSlide"
        });
        /* Tuyển dụng/Slider */
        $(".recruitment-list").owlCarousel({
            items:3,
            autoPlay: true,
            stopOnHover: true,
            navigation: true,
            navigationText: ["<i class='fa fa-angle-left fa-2x owl-navi'></i>", "<i class='fa fa-angle-right fa-2x owl-navi'></i>"],
            itemsDesktop: [1199, 3],
            itemsDesktopSmall: [980, 2],
            itemsTablet: [768, 2],
            itemsTabletSmall: false,
            itemsMobile: [479, 1],
            autoHeight: true,
            pagination: false,
            transitionStyle: "backSlide"
        });
        /* Statistics Counter */
        $('.statistics').appear(function () {
            var counter = $(this).find('.statistics-count');
            var toCount = counter.data('count');

            $(counter).countTo({
                from: 0,
                to: toCount,
                speed: 5000,
                refreshInterval: 50
            })
        });


        /* Google Map */

        $('#my-address').gMap({
            zoom: 5,
            scrollwheel: true,
            maptype: 'ROADMAP',
            markers: [
                {
                    address: "New York", /* You can change your address from here */
                    html: "<b>Address</b>: <br> Area-2, Rose Area, New York, U.S.A.", /* You can change display address text from here */
                    popup: true
                }
            ]
        });


    });

})(jQuery);

 // táb
 $(document).ready(function () {
     var $tabs = $('#horizontalTab');
     $tabs.responsiveTabs({
         rotate: false,
         startCollapsed: 'accordion',
         collapsible: 'accordion',
         setHash: true,
         click: function (e, tab) {
             $('.info').html('Tab <strong>' + tab.id + '</strong> clicked!');
         },
         activate: function (e, tab) {
             $('.info').html('Tab <strong>' + tab.id + '</strong> activated!');
         },
         activateState: function (e, state) {
             //console.log(state);
             $('.info').html('Switched from <strong>' + state.oldState + '</strong> state to <strong>' + state.newState + '</strong> state!');
         }
     });

     $('#start-rotation').on('click', function () {
         $tabs.responsiveTabs('startRotation', 1000);
     });
     $('#stop-rotation').on('click', function () {
         $tabs.responsiveTabs('stopRotation');
     });
     $('#start-rotation').on('click', function () {
         $tabs.responsiveTabs('active');
     });
     $('#enable-tab').on('click', function () {
         $tabs.responsiveTabs('enable', 3);
     });

     $('.select-tab').on('click', function () {
         $tabs.responsiveTabs('activate', $(this).val());
     });

 });

 //tooltip
 $(document).ready(function () {
     $('[data-toggle="tooltip"]').tooltip();
 });
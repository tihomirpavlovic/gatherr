(function ($) {

    $(document).ready(function () {


        var wpcf7Elm = document.querySelector( '.wpcf7' );
        wpcf7Elm.addEventListener( 'wpcf7mailsent', function( event ) {
            $('.popup.active').css('display','none');
            $('.popup.sucess').css('display','block');

        }, false );


        $('.popup.sucess .button_holder a').on('click', function(e) {
            e.preventDefault();

            $('.popup.sucess').css('display','none');
            $('.popup.typeform').css('display','block');

            var clicked = $(this).data('class');

            if (clicked == "start-influencer") {
                $('.form-influencer').css('display','block');
            } else if (clicked == "start-agency") {
                $('.form-agency').css('display','block');
            } else {
                $('.form-brand').css('display','block');
            }
            
        });


        $('.priority-access-off').on('click', function(e) {
            e.preventDefault();
            $('.popup.sucess').css('display','none');
            location.reload();
           
        });


        $('.popup.typeform .close-button').on('click', function() {
            $('.popup.typeform').css('display','none');
            location.reload();
        });


        fadeIn();

        $('.popup_btn').on('click', function(){
            $('.popup_holder').fadeIn().css('display', 'flex');
            $('body').addClass('no_scroll');
        });

        $('.start-singup').on('click', function(e){
            e.preventDefault();
            $('.popup_holder').fadeIn().css('display', 'flex');
            $('body').addClass('no_scroll');
        });

        $('.close-button').on('click', function(){
            $('.popup_holder').fadeOut();
            $('body').removeClass('no_scroll');
        })


        if ($('.timeline_spot.middle').hasClass('active')){
            $('.timeline_holder .left').addClass('active');
        }

        if ($('.timeline_holder .right .timeline_spot').hasClass('active')){
            $('.timeline_holder .right').addClass('active');
        }

        var list_length =  $('.step_3_section .list li').length - 1;
        var startIndex = 0;

        function timeOutFunction() {
            timeoutHandle = window.setTimeout(function(){
                ( startIndex === list_length ) ? startIndex = 0 : startIndex++;
                $('.step_3_section .list li').eq(startIndex).trigger('click');
            },7000);
        }

        timeOutFunction();

        $('.step_3_section .list li').on('click', function(){
            window.clearTimeout(timeoutHandle);

            var image = $(this).data('image');
            $('.step_3_section .list li').removeClass('active');
            $(this).addClass('active');

            $('.step_3_section .list li').each(function(i, obj) {
                var icon_image = $(this).data('icon');
                $(this).find('img').attr('src',icon_image);
            });

            var icon_active_image = $(this).data('icona');
            $(this).find('img').attr('src',icon_active_image);

            startIndex = $(this).index();

            $('#screen_2_image').fadeOut(function(){
                $('#screen_2_image').attr('src',image).fadeIn(function(){
                    timeOutFunction();
                });
            })
        });

        $('.step_3_section .list li').eq(0).addClass('active');

        var openLightBox = $('.open_light_box');
        var videoLightBox = $('.video_light_box');
        var video1 = $('#video_1');
        var closeLightBox = $('.close_light_box');

        openLightBox.on('click', function(){
            var videoSrc = $(this).data('video');
            videoLightBox.fadeIn();
           // console.log(videoSrc);
            video1.attr('src', videoSrc);
        });

        closeLightBox.on('click', function(){
            videoLightBox.fadeOut();
            video1.attr('src', '');
        });

        var swiper = new Swiper('.creators', {
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            loop: true,
            // pagination: {
            //     el: '.swiper-pagination',
            //     clickable: true,
            // },
            breakpoints: {

                300: {
                    slidesPerView: 3,
                    spaceBetween: 10,
                },
                680: {
                    centeredSlides: false,
                    slidesPerView: 4,
                    spaceBetween: 30,
                   centeredSlides: false
                },
                1100: {
                  slidesPerView: 5,
                  spaceBetween: 70,
                }
              }
        });

        var instagramSwiper = new Swiper('.instagram-swiper', {
            slidesPerView: 'auto',
            centeredSlides: true,
            spaceBetween: 10,
            pagination: {
                el: '.instagram-swiper-pagination',
                clickable: true,
            },
        });

        if ($(document).scrollTop() >= 50) {
            $('header').fadeIn();
          } else {
            $('header').fadeOut();
          }

    });


    $(window).on('resize', function () {
        fadeIn();
    });

    $(window).on('scroll', function () {
        fadeIn();

         if ($(document).scrollTop() >= 50) {
            $('header').fadeIn();
          } else {
            $('header').fadeOut();
          }
    });

    $(window).on('load', function () {});


    function fadeIn() {
        var winHeight = $(window).height();
        var bodyScroll = $(document).scrollTop();
        var calcHeight = bodyScroll + winHeight + 0;

        $('.fadein-wrap').each(function (index, el) {
            if ($(this).offset().top < calcHeight && $(this).offset().top + $(this).height() > bodyScroll) {
                if (!$(this).hasClass('in-view')) {
                    $(this).addClass('in-view');

                    if($(this).hasClass('textillate')){
                        $(this).textillate({
                            // the default selector to use when detecting multiple texts to animate
                            // selector: '.texts',
                            // enable looping
                            loop: false,
                            // sets the minimum display time for each text before it is replaced
                            minDisplayTime: 1500,
                            // sets the initial delay before starting the animation
                            // (note that depending on the in effect you may need to manually apply
                            // visibility: hidden to the element before running this plugin)
                            initialDelay: 0,
                            // set whether or not to automatically start animating
                            autoStart: true,
                            // custom set of 'in' effects. This effects whether or not the
                            // character is shown/hidden before or after an animation
                            inEffects: [],
                            // custom set of 'out' effects
                            // outEffects: [ 'hinge' ],
                            // in animation settings
                            in: {
                                // set the effect name
                                effect: 'fadeIn',
                                // set the delay factor applied to each consecutive character
                                delayScale: 1.5,
                                // set the delay between each character
                                delay: 15,
                                // set to true to animate all the characters at the same time
                                sync: false,
                                // randomize the character sequence
                                // (note that shuffle doesn't make sense with sync = true)
                                shuffle: false,
                                // reverse the character sequence
                                // (note that reverse doesn't make sense with sync = true)
                                reverse: false,
                                // callback that executes once the animation has finished
                                callback: function () {}
                            },
                            // out animation settings.
                            out: {
                                effect: 'hinge',
                                delayScale: 1.5,
                                delay: 50,
                                sync: false,
                                shuffle: false,
                                reverse: false,
                                callback: function () {}
                            },
                            // callback that executes once textillate has finished
                            callback: function () {},
                            // set the type of token to animate (available types: 'char' and 'word')
                            type: 'char'
                        });
                    }

                }
            }
        });
    }

    $('.loader').addClass('loaded');
    $('.loader .loader-logo').addClass('active');

    $(window).on('load', function(){
    setTimeout(function(){
        jQuery('.loader .loader-logo').addClass('clear-active');
        jQuery('.loader').addClass('clear-loader');
        jQuery('.loader').css('opacity',0);
    }, 1000);
});

}(jQuery));

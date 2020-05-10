(function ($) {

    $(document).ready(function () {
        fadeIn();
    });

    $(window).on('resize', function () {
        fadeIn();
    });

    $(window).on('scroll', function () {
        fadeIn();
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
                            minDisplayTime: 500,
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

}(jQuery));

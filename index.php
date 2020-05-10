<?php get_header(); ?>

	<div class="home_page_container">

        <div class="text_section fadein-wrap">
            We want to help creators increase their earnings by enabling them to share
            and endorse a wider range of products by <span>building their own stores.</span>
        </div>

        <div class="video_section">
            <div class="left">
                <h2 class="fadein-wrap textillate">Build a shop for all the products you swear by.</h2>
                <p class="fadein-wrap">Earning a commission from promoting 100s of your favourite products.</p>
            </div>
            <div class="right">
                <div class="image_holder open_light_box fadein-wrap" data-video="https://player.vimeo.com/video/329348351?dnt=1&app_id=122963autoplay=1">
                    <img class="image" src="<?php echo get_template_directory_uri(); ?>/images/video_image_1.jpg" alt="">
                    <div class="play_btn">
                        <img class="icon white" src="<?php echo get_template_directory_uri(); ?>/images/play_icon_white.svg" alt="">
                        <img class="icon black" src="<?php echo get_template_directory_uri(); ?>/images/play_icon_black.svg" alt="">
                    </div>
                </div>

                <div class="video_light_box">
                    <div class="video_holder">
                        <iframe id="video_1"></iframe>
                    </div>
                    <div class="close_light_box">
                        <img class="icon white" src="<?php echo get_template_directory_uri(); ?>/images/times_icon_white.svg" alt="">
                        <img class="icon black" src="<?php echo get_template_directory_uri(); ?>/images/times_icon_black.svg" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="step_section step_1_section fadein-wrap">
            <img id="pattern" src="<?php echo get_template_directory_uri(); ?>/images/step_1_pattern.png" alt="">
            <div class="left">
                <div class="image_holder fadein-wrap">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/demo-ipad-1-desktop.png" alt="">
                </div>
            </div>
            <div class="right">
                <div class="description">
                    <div class="step_icon"><span>1</span></div>
                    <h2 class="fadein-wrap textillate">Start by designing your dream shop.</h2>
                    <p class="fadein-wrap">Choose from a wide choice of templates to help you really get creative.</p>
                </div>
                <div class="image fadein-wrap">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/demo-iphone-1.png" alt="">
                </div>
            </div>
            <img id="line_pattern" src="<?php echo get_template_directory_uri(); ?>/images/step_1_line_pattern.png" alt="">
        </div>

        <div class="step_section step_2_section">
            <div class="left">
                <div class="step_icon"><span>2</span></div>
                <h2 class="fadein-wrap textillate">After that, invite sellers to upload their products.</h2>
                <p class="fadein-wrap">Just copy-and-paste your store link, and send it direct to brand partners.</p>
            </div>
            <div class="right">
                <div class="image_holder fadein-wrap">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/mob_screen.png" alt="">
                </div>
            </div>
        </div>

    </div>

<?php get_footer();

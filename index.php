<?php get_header();
    $parallax_m = 15;
    $parallax_d = 10;
?>

	<div class="home_page_container">

        <div class="text_section fadein-wrap">
            <h3 class="fadein-wrap textillate">Shop-builder for influencers</h3>
            <h2>
                We want to help creators increase their earnings by enabling them to share and endorse a wider range of products by
                <br><span>building their own stores.</span>
            </h2>
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
            <img class="illustration_icon_1" src="<?php echo get_template_directory_uri(); ?>/images/Gatherr_Illustrations-02.svg">
            <div class="left">
                <div class="image_holder fadein-wrap">
                    <img class="desktop" data-parallax-distance="<?php echo -$parallax_d; ?>" src="<?php echo get_template_directory_uri(); ?>/images/demo-ipad-1-desktop.png" alt="">
                    <img class="mobile" data-parallax-distance="<?php  echo -$parallax_m; ?>" src="<?php echo get_template_directory_uri(); ?>/images/demo-ipad-1-mobile.png" alt="">
                </div>
            </div>
            <div class="middle">
                <div class="description">
                    <div class="step_icon fadein-wrap"><span>1</span></div>
                    <h2 class="fadein-wrap textillate">Start by designing your dream shop.</h2>
                    <h3 class="fadein-wrap">Choose from a wide choice of templates to help you really get creative.</h3>
                </div>
            </div>
            <div class="right">

                <div class="image fadein-wrap">
                    <img class="illustration_icon_2" src="<?php echo get_template_directory_uri(); ?>/images/Gatherr_Illustrations-01.svg">
                    <img data-parallax-distance="<?php if(my_wp_is_mobile()): echo $parallax_m; else: echo $parallax_d; endif; ?>" src="<?php echo get_template_directory_uri(); ?>/images/demo-iphone-1.png" alt="">
                </div>
            </div>
            <img id="line_pattern" src="<?php echo get_template_directory_uri(); ?>/images/step_1_line_pattern.png" alt="">
        </div>

        <div class="step_section step_2_section">
            <div class="left">
                <img class="illustration_icon" src="<?php echo get_template_directory_uri(); ?>/images/Gatherr_Illustrations-01.svg">

                <div class="step_icon fadein-wrap">
                    <span>2</span>
                </div>
                <h2 class="fadein-wrap textillate">After that, invite sellers to upload their products.</h2>
                <p class="fadein-wrap">Just copy-and-paste your store link, and send it direct to brand partners.</p>
            </div>
            <div class="right">
                <div class="image_holder fadein-wrap">
                    <img data-parallax-distance="<?php if(my_wp_is_mobile()): echo $parallax_m; else: echo $parallax_d; endif; ?>" src="<?php echo get_template_directory_uri(); ?>/images/mob_screen.png" alt="">
                </div>
            </div>
        </div>

        <div class="step_section step_3_section fadein-wrap">
            <img class="illustration_icon_1" src="<?php echo get_template_directory_uri(); ?>/images/Gatherr_Illustrations-03.svg">

            <div class="description mobile">
                <div class="step_icon fadein-wrap"><span>3</span></div>
                <h2 class="fadein-wrap textillate">Then, choose which ones you want to go on your store.</h2>
            </div>

            <div class="left">
                <div class="image_holder screen_1 fadein-wrap">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/step_3_image_1.png" alt="">

                    <img class="arrow" src="<?php echo get_template_directory_uri(); ?>/images/right_arrow_black.svg" alt="">
                </div>

                <div class="image_holder screen_2 fadein-wrap">
                    <img id="screen_2_image" src="<?php echo get_template_directory_uri(); ?>/images/step_3_image_2.png" alt="">
                </div>

                <div class="image_holder hand fadein-wrap">
                    <img data-parallax-distance="<?php if(my_wp_is_mobile()): echo -$parallax_m; else: echo -$parallax_d; endif; ?>" src="<?php echo get_template_directory_uri(); ?>/images/hand_overlay.png" alt="">
                </div>
            </div>
            <div class="right">
                <div class="description desktop">
                    <img class="illustration_icon_2" src="<?php echo get_template_directory_uri(); ?>/images/Gatherr_Illustrations-04.svg">

                    <div class="step_icon fadein-wrap"><span>3</span></div>
                    <h2 class="fadein-wrap textillate">Then, choose which ones you want to go on your store.</h2>
                </div>

                <ul class="list">
                    <li class="fadein-wrap" data-image="<?php echo get_template_directory_uri(); ?>/images/step_3_image_2.png">
                        <div class="icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/step_3_icon_2.svg" alt="">
                        </div>
                        <h3>Products you swear by and know your audience will love.</h3>
                    </li>
                    <li class="fadein-wrap" data-image="<?php echo get_template_directory_uri(); ?>/images/step_3_image_2.png">
                        <div class="icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/step_3_icon_2.svg" alt="">
                        </div>
                        <h3>Do-good products deserving of an extra push.</h3>
                    </li>
                    <li class="fadein-wrap" data-image="<?php echo get_template_directory_uri(); ?>/images/step_3_image_2.png">
                        <div class="icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/step_3_icon_3.svg" alt="">
                        </div>
                        <h3>Products from your brand partners and collaborations.</h3>
                    </li>
                </ul>
            </div>
        </div>

        <div class="step_section step_4_section">
            <div class="top">
                <div class="left">
                    <img class="illustration_icon_1" src="<?php echo get_template_directory_uri(); ?>/images/Gatherr_Illustrations-05.svg">

                    <div class="step_icon fadein-wrap"><span>4</span></div>
                    <h2 class="fadein-wrap">
                        Promote it on your profile, and <br>
                        <span>earn money around the clock.</span>
                    </h2>
                    <p class="fadein-wrap">Earning up to 20% commission from each sale.</p>
                </div>
                <div class="right">
                    <div class="image_holder fadein-wrap">
<!--                        <img src="--><?php //echo get_template_directory_uri(); ?><!--/images/step_4_image.jpg" alt="">-->
                        <img src="<?php echo get_template_directory_uri(); ?>/images/Gatherr_Illustrations-09.svg" alt="">
                    </div>
                </div>
            </div>
            <div class="gallery fadein-wrap">
                <div class="gallery_wrap desktop">

                    <div class="single_column">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/twitter.jpg">
                    </div>
                    <div class="single_column">
                        
                        <img src="<?php echo get_template_directory_uri(); ?>/images/pinterest.jpg">
                    </div>
                    <div class="single_column">
                        
                        <img src="<?php echo get_template_directory_uri(); ?>/images/youtube.jpg">
                    </div>
                    <div class="single_column">
                        
                        <img src="<?php echo get_template_directory_uri(); ?>/images/tik-tok.jpg">
                    </div>
                    <div class="single_column">
                        
                        <img src="<?php echo get_template_directory_uri(); ?>/images/instagram.jpg">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/instagram2.jpg">
                    </div>
                    <div class="single_column">
                        
                        <img src="<?php echo get_template_directory_uri(); ?>/images/lastscreen.jpg">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/lastscreen2.jpg">
                    </div>
                </div>

                <div class="gallery_wrap mobile">

<!--                    <div class="illustration_icon">-->
<!--                        <img  src="--><?php //echo get_template_directory_uri(); ?><!--/images/Gatherr_Illustrations-01.svg">-->
<!--                    </div>-->

                    <div class="single_column">
                        
                        <img src="<?php echo get_template_directory_uri(); ?>/images/twitter.jpg">
                    </div>
                    <div class="single_column">
                        
                        <img src="<?php echo get_template_directory_uri(); ?>/images/pinterest.jpg">
                    </div>
                    <div class="single_column">
                        
                        <img src="<?php echo get_template_directory_uri(); ?>/images/youtube.jpg">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/screen1.jpg">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/screen1.jpg">
                    </div>
                    <div class="single_column">
                        
                        <img src="<?php echo get_template_directory_uri(); ?>/images/tik-tok.jpg">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/lastscreen.jpg">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/lastscreen2.jpg">
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="step_section step_5_section fadein-wrap">
            <div class="left">
                <div class="image_holder fadein-wrap">
                    <img data-parallax-distance="<?php if(my_wp_is_mobile()): echo $parallax_m; else: echo $parallax_d; endif; ?>" src="<?php echo get_template_directory_uri(); ?>/images/orders_tablet.png" alt="">
                </div>
            </div>
            <div class="right">
                <img class="illustration_icon" src="<?php echo get_template_directory_uri(); ?>/images/Gatherr_Illustrations-01.svg">
                <div class="step_icon fadein-wrap"><span>5</span></div>
                <h2 class="fadein-wrap textillate">When there’s an order, your sellers handle the rest!</h2>
                <h3 class="fadein-wrap">We get it, you’re busy. So let’s leave it to the experts.</h3>
            </div>
        </div>

        <div class="table_section">
                <img class="illustration_icon"  src="<?php echo get_template_directory_uri(); ?>/images/Gatherr_Illustrations-07.svg">
            <div class="left">
                <h2>
                    <span>Yes, that’s right.</span>
                    You don’t deliver,
                    upload, stock or
                    handle customer
                    service.
                </h2>
                <p>
                    Which means <span>less</span> no time spent doing the boring stuff, more time creating.
                </p>
            </div>

            <div class="right">
                
                <table>
                    <tr class="fadein-wrap">
                        <th></th>
                        <th></th>
                        <th>Creator</th>
                        <th>Seller</th>
                    </tr>
                    <tr class="fadein-wrap">
                        <td>
                            <div class="number fadein-wrap">1</div>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/upload.svg" alt="">
                        </td>
                        <td>Uploads Products</td>
                        <td></td>
                        <td><img class="checkmark" src="<?php echo get_template_directory_uri(); ?>/images/checkmark.jpg" alt=""></td>
                    </tr>
                    <tr class="fadein-wrap">
                        <td>
                            <div class="number fadein-wrap">2</div>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/selfie.svg" alt="">
                        </td>
                        <td>Promote store</td>
                        <td><img class="checkmark" src="<?php echo get_template_directory_uri(); ?>/images/checkmark.jpg" alt=""></td>
                        <td></td>
                    </tr>
                    <tr class="fadein-wrap">
                        <td>
                            <div class="number fadein-wrap">3</div>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/tryandbuy.svg" alt="">
                        </td>
                        <td>Order Complete</td>
                    </tr>
                    <tr class="fadein-wrap">
                        <td>
                            <div class="number fadein-wrap">4</div>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/box.svg" alt="">
                        </td>
                        <td>Packages and delivers</td>
                        <td></td>
                        <td><img class="checkmark" src="<?php echo get_template_directory_uri(); ?>/images/checkmark.jpg" alt=""></td>
                    </tr>
                    <tr class="fadein-wrap">
                        <td>
                            <div class="number fadein-wrap">5</div>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/customerservice.svg" alt="">
                        </td>
                        <td>Manager returns and customer service</td>
                        <td></td>
                        <td><img class="checkmark" src="<?php echo get_template_directory_uri(); ?>/images/checkmark.jpg" alt=""></td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="swiper_section fadein-wrap">
            <h2 class="fadein-wrap textillate">Gatherr will be for all kinds of creators.</h2>
            <div class="swiper_buttons_holder">
                <div class="swiper-button-next">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/left_swiper_arrow.svg">
                </div>
                <div class="swiper-button-prev">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/right_swiper_arrow.svg">
                </div>
            </div>
            <div class="swiper-container creators fadein-wrap">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="headline">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/fitness.svg">
                            <p>Fintess</p>
                        </div>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/screen.jpg">
                    </div>
                    <div class="swiper-slide">
                        <div class="headline">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/lipstick.svg">
                            <p>Make-up</p>
                        </div>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/makeup.jpg">
                    </div>
                    <div class="swiper-slide">
                        <div class="headline">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/fashion.svg">
                            <p>Fashion</p>
                        </div>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/fashion.jpg">
                    </div>
                    <div class="swiper-slide">
                        <div class="headline">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/lifestyle.svg">
                            <p>Lifestyle</p>
                        </div>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/lifestyle.jpg">
                    </div>
                    <div class="swiper-slide">
                        <div class="headline">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/decorators.svg">
                            <p>Decorators</p>
                        </div>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/decorators.jpg">
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="timeline_section_wrap">
            <div class="timeline_section">
                
                <img class="illustration_icon" src="<?php echo get_template_directory_uri(); ?>/images/Gatherr_Illustrations-08.svg" alt="">

                <h2 class="fadein-wrap textillate">Timeline</h2>

                <div class="timeline_holder">
                    <div class="left">
                        <div class="timeline_spot active">
                            <p class="fadein-wrap">
                                Creating our product
                            </p>
                        </div>
                        <div class="timeline_spot middle">
                            <p class="fadein-wrap">
                                Inviting early users
                            </p>
                        </div>
                    </div>
                    <div class="right">
                        <div class="timeline_spot">
                            <p class="fadein-wrap">
                                Launch
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="form_section">
            <img class="illustration_icon" src="<?php echo get_template_directory_uri(); ?>/images/Gatherr_Illustrations-05.svg">
            <div class="form_content">
                <h2 class="fadein-wrap">Sounds <br>interesting, right?</h2>
                <p class="fadein-wrap">
                    If you think what we’re building sounds like something you’d use, sign-up below for early access and behind-the-scenes updates.
                </p>
                <a class="button fadein-wrap">
                    Yes, I’m interested
                    <img src="<?php echo get_template_directory_uri(); ?>/images/button_arrow_right.png">
                </a>


                <div class="form_holder">
                    <form id="contact_form">
                        <input type="" name="">
                    </form>
                </div>
            </div>
        </div>

    </div>

<?php get_footer();

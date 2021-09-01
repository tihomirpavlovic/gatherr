<?php /* Template Name: Front Page */ ?>
<?php get_header();
    $parallax_m = 15;
    $parallax_d = 10;
?>
<style type="text/css">
.home_page_container .swiper_section .swiper-container {
    margin-right: 0;
    width: 120%;
    left: -10%;
}
.footer__ButtonsWrapper-sc-1bn1rrm-6 {
    display: none !important;
}
.popup_holder .popup {
    width: 100%;
    max-width: 340px;
}
.popup_holder .popup.typeform {
    width: 94%;
    margin-left: 3%;
    margin-right: 3%;
    position: relative;
    max-width: 100%;
}
.popup_holder .popup.typeform .typeform-wrap .close-button {
    z-index: 9999 !important;
    top:40px;
    right: 40px;
    position: absolute;
    max-width: 30px;
}
.popup_holder .popup.typeform iframe {
    width: 100%;
    height: 90Vh;
    margin-top: 8Vh;
}
.screen-reader-response ul, .wpcf7-response-output , .wpcf7-validation-errors{
    display: none !important;
}
.screen-reader-response {
    text-align: center;
    color:red;
    margin-bottom: 7px;
    font-size: 12px;
}
.home_page_container .step_3_section .right ul li .icon {
	max-width: 40px;
	flex-direction: column;
}
.home_page_container .step_3_section .right ul li .icon img {
    display: block;
    margin: 0 auto;
    max-width: 40px;
}

.home_page_container .step_3_section .left .image_holder.hand {
    margin-top: 60px;
    margin-left: -20px;
}
.loader {
    display: block;
    width: 0%;
    height: 100%;
    position: fixed;
    top: 0;
    left: 0;
    z-index: 999999 !important;
    background: #fff;
    opacity: 0;
    visibility: hidden;
    -webkit-transition: all .4s ease 0s;
    -moz-transition: all .4s ease 0s;
    -o-transition: all .4s ease 0s;
    transition: all .4s ease 0s;
}
.loader.loaded {
    opacity: 1;
    visibility: visible;
    width: 100%;
    z-index: 9999 !important;
}
.loader .loader-logo {
    width: 100%;
    max-width: 300px;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    z-index: 999999;
    text-align: center;
}
.loader .loader-logo {

}
.loader .loader-logo.active img:first-of-type, .loader .loader-logo.active img:last-of-type {
    transform: translateY(0);
    opacity: 1;
}
.loader.clear-loader {
    left: auto;
    right: 0;
    width: 0;
    visibility: hidden;
}
.home_page_container .swiper_section .swiper-container .swiper-slide img {
    width: 100%;
    -webkit-box-shadow: 0px 0px 0px 0px rgba(0, 0, 0, 0.0);
    box-shadow:0px 0px 0px 0px rgba(0, 0, 0, 0.0);
}
.popup_holder .popup.sucess .button_holder a {
    display: block;
    margin-bottom: 10px;
}
@media only screen and (min-width: 650px) {
    .popup_holder .popup.typeform {
        width: 94%;
        margin-left: 3%;
        
    }
}
@media only screen and (max-width: 649px) {
	.popup_holder .popup.typeform {
        padding: 0 10px;
        margin-top: 0px;
        width: 100%;
        height: auto;
        margin-left:0;
        margin-right: 0;
        position: absolute;
        top:50%;
        transform: translateY(-50%);
    }
    .popup_holder .popup.typeform .typeform-wrap .close-button {
        max-width: 10px;
    position: absolute;
    top: 15px;
    right: 15px;
    cursor: pointer;
	}
	.popup_holder .popup.typeform iframe {
	    height: 500px;
	    margin-top: 0;
	}
    .home_page_container .step_3_section .left .image_holder.hand {
        margin-top:30px;
        margin-left: 0;
    }
    .popup-first {
        padding: 30px 15px;
    }
    .popup-first input:active {
      font-size: 16px;  
    }
}
.form-embed-code {
    display: none;
}
</style>
    <div class="popup_holder">
        <!-- IMAMO DVA POPUP PRVI IMA KLASU ACTIVE I VIDLJIV JE. KADA PREBACIS KLASU AKTIVE NA DRUGI VIDECE SE I ON -->
        <div class="popup popup-first active">
            <div class="logo"><img src="<?php the_field('logo_image','option'); ?>" alt="Gatherr logo"></div>
            <p>Want to get early access and product updates?</p>
            <!-- <form>
                <input type="" name="" placeholder="Your email">
                <button>Sign up</button>
            </form> -->
            <?php echo do_shortcode('[contact-form-7 id="119" title="Subscribe form"]'); ?>
            <div class="close-button">
                <img src="<?php echo get_template_directory_uri(); ?>/images/close.png" alt="close">
            </div>
        </div>
        <div class="popup sucess">
            <div class="clap"><img src="<?php echo get_template_directory_uri(); ?>/images/clap.svg" alt="close"></div>
            <p>You’re on the list! <br>Want priority access?</p>
            <span>We're looking for early adopters like you to take part in our 30 second survey below.</span>

            <div class="button_holder">
                <a href="" data-class="start-influencer" class="start-influencer">I'm an influencer</a>
                <a href="" data-class="start-agency" class="start-agency">I'm an agency</a>
                <a href="" data-class="start-brand" class="start-brand">I'm a brand</a>
            </div>
            <div><a class="priority-access-off" href=""><span>I don't want priority access</span></a></div>
            
            <div class="close-button">
                <img src="<?php echo get_template_directory_uri(); ?>/images/close.png" alt="close">
            </div>
        </div>


        <div class="popup typeform">
            
            <div class="typeform-wrap">
                <div class="close-button">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/close.png" alt="close">
                </div>
                <div class="form-embed-code form-influencer">
                    <div class="typeform-widget" data-url="https://gatherr.typeform.com/to/ChT9UJ" style="width: 100%; height: 90Vh"></div>
                </div>
                <div class="form-embed-code form-agency">
                    <div class="typeform-widget" data-url="https://gatherr.typeform.com/to/ZOkC7D" style="width: 100%; height: 90Vh"></div> 
                </div>
                <div class="form-embed-code form-brand">
                    <div class="typeform-widget" data-url="https://gatherr.typeform.com/to/SUxwOE" style="width: 100%; height: 90Vh"></div> 
                </div>
            </div>

            <script> (function() { var qs,js,q,s,d=document, gi=d.getElementById, ce=d.createElement, gt=d.getElementsByTagName, id="typef_orm", b="https://embed.typeform.com/"; if(!gi.call(d,id)) { js=ce.call(d,"script"); js.id=id; js.src=b+"embed.js"; q=gt.call(d,"script")[0]; q.parentNode.insertBefore(js,q) } })() </script>
        </div>

    </div>

	<div class="home_page_container">

        <div class="text_section fadein-wrap">
            <h3 class=""><?php the_field('first_section_top_title'); ?></h3>
            <h2 class="fadein-wrap">
               <?php the_field('first_section_title'); ?>
            </h2>
            <div class="short_message fadein-wrap">
            	<span><?php the_field('first_section_emoji_icon'); ?></span>
                <!-- <img src="<?php the_field('first_section_mode_icon'); ?>" alt="<?php the_field('first_section_mode_title'); ?>"> -->
                <p><?php the_field('first_section_mode_title'); ?></p>
            </div>
            <div class="scroll_down_holder">
                <p>scroll down</p>
                <img src="<?php echo get_template_directory_uri(); ?>/images/Gatherr_Illustrations-05.svg">
            </div>
        </div>

        <div class="video_section">
            <div class="left">
                <h3>Share more, earn more.</h3>
                <h2 class="fadein-wrap textillate"><?php the_field('build_a_shop_title'); ?></h2>
                <p class="fadein-wrap"><?php the_field('build_a_shop_description'); ?></p>
            </div>
            <div class="right">
                <div class="image_holder open_light_box fadein-wrap" data-video="<?php the_field('build_a_shop_video_link'); ?>">
                    <img class="image" src="<?php the_field('build_a_shop_image') ?>" alt="<?php the_field('build_a_shop_title') ?>">
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
                    <img class="desktop" src="<?php the_field('dram_shop_tablet_image') ?>" alt="<?php the_field('dram_shop_title') ?>">
                    <img class="mobile" src="<?php the_field('dram_shop_tablet_image_mobile') ?>" alt="<?php the_field('dram_shop_title') ?>">
                </div>
            </div>
            <div class="middle">
                <div class="description">
                    <div class="step_icon fadein-wrap"><span>1</span></div>
                    <h2 class="fadein-wrap textillate"><?php the_field('dram_shop_title') ?></h2>
                    <h3 class="fadein-wrap"><?php the_field('dram_shop_description') ?></h3>
                </div>
            </div>
            <div class="right">

                <div class="image fadein-wrap">
                    <img class="illustration_icon_2" src="<?php echo get_template_directory_uri(); ?>/images/Gatherr_Illustrations-01.svg">
                    <img src="<?php the_field('dram_shop_phone_image') ?>" alt="<?php the_field('dram_shop_title') ?>">
                </div>
            </div>
            <img id="line_pattern" src="<?php echo get_template_directory_uri(); ?>/images/step_1_line_pattern.png" alt="<?php the_field('dram_shop_title') ?>">
        </div>

        <div class="step_section step_2_section">
            <div class="left">
                <img class="illustration_icon" src="<?php echo get_template_directory_uri(); ?>/images/Gatherr_Illustrations-01.svg" alt="<?php the_field('dram_shop_title') ?>">

                <div class="step_icon fadein-wrap">
                    <span>2</span>
                </div>
                <h2 class="fadein-wrap textillate"><?php the_field('upload_products_title'); ?></h2>
                <p class="fadein-wrap"><?php the_field('upload_products_description'); ?></p>
            </div>
            <div class="right">
                <div class="image_holder fadein-wrap">
                    <img src="<?php the_field('upload_products_image') ?>" alt="<?php the_field('upload_products_title'); ?>">
                </div>
            </div>
        </div>




        <div class="step_section step_3_section fadein-wrap">
            <img class="illustration_icon_1" src="<?php echo get_template_directory_uri(); ?>/images/Gatherr_Illustrations-03.svg">

            <div class="description mobile">
                <div class="step_icon fadein-wrap"><span>3</span></div>
                <h2 class="fadein-wrap textillate"><?php the_field('choose_store_products_title') ?></h2>
            </div>


            <?php $list = get_field('bespoke_portfolio_bs_list'); ?>
            <div class="left">
                <div class="image_holder screen_1 fadein-wrap">
                    <img src="<?php the_field('choose_store_products_under_hand_image') ?>" alt="<?php the_field('choose_store_products_title') ?>">
                    <img class="arrow" src="<?php echo get_template_directory_uri(); ?>/images/right_arrow_black.svg" alt="">
                </div>
                 <?php $list = get_field('bullet_points'); ?>
                <div class="image_holder screen_2 fadein-wrap">
                    <?php $count=1; foreach($list as $item) : ?>
                        <?php if($count == 1) : ?>
                            <img id="screen_2_image" src="<?php echo $item['image']; ?>" alt="<?php echo $item['text']; ?>">
                        <?php endif; ?>
                    <?php $count++; endforeach; ?>
                </div>

                <div class="image_holder hand fadein-wrap">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/hand_overlay.png" alt="">
                </div>
            </div>

            <div class="right">
                <div class="description desktop">
                    <img class="illustration_icon_2" src="<?php echo get_template_directory_uri(); ?>/images/Gatherr_Illustrations-04.svg">

                    <div class="step_icon fadein-wrap"><span>3</span></div>
                    <h2 class="fadein-wrap textillate"><?php the_field('choose_store_products_title') ?></h2>
                </div>


                <?php $list = get_field('bullet_points'); ?>
                <ul class="list">
                    <?php foreach($list as $item) : ?>
                    <li class="fadein-wrap" data-image="<?php echo $item['image']; ?>" data-icon="<?php echo $item['icon']; ?>" data-icona="<?php echo $item['icon_active']; ?>">
                        <div class="icon">
                            <div class="circle"></div>
                            <img src="<?php echo $item['icon']; ?>" alt="<?php echo $item['text']; ?>">
                        </div>
                        <h3><?php echo $item['text']; ?></h3>
                    </li>
                    <?php endforeach; ?>
                    <!-- <li class="fadein-wrap" data-image="<?php echo get_template_directory_uri(); ?>/images/step_3_image_2.png">
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
                    </li> -->
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
                        <div class="image_holder">
                            <img class="icon" src="<?php echo get_template_directory_uri(); ?>/images/twitter.png">
                            <img src="<?php the_field('promote_screens_first'); ?>" alt="Twitter">
                        </div>
                    </div>
                    <div class="single_column">
                        <div class="image_holder">
                            <img class="icon" src="<?php echo get_template_directory_uri(); ?>/images/pinterest.png">
                            <img src="<?php the_field('promote_screens_second'); ?>" alt="Pinterest">
                        </div>
                    </div>
                    <div class="single_column">
                        <div class="image_holder">
                            <img class="icon" src="<?php echo get_template_directory_uri(); ?>/images/youtube.png">
                        
                            <img src="<?php the_field('promote_screens_third'); ?>" alt="Youtube">
                        </div>
                    </div>
                    <div class="single_column">
                        <div class="image_holder">
                            <img class="icon" src="<?php echo get_template_directory_uri(); ?>/images/tiktok.png">
                        
                            <img src="<?php the_field('promote_screens_fourth'); ?>" alt="Promotion">
                        </div>
                    </div>
                    <div class="single_column">
                        <div class="image_holder">
                            <img class="icon" src="<?php echo get_template_directory_uri(); ?>/images/instagram.png">
                            <img src="<?php the_field('promote_screens_fifth'); ?>" alt="promotions group">
                        </div>
                        
                            <img src="<?php the_field('promote_screens_sixth'); ?>" alt="promotions group1">
                        
                    </div>
                    <div class="single_column">
                        
                        <img src="<?php the_field('promote_screens_seventh'); ?>" alt="promotions group">
                        
                        <div class="image_holder">
                            <img class="icon" src="<?php echo get_template_directory_uri(); ?>/images/podcasts.png">
                            <img src="<?php the_field('promote_screens_eighth'); ?>" alt="promotions group1">
                        </div>
                    </div>
                </div>

                <div class="gallery_wrap mobile">

<!--                    <div class="illustration_icon">-->
<!--                        <img  src="--><?php //echo get_template_directory_uri(); ?><!--/images/Gatherr_Illustrations-01.svg">-->
<!--                    </div>-->

                    <div class="single_column">
                        <div class="image_holder">
                            <img class="icon" src="<?php echo get_template_directory_uri(); ?>/images/twitter.png">
                            <img src="<?php the_field('promote_screens_first'); ?>" alt="Twitter">
                        </div>
                    </div>
                    <div class="single_column">
                        <div class="image_holder">
                            <img class="icon" src="<?php echo get_template_directory_uri(); ?>/images/pinterest.png">
                        
                            <img src="<?php the_field('promote_screens_second'); ?>" alt="Pinterest">
                        </div>
                    </div>
                    <div class="single_column">
                        <div class="image_holder">
                            <img class="icon" src="<?php echo get_template_directory_uri(); ?>/images/youtube.png">
                            <img src="<?php the_field('promote_screens_third'); ?>" alt="Youtube">
                        </div>
                        <div class="image_holder">
                            <img class="icon" src="<?php echo get_template_directory_uri(); ?>/images/instagram.png">
                            <img src="<?php the_field('promote_screens_fourth'); ?>" alt="Promotion">
                        </div>
                        <img src="<?php the_field('promote_screens_fifth'); ?>" alt="promotions group">
                    
                    </div>
                    <div class="single_column">
                        <div class="image_holder">
                            <img class="icon" src="<?php echo get_template_directory_uri(); ?>/images/tiktok.png">
                            <img src="<?php the_field('promote_screens_sixth'); ?>" alt="promotions group1">
                        </div>
                        <img src="<?php the_field('promote_screens_seventh'); ?>" alt="promotions group">
                        <div class="image_holder">
                            <img class="icon" src="<?php echo get_template_directory_uri(); ?>/images/podcasts.png">
                            <img src="<?php the_field('promote_screens_eighth'); ?>" alt="promotions group1">
                        </div>
                    
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="step_section step_5_section fadein-wrap">
            <div class="left">
                <div class="image_holder fadein-wrap">
                    <img src="<?php the_field('an_order_image'); ?>" alt="<?php the_field('an_order_title'); ?>">
                </div>
            </div>
            <div class="right">
                <img class="illustration_icon" src="<?php echo get_template_directory_uri(); ?>/images/Gatherr_Illustrations-01.svg">
                <div class="step_icon fadein-wrap"><span>5</span></div>
                <h2 class="fadein-wrap textillate"><?php the_field('an_order_title'); ?></h2>
                <h3 class="fadein-wrap"><?php the_field('an_order_description'); ?></h3>
            </div>
        </div>

        <div class="table_section">
                <img class="illustration_icon"  src="<?php echo get_template_directory_uri(); ?>/images/Gatherr_Illustrations-07.svg">
            <div class="left">
                <h2 class="fadein-wrap">
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

                <div class="scroll_down_holder">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Gatherr_Illustrations-05.svg">
                </div>
            </div>

        </div>
        <?php
        $shop_link = get_field('example_shop_link');

        if( $shop_link ):
            $link_url = $shop_link['url'];
            $link_title = $shop_link['title'];
            $link_target = $shop_link['target'] ? $shop_link['target'] : '_self';
        ?>
            <div class="explore_shop_section" id="shop_example">
                <div class="content_container">
                    <div class="content">
                        <p>Want to see an example?</p>
                        <h2> Created by @ElliotBFit (580K) </h2>
                        <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" class="button">
                            <span><?php echo esc_html( $link_title ); ?></span>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/white-arrow.svg">
                        </a>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <div class="instagram_shop_section">
            <div class="left">
                <div class="image_holder">
                    <img class="image" src="<?php echo get_template_directory_uri(); ?>/images/instagram/instagram-1.jpg" alt="">
                    <img class="icon" src="<?php echo get_template_directory_uri(); ?>/images/instagram/instagram_icon.svg" alt="">
                    <img class="line" src="<?php echo get_template_directory_uri(); ?>/images/instagram/squiggly-line.svg" alt="">
                </div>
            </div>
            <div class="right">
                <h2 class="fadein-wrap textillate">You’ll be able to connect your shop with Instagram.</h2>

                <div class="swiper-container instagram-swiper fadein-wrap">
                    <div class="swiper-pagination instagram-swiper-pagination"></div>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <h3>‘View Shop’</h3>
                            <p>Take advantage of the ‘View Shop’ button to promote your shop.</p>
                            <div class="image_holder">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/instagram-2.jpg" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <h3>Easy browse</h3>
                            <p>Followers can browse your recommendations without leaving the app.</p>
                            <div class="image_holder">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/instagram-3.jpg" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <h3>Tag Products</h3>
                            <p>Make it easier for your audience to find the products you’re sharing.</p>
                            <div class="image_holder">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/instagram-4.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="columns">
                    <div class="column">
                        <h3>‘View Shop’</h3>
                        <p>Take advantage of the ‘View Shop’ button to promote your shop.</p>
                        <div class="image_holder">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/instagram-2.jpg" alt="">
                        </div>
                    </div>
                    <div class="column">
                        <h3>Easy browse</h3>
                        <p>Followers can browse your recommendations without leaving the app.</p>
                        <div class="image_holder">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/instagram-3.jpg" alt="">
                        </div>
                    </div>
                    <div class="column">
                        <h3>Tag Products</h3>
                        <p>Make it easier for your audience to find the products you’re sharing.</p>
                        <div class="image_holder">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/instagram-4.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="swiper_section fadein-wrap">
            <div class="scroll_down_holder">
                <img src="<?php echo get_template_directory_uri(); ?>/images/Gatherr_Illustrations-05.svg">
            </div>
            <h2 class="fadein-wrap textillate">Gatherr will be for all kinds of creators.</h2>
            <div class="swiper_buttons_holder">
                <div class="swiper-button-next">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/left_swiper_arrow.svg">
                </div>
                <div class="swiper-button-prev">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/right_swiper_arrow.svg">
                </div>
            </div>

            <?php $slides = get_field('creators_slide'); ?>
            <div class="swiper-container creators fadein-wrap">
                <div class="swiper-wrapper">
                    <?php foreach($slides as $slide) : ?>
                    <div class="swiper-slide">
                        <div class="headline">
                            <img src="<?php  echo $slide['icon']; ?>"  alt="<?php echo $slide['title']; ?>">
                            <p><?php echo $slide['title']; ?></p>
                        </div>
                        <img src="<?php echo $slide['image']; ?>" alt="<?php echo $slide['title']; ?>">
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <div class="timeline_section_wrap">
            <div class="timeline_section">
                <?php $timeline = get_field('timeline_line');  ?>
                <img class="illustration_icon" src="<?php echo get_template_directory_uri(); ?>/images/Gatherr_Illustrations-08.svg" alt="">

                <h2 class="fadein-wrap textillate">Timeline</h2>

                <div class="timeline_holder">
                    <div class="left">
                        <div class="timeline_spot <?php echo (int)$timeline >= 1 ? 'active' : ''; ?>">
                            <p class="fadein-wrap">
                                Creating our product
                            </p>
                        </div>
                        <div class="timeline_spot middle <?php echo (int)$timeline > 1 ? 'active' : ''; ?>">
                            <p class="fadein-wrap">
                                Inviting early users
                            </p>
                        </div>
                    </div>
                    <div class="right">
                        <div class="timeline_spot <?php echo (int)$timeline == 3 ? 'active' : ''; ?>">
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
                    <?php the_field('bottom_button_text'); ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/button_arrow_right.png">
                </a>

            </div>
        </div>

    </div>

<?php get_footer();

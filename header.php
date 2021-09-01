<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,user-scalable=0"/>
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="icon" href="<?php the_field('favicon_image','option'); ?>">

	<?php wp_head(); ?>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WB4P83F');</script>
<!-- End Google Tag Manager -->

</head>

<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WB4P83F"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->	
<?php wp_body_open(); ?>
<div id="page" class="site">
    <?php
        $shop_link = get_field('example_shop_link');
    ?>
	<header>
        <div class="group">
            <div class="logo"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt=""></div>

            <div class="button_group">
                <?php
                if( $shop_link ):
                    $link_url = $shop_link['url'];
                    $link_title = $shop_link['title'];
                    $link_target = $shop_link['target'] ? $shop_link['target'] : '_self';
                ?>
                    <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" class="button shop_btn fadein-wrap">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/shop_icon.svg">
                        <span>View Example Shop</span>
                    </a>
                <?php endif; ?>


                <a class="button popup_btn fadein-wrap">
                    <span class="desktop"><?php the_field('top_button_text'); ?></span>
                    <span class="mobile"><?php the_field('top_button_text_mobile'); ?></span>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/white-arrow.svg">
                </a>
            </div>
        </div>
<!--		<nav>-->
<!--			--><?php
//                wp_nav_menu(
//                    array(
//                        'theme_location' => 'menu-1',
//                        'menu_id'        => 'primary-menu',
//                    )
//                );
//			?>
<!--		</nav>-->
	</header>

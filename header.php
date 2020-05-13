<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

	<header>
        <div class="group">
            <div class="logo"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt=""></div>
            <a class="button fadein-wrap">
                <span class="desktop">The sounds like something I'd use</span>
                <span class="mobile">Yes, I'd use this</span>
                <img src="<?php echo get_template_directory_uri(); ?>/images/white-arrow.svg">
            </a>
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

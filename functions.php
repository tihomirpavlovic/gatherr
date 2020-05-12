<?php
/**
 * gatherr functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package gatherr
 */

if ( ! function_exists( 'gatherr_setup' ) ) :
	function gatherr_setup() {
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );

		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'gatherr' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'gatherr_setup' );

function gatherr_scripts() {
	wp_enqueue_style( 'gatherr-style', get_stylesheet_uri(), array(), '1' );

    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);

    wp_enqueue_script( 'swiper', get_template_directory_uri() . '/js/swiper-min.js', array(), '1.0', true );
    wp_enqueue_script( 'textillate', get_template_directory_uri() . '/js/textillate.js', array(), '1.0', true );
    wp_enqueue_script( 'lettering', get_template_directory_uri() . '/js/jquery.lettering-0.6.min.js', array(), '1.0', true );
    wp_enqueue_script('parallax-js', get_theme_file_uri('/js/t.parallax.js'), NULL, microtime(), true);

    wp_enqueue_script( 'global', get_template_directory_uri() . '/js/global.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'gatherr_scripts' );

require_once("inc/additional-functions-inc.php");

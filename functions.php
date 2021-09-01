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

    wp_enqueue_script( 'global', get_template_directory_uri() . '/js/global.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'gatherr_scripts' );

require_once("inc/additional-functions-inc.php");



if (function_exists('acf_add_options_page'))  {

  $themeOptions = acf_add_options_page(array(
    'page_title' => 'Theme Options'
  ));
  acf_add_options_sub_page(array(
    'page_title'  => 'Logos',
    'menu_title'  => 'Logos',
    'parent_slug'   => $themeOptions['menu_slug'],
  ));
  // acf_add_options_sub_page(array(
  //   'page_title'  => 'Footer',
  //   'menu_title'  => 'Footer',
  //   'parent_slug'   => $themeOptions['menu_slug'],
  // ));
  // acf_add_options_sub_page(array(
  //   'page_title'  => 'Homepage',
  //   'menu_title'  => 'Homepage',
  //   'parent_slug'   => $themeOptions['menu_slug'],
  // ));
  // acf_add_options_sub_page(array(
  //   'page_title'  => 'Typeform form',
  //   'menu_title'  => 'Typeform form',
  //   'parent_slug'   => $themeOptions['menu_slug'],
  // ));
}


// function cc_mime_types($mimes) {
//   $mimes['svg'] = 'image/svg+xml';
//   return $mimes;
// }
// add_filter('upload_mimes', 'cc_mime_types');


function my_theme_custom_upload_mimes( $existing_mimes ) {
  // Add webm to the list of mime types.
  $existing_mimes['svg'] = 'image/svg+xml';

  // Return the array back to the function with our added mime type.
  return $existing_mimes;
}
add_filter( 'mime_types', 'my_theme_custom_upload_mimes' );


/*
* Contact form remove added elements ( tags )
*/
add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);
     $content = str_replace(array('<br/>'), '', $content);
      $content = str_replace(array('<p>'), '', $content);
    return $content;
});


/*
* Contact form remove styles
*/
add_action( 'wp_print_styles', 'wps_deregister_styles', 100 );
function wps_deregister_styles() {
    wp_deregister_style( 'contact-form-7' );
}

/*
* Contact form 7 tag replace
*/
add_filter("wpcf7_mail_tag_replaced", "suppress_wpcf7_filter");
function suppress_wpcf7_filter($value, $sub = ""){
    $out    =   !empty($sub) ? $sub : $value;
    $out    =   strip_tags($out);
    $out    =   wptexturize($out);
    return $out;
}

add_action( 'wp_footer', 'mycustom_wp_footer' );
 
function mycustom_wp_footer() {
?>
<script type="text/javascript">
document.addEventListener( 'subscribe-button', function( event ) {
ga('send', 'event', 'Sign-Up-Form', 'Form-Submission', 'submit' );
}, false );
</script>
<?php
}
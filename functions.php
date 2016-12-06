<?php

// Include Scripts and CSS

function sellthing_theme_styles() {

	wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap-3.3.5.css' );
	wp_enqueue_style( 'font_awesome', get_template_directory_uri() . '/font-awesome-4.6.3/css/font-awesome.min.css' );
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
}

add_action( 'wp_enqueue_scripts', 'sellthing_theme_styles');

function sellthing_theme_js() {

	global $wp_scripts;

	wp_register_script( 'html5_shiv', 'https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js', '', '', 'false' );
	wp_register_script( 'respond_js', 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js', '', '', 'false' );

	$wp_scripts->add_data( 'html5_shiv', 'conditional', 'lt IE 9');
	$wp_scripts->add_data( 'respond_js', 'conditional', 'lt IE 9');
  
	wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'), '', 'true');
}

add_action( 'wp_enqueue_scripts', 'sellthing_theme_js');

// Add WP Basic Features Support

if ( ! function_exists( 'sellthing_setup' ) ) :

	function sellthing_setup() {

	// Add Support for Feed Links
	
	add_theme_support( 'automatic-feed-links' );
	
	// Add Menu Support
	
	add_theme_support ( 'menus' );
	
	// Add Thumbnails Support
	
	add_theme_support( 'post-thumbnails' );
	
	// Add Support for Flexible Title Tag
	
	add_theme_support( 'title-tag' );
	
	}
endif;

add_action( 'after_setup_theme', 'sellthing_setup' );

// Check for Front Page being used

function sellthing_filter_front_page_template( $template ) {
    return is_home() ? '' : $template;
}
add_filter( 'frontpage_template', 'sellthing_filter_front_page_template' );

// Add Support for WooCommerce

add_action( 'after_setup_theme', 'sellthing_woocommerce_support' );
function sellthing_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

// Add Support for Google Fonts

function sellthing_google_fonts() {
  $query_args = array(
    'family' => 'Cormorant+Garamond:400,400i,600,600i,700,700i|Josefin+Sans:400,400i,600,600i,700,700i|Josefin+Slab:400,400i,600,600i,700,700i|Kanit:400,400i,600,600i,700,700i|Libre+Franklin:400,400i,600,600i,700,700i|Open+Sans:400,400i,600,600i,700,700i|Prompt:400,400i,600,600i,700,700i|Proza+Libre:400,400i,600,600i,700,700i|Raleway:400,400i,600,600i,700,700i|Roboto:400,400i,500,500i,700,700i|Source+Sans+Pro:400,400i,600,600i,700,700i|Taviraj:400,400i,600,600i,700,700i|Titillium+Web:400,400i,600,600i,700,700i|Trirong:400,400i,600,600i,700,700i',
    'subset' => 'latin,latin-ext',
  );
  wp_enqueue_style( 'google_fonts', add_query_arg( $query_args, "//fonts.googleapis.com/css" ), array(), null );
}
            
add_action('wp_enqueue_scripts', 'sellthing_google_fonts');

// Content Width Requirement

function sellthing_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'sellthing_content_width', 800 );
}
add_action( 'after_setup_theme', 'sellthing_content_width', 0 );

// MENUS!

function sellthing_register_theme_menus() {

	register_nav_menus (
		array (
			'header-menu' => __( 'Header Menu', 'sell-your-thing')
	));
}

// Register Custom Navigation Walker
require_once get_template_directory() . '/inc/wp_bootstrap_navwalker.php';

// Register Menus
add_action ( 'init', 'sellthing_register_theme_menus');

// WIDGETS!

require_once get_template_directory() . '/inc/widgets.php';

// Include Social Icons Widget
require_once get_template_directory() . '/inc/social-widget.php';

// THEME CUSTOMIZER!

require_once get_template_directory() . '/inc/wp-customize-image-reloaded.php';
require_once get_template_directory() . '/inc/theme-customizer.php';

// Adjust Wordpress Excerpt

function sellthing_new_excerpt($text) {
	if ($text == '') 	{
		$text = get_the_content('');
		$text = strip_shortcodes( $text );
		$text = apply_filters('the_content', $text);
		$text = str_replace(']]>', ']]>', $text);
		$text = strip_tags($text);
		$text = nl2br($text);
		$excerpt_length = apply_filters('excerpt_length', 50);
		$words = explode(' ', $text, $excerpt_length + 1);
		if (count($words) > $excerpt_length) {
			array_pop($words);
			array_push($words, ' ... ');
			$text = implode(' ', $words);
		}
	}
	return $text;
}

remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_filter('get_the_excerpt', 'sellthing_new_excerpt');

?>
<?php
/**
 * Theme functions and definitions
 *
 * @package HelloElementorChild
 */

/**
 * Load child theme css and optional scripts
 *
 * @return void
 */
function hello_elementor_child_enqueue_scripts() {
	wp_enqueue_style(
		'hello-elementor-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		[
			'hello-elementor-theme-style',
		],
		'1.0.0'
	);
	wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css');
	wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css');
	wp_enqueue_style('slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
	wp_enqueue_style('slick-theme', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css');
	wp_enqueue_style('all-min', get_stylesheet_directory_uri() . '/assets/css/all.min.css');
	wp_enqueue_style('custom-style', get_stylesheet_directory_uri() . '/assets/css/style.css');


	// scripts 
	wp_enqueue_script('other-jquery', 'https://code.jquery.com/jquery-3.6.1.min.js');
	wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', '', '', true);
	wp_enqueue_script('waypoints', 'https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js', '', '', true);
	wp_enqueue_script('slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', '', '', true);
	wp_enqueue_script('plugin-custom',  get_stylesheet_directory_uri() . '/assets/js/plugin.js', '', '', true);
	wp_enqueue_script('ls-custom',  get_stylesheet_directory_uri() . '/assets/js/script.js', '', '', true);
}
add_action( 'wp_enqueue_scripts', 'hello_elementor_child_enqueue_scripts', 20 );

// bootstrap 5 menu supported 
require_once('includes/bootstrap-5-wordpress-navbar-walker.php');

// redux theme options 
if ( !isset( $redux_owd ) && file_exists( dirname(__FILE__) . '/includes/Redux/theme-options.php' ) ) {
	require_once( dirname(__FILE__) . '/includes/Redux/theme-options.php' );
}

// require taxonomy
require_once('includes/custom-taxonomy.php');


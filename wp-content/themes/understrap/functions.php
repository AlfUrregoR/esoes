<?php
/**
 * Understrap functions and definitions
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/jetpack.php',                         // Load Jetpack compatibility file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker.
	'/woocommerce.php',                     // Load WooCommerce functions.
	'/editor.php',                          // Load Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
);

foreach ( $understrap_includes as $file ) {
	$filepath = locate_template( 'inc' . $file );
	if ( ! $filepath ) {
		trigger_error( sprintf( 'Error locating /inc%s for inclusion', $file ), E_USER_ERROR );
	}
	require_once $filepath;
}

add_action( 'wp_enqueue_scripts', 'enqueue_load_fa' );
function enqueue_load_fa() {
wp_enqueue_style( 'load-fa', 'https://use.fontawesome.com/releases/v5.3.1/css/all.css' );
}

function load_fonts() {
     wp_register_style('googleFonts', 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300&display=swap');
     wp_enqueue_style('googleFonts');
}
add_action('wp_enqueue_scripts', 'load_fonts');

function load_fonts_new() {
     wp_register_style('googleFonts', 'https://fonts.googleapis.com/css?family=Forum&display=swap');
     wp_enqueue_style('googleFonts');
}
add_action('wp_enqueue_scripts', 'load_fonts_new');


function my_init() {
		if (!is_admin()) {
			wp_deregister_script('jquery');
			wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js', false, '2.0.3', true);
			wp_enqueue_script('jquery');
		}
	}
	add_action('init', 'my_init');

function my_masonry(){
		wp_enqueue_script('masonry');
		wp_enqueue_script('masonryloader', get_stylesheet_directory_uri() . '/js/TaS-masonryInitializer.js', array( 'masonry', 'jquery' ) );
	}
	add_action('wp_enqueue_scripts', 'my_masonry');


	function footer_masonry() {
		 echo '
	<script type="text/javascript">
	(function($){
		var container = document.querySelector(".grid");

		imagesLoaded( container, function() {
			var msnry = new Masonry( container, {
				// options
				itemSelector: ".grid-item"
			});
		});
	})(jQuery);

	</script>
	';
	}
	add_action('wp_footer', 'footer_masonry');

	function footer_onload() {
		 echo "
	<script type='text/javascript'>


	</script>
	";
	}
	add_action('wp_footer', 'footer_onload');


function custom_single_template($the_template) {
    foreach ( (array) get_the_category() as $cat ) {
        if ( locate_template("archive-{$cat->slug}.php") ) {
            return locate_template("archive-{$cat->slug}.php");
        }
    }
    return $the_template;
}
add_filter( 'single_template', 'custom_single_template');

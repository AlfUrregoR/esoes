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
			wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js', false, '2.0.3', true);
			wp_enqueue_script('jquery');
		}
	}
	add_action('init', 'my_init');

		

	add_filter('pll_get_post_types', 'mi_pll_con_custom_post_types');
	function mi_pll_con_custom_post_types($types) {
	    return array_merge($types, array('portafolio' => 'portafolio'));
	}

	register_nav_menus( array(
		'footer' => __( 'Footer Menu')
	) );

	if ( ! function_exists('__bp_collaboration') ) {

// Register Custom Post Type
function __bp_collaboration() {

	$labels = array(
		'name'                  => 'Collaborations',
		'singular_name'         => 'Collaboration',
		'menu_name'             => 'Collaboration',
		'name_admin_bar'        => 'Collaboration',
		'archives'              => 'Archivo colaboraciones',
		'attributes'            => 'Atributos de colaboraciones',
		'parent_item_colon'     => 'Colaboración padre',
		'all_items'             => 'Todas las Colaboraciones',
		'add_new_item'          => 'Añadir nueva colaboración',
		'add_new'               => 'Añadir nuevo',
		'new_item'              => 'Nuevo colaboración',
		'edit_item'             => 'Editar colaboración',
		'update_item'           => 'Actualizar colaboración',
		'view_item'             => 'Ver colaboración',
		'view_items'            => 'Ver colaboraciones',
		'search_items'          => 'Buscar colaboración',
		'not_found'             => 'No encontrado',
		'not_found_in_trash'    => 'No encontrado en la papelera',
		'featured_image'        => 'Imagen Destacada',
		'set_featured_image'    => 'Fijar Imagen Destacada',
		'remove_featured_image' => 'Borrar Imagen Destacada',
		'use_featured_image'    => 'Usar Imagen Destacada',
		'insert_into_item'      => 'Insertar en la colaboración',
		'uploaded_to_this_item' => 'Subido a esta colaboración',
		'items_list'            => 'Lista de colaboraciones',
		'items_list_navigation' => 'Navegación de la lista de colaboraciones',
		'filter_items_list'     => 'Flitrar la lista de colaboraciones',
	);
	$args = array(
		'label'                 => 'Collaboration',
		'description'           => 'Colaboraciones Description',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-admin-comments',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'collaborations', $args );

}
add_action( 'init', '__bp_collaboration', 0 );

}
add_filter('pll_get_post_types', 'mi_pll_con_custom_post_types_collaborations');
function mi_pll_con_custom_post_types_collaborations($types) {
		return array_merge($types, array('collaborations' => 'collaborations'));
}

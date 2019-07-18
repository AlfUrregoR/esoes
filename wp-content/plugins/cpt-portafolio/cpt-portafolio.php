<?php
/*
Plugin Name: CPT Portafolio
Plugin URI: 
Description: 
Version: 
Author: 
Author URI: 
License: 
License URI: 
*/

if ( ! function_exists('wpn_portafolio') ) {

// Register Custom Post Type
function wpn_portafolio() {

	$labels = array(
		'name'                  => _x( 'Portafolios', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Portafolio', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Portafolio', 'text_domain' ),
		'name_admin_bar'        => __( 'Portafolio', 'text_domain' ),
		'archives'              => __( 'Archivos de portafolios', 'text_domain' ),
		'attributes'            => __( 'Atributos de portafolios', 'text_domain' ),
		'parent_item_colon'     => __( 'Portafolio padre', 'text_domain' ),
		'all_items'             => __( 'Todos los portafolios', 'text_domain' ),
		'add_new_item'          => __( 'Añadir nuevo portafolio', 'text_domain' ),
		'add_new'               => __( 'Añadir nuevo', 'text_domain' ),
		'new_item'              => __( 'Añadir Portafolio', 'text_domain' ),
		'edit_item'             => __( 'Editar Portafolio', 'text_domain' ),
		'update_item'           => __( 'Actualizar Portafolio', 'text_domain' ),
		'view_item'             => __( 'Ver Portafolio', 'text_domain' ),
		'view_items'            => __( 'Ver Portafolios', 'text_domain' ),
		'search_items'          => __( 'Buscar Portafolios', 'text_domain' ),
		'not_found'             => __( 'No encontrado', 'text_domain' ),
		'not_found_in_trash'    => __( 'No encontrado en la papelera', 'text_domain' ),
		'featured_image'        => __( 'Imagen destacada', 'text_domain' ),
		'set_featured_image'    => __( 'Configurar imagen destacada', 'text_domain' ),
		'remove_featured_image' => __( 'Borrar imagen destacada', 'text_domain' ),
		'use_featured_image'    => __( 'Usar imagen destacada', 'text_domain' ),
		'insert_into_item'      => __( 'Insertar en el Portafolio', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Actualizar en este portafolio', 'text_domain' ),
		'items_list'            => __( 'Listado de portafolio', 'text_domain' ),
		'items_list_navigation' => __( 'Lista navegable de portafolio', 'text_domain' ),
		'filter_items_list'     => __( 'Filtro de lista de portafolios', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Portafolio', 'text_domain' ),
		'description'           => __( 'Añadir Portafolio', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-portfolio',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,		
		'capability_type'       => 'page',
	);
	register_post_type( 'portafolio', $args );

}
add_action( 'init', 'wpn_portafolio', 0 );

}
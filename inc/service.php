<?php

// Register Custom Post Type Our Service
function create_ourservice_cpt() {

	$labels = array(
		'name' => _x( 'Our Services', 'Post Type General Name', 'saybers' ),
		'singular_name' => _x( 'Our Service', 'Post Type Singular Name', 'saybers' ),
		'menu_name' => _x( 'Our Services', 'Admin Menu text', 'saybers' ),
		'name_admin_bar' => _x( 'Our Service', 'Add New on Toolbar', 'saybers' ),
		'archives' => __( 'Our Service Archives', 'saybers' ),
		'attributes' => __( 'Our Service Attributes', 'saybers' ),
		'parent_item_colon' => __( 'Parent Our Service:', 'saybers' ),
		'all_items' => __( 'All Our Services', 'saybers' ),
		'add_new_item' => __( 'Add New Our Service', 'saybers' ),
		'add_new' => __( 'Add New', 'saybers' ),
		'new_item' => __( 'New Our Service', 'saybers' ),
		'edit_item' => __( 'Edit Our Service', 'saybers' ),
		'update_item' => __( 'Update Our Service', 'saybers' ),
		'view_item' => __( 'View Our Service', 'saybers' ),
		'view_items' => __( 'View Our Services', 'saybers' ),
		'search_items' => __( 'Search Our Service', 'saybers' ),
		'not_found' => __( 'Not found', 'saybers' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'saybers' ),
		'featured_image' => __( 'Featured Image', 'saybers' ),
		'set_featured_image' => __( 'Set featured image', 'saybers' ),
		'remove_featured_image' => __( 'Remove featured image', 'saybers' ),
		'use_featured_image' => __( 'Use as featured image', 'saybers' ),
		'insert_into_item' => __( 'Insert into Our Service', 'saybers' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Our Service', 'saybers' ),
		'items_list' => __( 'Our Services list', 'saybers' ),
		'items_list_navigation' => __( 'Our Services list navigation', 'saybers' ),
		'filter_items_list' => __( 'Filter Our Services list', 'saybers' ),
	);
	$args = array(
		'label' => __( 'Our Service', 'saybers' ),
		'description' => __( '', 'saybers' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-hammer',
		'supports' => array('title', 'custom-fields'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'our_service', $args );

}
add_action( 'init', 'create_ourservice_cpt', 0 );
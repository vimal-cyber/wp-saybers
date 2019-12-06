<?php
// Register Custom Post Type testimonial
function create_testimonial_cpt() {

	$labels = array(
		'name' => _x( 'testimonials', 'Post Type General Name', 'saybers' ),
		'singular_name' => _x( 'testimonial', 'Post Type Singular Name', 'saybers' ),
		'menu_name' => _x( 'testimonials', 'Admin Menu text', 'saybers' ),
		'name_admin_bar' => _x( 'testimonial', 'Add New on Toolbar', 'saybers' ),
		'archives' => __( 'testimonial Archives', 'saybers' ),
		'attributes' => __( 'testimonial Attributes', 'saybers' ),
		'parent_item_colon' => __( 'Parent testimonial:', 'saybers' ),
		'all_items' => __( 'All testimonials', 'saybers' ),
		'add_new_item' => __( 'Add New testimonial', 'saybers' ),
		'add_new' => __( 'Add New', 'saybers' ),
		'new_item' => __( 'New testimonial', 'saybers' ),
		'edit_item' => __( 'Edit testimonial', 'saybers' ),
		'update_item' => __( 'Update testimonial', 'saybers' ),
		'view_item' => __( 'View testimonial', 'saybers' ),
		'view_items' => __( 'View testimonials', 'saybers' ),
		'search_items' => __( 'Search testimonial', 'saybers' ),
		'not_found' => __( 'Not found', 'saybers' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'saybers' ),
		'featured_image' => __( 'Featured Image', 'saybers' ),
		'set_featured_image' => __( 'Set featured image', 'saybers' ),
		'remove_featured_image' => __( 'Remove featured image', 'saybers' ),
		'use_featured_image' => __( 'Use as featured image', 'saybers' ),
		'insert_into_item' => __( 'Insert into testimonial', 'saybers' ),
		'uploaded_to_this_item' => __( 'Uploaded to this testimonial', 'saybers' ),
		'items_list' => __( 'testimonials list', 'saybers' ),
		'items_list_navigation' => __( 'testimonials list navigation', 'saybers' ),
		'filter_items_list' => __( 'Filter testimonials list', 'saybers' ),
	);
	$args = array(
		'label' => __( 'testimonial', 'saybers' ),
		'description' => __( '', 'saybers' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-admin-comments',
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
		'exclude_from_search' => true,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'testimonial', $args );

}
add_action( 'init', 'create_testimonial_cpt', 0 );
<?php
// Register Custom Post Type Our Work
// Register Custom Post Type portfolio
function create_portfolio_cpt() {

	$labels = array(
		'name' => _x( 'portfolios', 'Post Type General Name', 'saybers' ),
		'singular_name' => _x( 'portfolio', 'Post Type Singular Name', 'saybers' ),
		'menu_name' => _x( 'portfolios', 'Admin Menu text', 'saybers' ),
		'name_admin_bar' => _x( 'portfolio', 'Add New on Toolbar', 'saybers' ),
		'archives' => __( 'portfolio Archives', 'saybers' ),
		'attributes' => __( 'portfolio Attributes', 'saybers' ),
		'parent_item_colon' => __( 'Parent portfolio:', 'saybers' ),
		'all_items' => __( 'All portfolios', 'saybers' ),
		'add_new_item' => __( 'Add New portfolio', 'saybers' ),
		'add_new' => __( 'Add New', 'saybers' ),
		'new_item' => __( 'New portfolio', 'saybers' ),
		'edit_item' => __( 'Edit portfolio', 'saybers' ),
		'update_item' => __( 'Update portfolio', 'saybers' ),
		'view_item' => __( 'View portfolio', 'saybers' ),
		'view_items' => __( 'View portfolios', 'saybers' ),
		'search_items' => __( 'Search portfolio', 'saybers' ),
		'not_found' => __( 'Not found', 'saybers' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'saybers' ),
		'featured_image' => __( 'Featured Image', 'saybers' ),
		'set_featured_image' => __( 'Set featured image', 'saybers' ),
		'remove_featured_image' => __( 'Remove featured image', 'saybers' ),
		'use_featured_image' => __( 'Use as featured image', 'saybers' ),
		'insert_into_item' => __( 'Insert into portfolio', 'saybers' ),
		'uploaded_to_this_item' => __( 'Uploaded to this portfolio', 'saybers' ),
		'items_list' => __( 'portfolios list', 'saybers' ),
		'items_list_navigation' => __( 'portfolios list navigation', 'saybers' ),
		'filter_items_list' => __( 'Filter portfolios list', 'saybers' ),
	);
	$args = array(
		'label' => __( 'portfolio', 'saybers' ),
		'description' => __( '', 'saybers' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-art',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'custom-fields'),
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
	register_post_type( 'portfolio', $args );

}
add_action( 'init', 'create_portfolio_cpt', 0 );
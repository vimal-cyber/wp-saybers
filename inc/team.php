<?php
// Register Custom Post Type team member
function create_teammember_cpt() {

	$labels = array(
		'name' => _x( 'team members', 'Post Type General Name', 'saybers' ),
		'singular_name' => _x( 'team member', 'Post Type Singular Name', 'saybers' ),
		'menu_name' => _x( 'team members', 'Admin Menu text', 'saybers' ),
		'name_admin_bar' => _x( 'team member', 'Add New on Toolbar', 'saybers' ),
		'archives' => __( 'team member Archives', 'saybers' ),
		'attributes' => __( 'team member Attributes', 'saybers' ),
		'parent_item_colon' => __( 'Parent team member:', 'saybers' ),
		'all_items' => __( 'All team members', 'saybers' ),
		'add_new_item' => __( 'Add New team member', 'saybers' ),
		'add_new' => __( 'Add New', 'saybers' ),
		'new_item' => __( 'New team member', 'saybers' ),
		'edit_item' => __( 'Edit team member', 'saybers' ),
		'update_item' => __( 'Update team member', 'saybers' ),
		'view_item' => __( 'View team member', 'saybers' ),
		'view_items' => __( 'View team members', 'saybers' ),
		'search_items' => __( 'Search team member', 'saybers' ),
		'not_found' => __( 'Not found', 'saybers' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'saybers' ),
		'featured_image' => __( 'Featured Image', 'saybers' ),
		'set_featured_image' => __( 'Set featured image', 'saybers' ),
		'remove_featured_image' => __( 'Remove featured image', 'saybers' ),
		'use_featured_image' => __( 'Use as featured image', 'saybers' ),
		'insert_into_item' => __( 'Insert into team member', 'saybers' ),
		'uploaded_to_this_item' => __( 'Uploaded to this team member', 'saybers' ),
		'items_list' => __( 'team members list', 'saybers' ),
		'items_list_navigation' => __( 'team members list navigation', 'saybers' ),
		'filter_items_list' => __( 'Filter team members list', 'saybers' ),
	);
	$args = array(
		'label' => __( 'team member', 'saybers' ),
		'description' => __( '', 'saybers' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-groups',
		'supports' => array('title', 'thumbnail', 'custom-fields'),
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
	register_post_type( 'team_member', $args );

}
add_action( 'init', 'create_teammember_cpt', 0 );
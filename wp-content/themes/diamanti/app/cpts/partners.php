<?php

// Register Custom Post Types
function diamanti_partners_cpt() {

	$labels = array(
		'name'                  => _x( 'Partners', 'Post Types General Name', 'diamanti' ),
		'singular_name'         => _x( 'Partner', 'Post Types Singular Name', 'diamanti' ),
		'menu_name'             => __( 'Partners', 'diamanti' ),
		'name_admin_bar'        => __( 'Partner', 'diamanti' ),
		'archives'              => __( 'Partner Archives', 'diamanti' ),
		'attributes'            => __( 'Partner Attributes', 'diamanti' ),
		'parent_item_colon'     => __( 'Parent Item:', 'diamanti' ),
		'all_items'             => __( 'All Partners', 'diamanti' ),
		'add_new_item'          => __( 'Add New Partner', 'diamanti' ),
		'add_new'               => __( 'Add New', 'diamanti' ),
		'new_item'              => __( 'New Partner', 'diamanti' ),
		'edit_item'             => __( 'Edit Partner', 'diamanti' ),
		'update_item'           => __( 'Update Partner', 'diamanti' ),
		'view_item'             => __( 'View Partner', 'diamanti' ),
		'view_items'            => __( 'View Partners', 'diamanti' ),
		'search_items'          => __( 'Search Partner', 'diamanti' ),
		'not_found'             => __( 'Not found', 'diamanti' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'diamanti' ),
		'featured_image'        => __( 'Image or Logo', 'diamanti' ),
		'set_featured_image'    => __( 'Set partner image', 'diamanti' ),
		'remove_featured_image' => __( 'Remove partner image', 'diamanti' ),
		'use_featured_image'    => __( 'Use as partner image', 'diamanti' ),
		'insert_into_item'      => __( 'Insert into partner', 'diamanti' ),
		'uploaded_to_this_item' => __( 'Uploaded to this partner', 'diamanti' ),
		'items_list'            => __( 'Partners list', 'diamanti' ),
		'items_list_navigation' => __( 'Partners list navigation', 'diamanti' ),
		'filter_items_list'     => __( 'Filter partners list', 'diamanti' ),
	);
	$args = array(
		'label'                 => __( 'Partner', 'diamanti' ),
		'description'           => __( 'Partners', 'diamanti' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'excerpt', 'thumbnail', 'revisions', 'editor' ),
		'taxonomies'            => array( 'partner_type'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-networking',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => ['slug' => 'use-case-solutions'],
		'capability_type'      => 'post',
	);
	register_post_type( 'partner', $args );

}
add_action( 'init', 'diamanti_partners_cpt', 0 );

// Register Custom Taxonomy
function partner_type() {

	$labels = array(
		'name'                       => _x( 'Types', 'Taxonomy General Name', 'diamanti' ),
		'singular_name'              => _x( 'Type', 'Taxonomy Singular Name', 'diamanti' ),
		'menu_name'                  => __( 'Type', 'diamanti' ),
		'all_items'                  => __( 'All Types', 'diamanti' ),
		'parent_item'                => __( 'Parent Type', 'diamanti' ),
		'parent_item_colon'          => __( 'Parent Type:', 'diamanti' ),
		'new_item_name'              => __( 'New Type Name', 'diamanti' ),
		'add_new_item'               => __( 'Add New Type', 'diamanti' ),
		'edit_item'                  => __( 'Edit Type', 'diamanti' ),
		'update_item'                => __( 'Update Type', 'diamanti' ),
		'view_item'                  => __( 'View Type', 'diamanti' ),
		'separate_items_with_commas' => __( 'Separate types with commas', 'diamanti' ),
		'add_or_remove_items'        => __( 'Add or remove types', 'diamanti' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'diamanti' ),
		'popular_items'              => __( 'Hot Types', 'diamanti' ),
		'search_items'               => __( 'Search Types', 'diamanti' ),
		'not_found'                  => __( 'Not Found', 'diamanti' ),
		'no_terms'                   => __( 'No types', 'diamanti' ),
		'items_list'                 => __( 'Types list', 'diamanti' ),
		'items_list_navigation'      => __( 'Types list navigation', 'diamanti' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'partner_type', array( 'partner' ), $args );

}
add_action( 'init', 'partner_type', 0 );

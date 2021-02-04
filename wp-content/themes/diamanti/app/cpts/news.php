<?php
// Register Custom Post Type
function register_news() {

$labels = array(
'name'                  => _x( 'News', 'Post Type General Name', 'diamanti' ),
'singular_name'         => _x( 'News', 'Post Type Singular Name', 'diamanti' ),
'menu_name'             => __( 'News', 'diamanti' ),
'name_admin_bar'        => __( 'News', 'diamanti' ),
'archives'              => __( 'News Archives', 'diamanti' ),
'attributes'            => __( 'News Attributes', 'diamanti' ),
'parent_item_colon'     => __( 'Parent News:', 'diamanti' ),
'all_items'             => __( 'All News', 'diamanti' ),
'add_new_item'          => __( 'Add New News', 'diamanti' ),
'add_new'               => __( 'Add New', 'diamanti' ),
'new_item'              => __( 'New News', 'diamanti' ),
'edit_item'             => __( 'Edit News', 'diamanti' ),
'update_item'           => __( 'Update News', 'diamanti' ),
'view_item'             => __( 'View News', 'diamanti' ),
'view_items'            => __( 'View News', 'diamanti' ),
'search_items'          => __( 'Search News', 'diamanti' ),
'not_found'             => __( 'Not found', 'diamanti' ),
'not_found_in_trash'    => __( 'Not found in Trash', 'diamanti' ),
'featured_image'        => __( 'News Image', 'diamanti' ),
'set_featured_image'    => __( 'Set news image', 'diamanti' ),
'remove_featured_image' => __( 'Remove news image', 'diamanti' ),
'use_featured_image'    => __( 'Use as news image', 'diamanti' ),
'insert_into_item'      => __( 'Insert into news', 'diamanti' ),
'uploaded_to_this_item' => __( 'Uploaded to this news', 'diamanti' ),
'items_list'            => __( 'News list', 'diamanti' ),
'items_list_navigation' => __( 'News list navigation', 'diamanti' ),
'filter_items_list'     => __( 'Filter news list', 'diamanti' ),
);
$args = array(
'label'                 => __( 'News', 'diamanti' ),
'description'           => __( 'A list of News', 'diamanti' ),
'labels'                => $labels,
'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions' ),
'taxonomies'            => array( 'type', ' role', ' industry', 'post_tag' ),
'hierarchical'          => true,
'public'                => true,
'show_ui'               => true,
'show_in_menu'          => true,
'menu_position'         => 10,
'menu_icon'             => 'dashicons-welcome-widgets-menus',
'show_in_admin_bar'     => true,
'show_in_nav_menus'     => true,
'can_export'            => true,
'has_archive'           => true,
'exclude_from_search'   => false,
'publicly_queryable'    => true,
'rewrite'               => array( 'slug' => __('news', 'diamanti') ),
'capability_type'       => 'page',
);
register_post_type( 'news', $args );

}
add_action( 'init', 'register_news', 0 );

// Register Custom Taxonomy
function news_type() {

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
		'no_terms'                   => __( 'No Types', 'diamanti' ),
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
	register_taxonomy( 'news_type', array( 'news' ), $args );

}
add_action( 'init', 'news_type', 0 );

/**
 * ACF Options Page
 *
 */
function basis_news_settings_page() {
	if ( function_exists( 'acf_add_options_sub_page' ) ){
		acf_add_options_sub_page( array(
			'title'      => 'News Settings',
			'parent'     => 'edit.php?post_type=news',
			'capability' => 'manage_options'
		) );
	}
}
add_action( 'init', 'basis_news_settings_page' );
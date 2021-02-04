<?php

include('cpts/events.php');
include('cpts/news.php');
include('cpts/resources.php');
include('cpts/testimonials.php');
include('cpts/partners.php');
include('shortcodes.php');

if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(['page_title' => __("Theme Options", 'diamanti')]);
}

if ($_SERVER['HTTP_HOST'] !== 'diamanti.local' && $_SERVER['HTTP_HOST'] !== 'localhost'  && $_SERVER['HTTP_HOST'] !== 'localhost:8080') {
	add_filter('acf/settings/show_admin', '__return_false');
}

add_filter( 'gform_tabindex', '__return_false' );

/**
 * Add a new field in admin pages for the field group.
 */
function acf_add_field_group_title( $field_group ) {
	acf_render_field_wrap(array(
		'label' => __('Metabox Title', 'acf'),
		'instructions' => __('If specified will be displayed instead of field group title.', 'acf'),
		'type' => 'text',
		'name' => 'metabox_title',
		'prefix' => 'acf_field_group',
		'value' => (isset($field_group['metabox_title'])) ? $field_group['metabox_title'] : NULL,
	));
}
add_action( 'acf/render_field_group_settings', 'acf_add_field_group_title' );

/**
 * Replace metabox title with field group title if defined.
 */
function acf_apply_metabox_title($field_groups) {
	foreach ( $field_groups as $k => $field_group ) {
		if ( isset($field_group['metabox_title']) && !empty($field_group['metabox_title']) ) {
			$field_groups[$k]['title'] = $field_group['metabox_title'];
		}
	}

	return $field_groups;
}
add_filter('acf/get_field_groups', 'acf_apply_metabox_title');

/**
 * Allow editors to manage forms
 */
function add_gf_cap()
{
    $role = get_role( 'editor' );
    $role->add_cap( 'gform_full_access' );
}

add_action( 'admin_init', 'add_gf_cap' );

add_filter('acf/load_field/name=background_color', 'select_background_color_options');
function select_background_color_options($field) {
	$field['choices'] = [
		'none' => 'None',
		'diamanti' => 'Diamanti',
		'orange' => 'Orange',
		'green' => 'Green',
		'dark-blue' => 'Dark Blue',
		'white' => 'White',
		'dark' => 'Dark',
		'light' => 'Light',
	];

	return $field;

}

add_post_type_support( 'page', 'excerpt' );

if(class_exists('GFForms')) add_filter('acf/load_field/name=choose_a_form', 'select_form_options');
if(class_exists('GFForms')) add_filter('acf/load_field/name=select_a_form', 'select_form_options');
if(class_exists('GFForms')) add_filter('acf/load_field/name=newsletter_form', 'select_form_options');

function select_form_options($field) {
	$forms = RGFormsModel::get_forms( null, 'title' );

	$output = [];
	foreach ($forms as $form) {
		$output[$form->id] = $form->title;
	}

	$field['choices'] = $output;

	return $field;
}

add_filter( 'get_the_archive_title', function ($title) {
	$title = '';

	if ( is_category() ) {
		$title = single_cat_title( '', false );
	} elseif ( is_tag() ) {
		$title = single_tag_title( '', false );
	} elseif ( is_tax() ) {
		$title = single_term_title( '', false );
	} elseif ( is_author() ) {
		$title = '<span class="vcard">' . get_the_author() . '</span>' ;
	} elseif ( is_search() ) {
		$title = 'Search';
	} elseif ( is_404() ) {
		$title = '';
	}
	return $title;
});

/**
 * Style Gravity forms with Bootstrap CSS
 */
add_filter( 'gform_field_container', 'add_bootstrap_container_class', 10, 6 );
function add_bootstrap_container_class( $field_container, $field, $form, $css_class, $style, $field_content ) {
	$id = $field->id;
	$field_id = is_admin() || empty( $form ) ? "field_{$id}" : 'field_' . $form['id'] . "_$id";
	return '<li id="' . $field_id . '" class="' . $css_class . ' form-group">{FIELD_CONTENT}</li>';
}

/**
 * Enable option to hide form input label
 */
add_filter( 'gform_enable_field_label_visibility_settings', '__return_true' );

/**
 * Helper Functions
 */

/**
 *
 * Get either the url, or an array of image data
 *
 * @param mixed $img attachment id or object
 * @param string $size
 *
 * @return mixed
 */
function get_image($img, $size='full')
{
	if (!$img) return;

	if ( is_int($img)) {
		return wp_get_attachment_image_src($img, $size)[0];
	}

	return [
		'url' => $size === 'full' ? $img['url'] : $img['sizes'][$size],
		'alt' => $img['alt'] ?? '',
		'caption' => $img['caption'] ?? '',
	];
}

/**
 *
 * Format section titles for consistent output
 *
 * @param $title
 * @param $classes
 *
 * @return string
 */
function show_block_title($title, $classes)
{
	return $title ? "<div data-aos=\"fade-left\" class='block-title $classes'>$title</div>" : '';
}

/**
 *
 * Format section titles for consistent output
 *
 * @param $title
 * @param $classes
 *
 * @return string
 */
function show_block_heading($title, $classes)
{
	return $title ? "<h2 data-aos=\"fade-right\" class='section-heading $classes'>$title</h2>" : '';
}

/**
 *
 * format the color for use as a css class
 *
 * @param null $color
 *
 * @return string
 */
function get_color($color = null) {
	return $color ? 'bg-' . $color : 'bg-None';
}

/**
 *
 * Format the WordPress Gallery and add Bootstrap Grid support
 *
 */
function diamanti_gallery( $output = '', $atts, $instance )
{
	if (empty($atts)) return $output;

	$columns = $atts['columns'];

	if (strlen($atts['columns']) < 1 || !isset($atts['columns']) || $columns > 12 ) {
		$columns = 3;
	}

	$col_class = 'col-sm-' . floor(12/$columns); // floor(): not a great way to handle 5 columns, but good enough for now

	$return = '<div class="row gallery">';

	$image_ids = explode(',', $atts['ids']);
	foreach ($image_ids as $key => $image_id) {
		$image_url = get_image((int)$image_id, $atts['size']);
		$caption = get_post((int)$image_id);
		$return .= '
            <div class="'.$col_class.'">
                <div class="gallery-image-wrap">
                    <a data-featherlight="' . $image_url . '" data-gallery="gallery" href="#">
                        <img src="' . $image_url . '" alt="" class="img-fluid">
                        <p class="wp-caption caption">'. $caption->post_excerpt . '</p>
                    </a>
                </div>
            </div>';
	}
	$return .= '</div>';
	return $return;
}
add_filter( 'post_gallery', 'diamanti_gallery', 99, 3);

function modify_news_archive( $query ) {
	if(!is_admin() && $query->is_main_query() && is_post_type_archive('news' )){

		$query->set('posts_per_page', 36);
	}
}
add_action( 'pre_get_posts', 'modify_news_archive' );

function exclude_press_releases( $query ) {
	if( !is_admin() && is_home() ){
		$query->set('cat', -146);
	}
}
add_action( 'pre_get_posts', 'exclude_press_releases' );

// Callback function to insert 'styleselect' into the $buttons array
function my_mce_buttons_2( $buttons ) {
	$buttons[] = 'styleselect';
//wp_die(var_dump($buttons));
	return $buttons;
}
// Register our callback to the appropriate filter
add_filter( 'mce_buttons_2', 'my_mce_buttons_2' );

// Callback function to filter the MCE settings
function my_mce_before_init_insert_formats( $init_array ) {
	// Define the style_formats array
	$style_formats = array(
		// Each array child is a format with it's own settings
		array(
			'title' => 'Small',
			'block' => 'span',
			'classes' => 'small',
			'wrapper' => true,
		),

	);
	// Insert the array, JSON ENCODED, into 'style_formats'
	$init_array['style_formats'] = json_encode( $style_formats );

	return $init_array;

}
// Attach callback to 'tiny_mce_before_init'
add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' );

add_filter( 'body_class', function( $classes ) {
    $class = get_field('lock_header_background') ? 'lock-bg' : '';
    return array_merge( $classes, array( $class ) );
} );

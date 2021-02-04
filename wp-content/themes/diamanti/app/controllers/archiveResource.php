<?php

namespace App;

use Sober\Controller\Controller;
use WP_Query;

class archiveResource extends Controller
{
    use PrimaryNav, PageHeader, SearchPreview;

    private $page_id = '';

    public function __construct()
    {
        $this->page_id = get_option( 'page_for_posts' );
    }

    public function pageHeader()
    {
	    $page_header = [
		    'title' => get_field('resource_title', 'options'),
		    'subtitle' => get_field('resource_subtitle', 'options'),
		    'description' => get_field('resource_description', 'options'),
		    'gradient_overlay' => get_field('resource_gradient_overlay', 'options') ?? '',
		    'background_image' => get_field('resource_background_image', 'options'),
		    'background_color' => get_field('resource_background_color', 'options'),
		    'text_color' => get_field('resource_text_color', 'options'),
	    ];

        return $this->page_header_output($page_header);
    }

    public function resourceStickyQuery()
    {

	    return new WP_Query([
			'post_type' => ['resource'],
			'meta_key' => 'featured_post',
			'meta_value' => true,
			'posts_per_page' => 1,
		]);
    }

    public function resourceMainQuery()
    {
	    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

    	return new WP_Query([
    		'post_type' => ['resource'],
	        'paged'         => $paged,
	    ]);
    }
}

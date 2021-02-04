<?php

namespace App;

use Sober\Controller\Controller;
use WP_Query;

class archiveEvent extends Controller
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
	    'title' => get_field('event_title', 'options'),
	    'subtitle' => get_field('event_subtitle', 'options'),
	    'description' => get_field('event_description', 'options'),
	    'gradient_overlay' => get_field('event_gradient_overlay', 'options') ?? '',
	    'background_image' => get_field('event_background_image', 'options'),
	    'background_color' => get_field('event_background_color', 'options'),
	    'text_color' => get_field('event_text_color', 'options'),
    ];

        return $this->page_header_output($page_header);
    }

	public static function eventDate($post_id = null) {
    	$post_id = $post_id ?? get_the_ID();

		$start_date = get_field('start_date', $post_id) ?  new \DateTime(get_field('start_date', $post_id, false)): false;
		$end_date = get_field('end_date', $post_id) ? new \DateTime(get_field('end_date', $post_id, false)) : false;

		$hide_time = get_field('hide_startend_time', $post_id);

		if (!$start_date) return false;

		if ($end_date && $start_date->diff($end_date)->days > 0) {
			if ($hide_time) {
				if ($start_date->format('F') !== $end_date->format('F')) {
					return $start_date->format('F j, Y') . ' - ' . $end_date->format('F j, Y');
				}

				return $start_date->format('F j') . ' - ' . $end_date->format('j, Y');
			}
			return $start_date->format('F j, Y g:ia') . ' to<br>' . $end_date->format('F j, Y g:ia');
		}

		$event_time = '';
		if($hide_time)  $event_time = $end_date ? ' - ' . $start_date->format('g:ia') . ' - ' . $end_date->format('g:ia') : ' - ' . $start_date->format('g:ia');

		return $end_date ? $start_date->format('F j, Y') . $event_time : $start_date->format('F j, Y') . $event_time;
	}

    public function eventStickyQuery()
    {
	    $today = current_time( 'mysql' );

	    return new WP_Query([
			'post_type' => ['event'],
			'meta_key' => 'featured_post',
			'meta_value' => true,
			'posts_per_page' => 1,
			'orderby' => 'meta_value',
			'meta_type' => 'DATETIME',
			'order' => 'ASC',
			'meta_query' => array(
				array(
					'key'     => 'start_date',
					'value'   => $today,
					'compare' => '>=',
				),
			),
		]);
    }

    private function getStickyEventID($query) {
    	return isset($query->posts[0]) ? [$query->posts[0]->ID] : [];
    }

    public function eventMainQuery()
    {
    	return new WP_Query([
    		'post_type' => ['event'],
		    'post__not_in' => $this->getStickyEventID( $this->eventStickyQuery() ),
		    'meta_key'     => 'end_date',
		    'meta_value'   => date( 'Y-m-d H:i:s', time()  ), // change to how "event date" is stored
		    'meta_compare' => '>',
		    'orderby' => 'meta_value',
		    'order' => 'ASC',
		    'meta_type' => 'DATETIME',
		    'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
	    ]);
    }

    public function getEventTypes() {
        return get_terms([
            'taxonomy' => 'event_type',
            'hide_empty' => false,
        ]);
    }

    public function getEventQueryArgs($upcoming = '>=') {
        $currentDate = date('Y-m-d H:i:s');

        return array(
            'posts_per_page' => -1,
            'post_type' => 'event',
            'orderby' => 'meta_value',
            'meta_query' => array(
                array(
                    'key' => 'start_date',
                    'value' => $currentDate,
                    'type' => 'DATETIME',
                    'compare' => $upcoming
                ),
            ),
            'order' => 'ASC'
        );
    }

    public function getUpcomingEvents() {
        return new WP_Query($this->getEventQueryArgs());
    }

    public function getOnDemandWebinars() {
        return new WP_Query(array_merge(
            $this->getEventQueryArgs('<'),
            array(
                'tax_query' => array(
                    array(
                        'taxonomy' => 'event_type',
                        'field' => 'slug',
                        'terms' => 'webinars'
                    )
                ),
                'order' => 'DESC'
            )
        ));
    }
}

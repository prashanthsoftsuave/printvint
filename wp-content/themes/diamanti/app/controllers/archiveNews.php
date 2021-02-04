<?php

namespace App;

use Sober\Controller\Controller;

class archiveNews extends Controller
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
			'title' => get_field('news_title', 'options'),
			'subtitle' => get_field('news_subtitle', 'options'),
			'description' => get_field('news_description', 'options'),
			'gradient_overlay' => get_field('news_gradient_overlay', 'options') ?? '',
			'background_image' => get_field('news_background_image', 'options'),
			'background_color' => get_field('news_background_color', 'options'),
			'text_color' => get_field('news_text_color', 'options'),
		];

		return $this->page_header_output($page_header);
	}

}

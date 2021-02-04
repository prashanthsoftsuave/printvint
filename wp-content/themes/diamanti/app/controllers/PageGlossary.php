<?php

namespace App;

use Sober\Controller\Controller;
use WP_Query;

class PageGlossary extends Controller {

	use PrimaryNav, PageHeader, SearchPreview;

	public function pageHeader()
	{
		$page_header = [
			'title' => get_field('title'),
			'subtitle' => get_field('subtitle'),
			'description' => get_field('description'),
			'background_image' => get_field('background_image'),
			'background_color' => get_field('background_color'),
			'text_color' => get_field('text_color'),
		];

		return $this->page_header_output($page_header);
	}

	private function getGlossaryCategories()
	{
		return get_terms([
			'taxonomy' => 'glossary_categories',
			'hide_empty' => true,
			'fields' => 'id=>name',
		]);
	}

	public function glossaryQuery()
	{
		return array_map(function($a){
			return get_posts(
				array(
					'posts_per_page' => -1,
					'post_type' => 'glossary_terms',
					'tax_query' => array(
						array(
							'taxonomy' => 'glossary_categories',
							'field' => 'term_id',
							'terms' => $a,
						),
					'fields' => 'ids',
					)
				)
			);
		}, array_flip($this->getGlossaryCategories()) );
	}
}

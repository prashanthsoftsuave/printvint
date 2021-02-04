<?php

namespace App;

use Sober\Controller\Controller;
use Sober\Controller\Module\Tree;

class TemplateStory extends Controller implements Tree
{
	use Section;

	public function topSectionOutput()
	{
		$top_section = get_field('top_section');

		return $this->section_output($top_section);

	}

	public function storyElementOutput()
	{
		$elements = get_field('story_elements');

		if( !is_array($elements)) return;

		return array_map(function ($a) {
			return [
				'type' => 'product_element',
				'name' => $a['element_name'] ?? '',
				'heading' => $a['heading'] ?? '',
				'subheading' => $a['subheading'] ?? '',
				'sections' => array_map(function($a) { return $this->section_output($a); }, $a['sections']),
			];
		}, $elements );
	}

}

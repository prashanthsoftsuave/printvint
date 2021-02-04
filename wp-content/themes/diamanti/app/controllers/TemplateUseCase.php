<?php

namespace App;

use Sober\Controller\Controller;
use Sober\Controller\Module\Tree;


class TemplateUseCase extends Controller implements Tree
{

	public function use_case()
	{
		$a = get_fields()['use_case'];

		return [
			'type' => 'use_case',
			'heading' => show_block_heading($a['section_heading'], $a['text_color'] . ' text-' . $a['heading_alignment']),
			'title' => show_block_title($a['section_title'], $a['text_color'] . ' text-' . $a['heading_alignment']),
			'bg-color' => get_color($a['background_color']['value']),
			'color' => isset($a['text_color']) ? $a['text_color'] : null,
			'class' => isset($a['add_classes']) ? $a['add_classes'] : null,
			'bg-image' => get_image($a['background_image']),
			'bg-video' => $a['background_video'],
			'main' => $a['main_column'],
			'sidebar' => $a['sidebar_column'],
		];
	}

}

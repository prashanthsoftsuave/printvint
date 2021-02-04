<?php

namespace App;

trait SidebarCTA
{
	private function showButtonLink($post_id, $text = 'Learn More') {
		return '<a class="btn btn-primary w-100" href="'.get_permalink($post_id).'">' . $text . '</a>';
	}


	private function sidebar_CTA_output($a = null) {

	    if (!is_array($a)) return;

	    $post_id = isset($a['link']) && $a['link'] ? $a['link']->ID : '';

		return [
			'type' => 'sidebarCTA',
			'post_id' => $post_id,
			'title' => $a['title'],
			'image' => has_post_thumbnail() ? get_the_post_thumbnail($post_id, 'medium', ['class' => 'img-fluid']) : null,
			'description' => $a['description'],
			'button' => $this->showButtonLink($post_id, $a['button_text'] ?? ''),
		];
	}
}


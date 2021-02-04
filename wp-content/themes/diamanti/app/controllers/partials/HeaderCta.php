<?php

namespace App;

trait HeaderCta
{
    public function headerCta()
    {
        $text = get_field('header_cta_text', 'options');
        $link = get_field('header_cta_link', 'options');

        if (!$text) {
            add_filter('body_class', function ($classes) {
                return array_merge($classes, array('no-header-cta'));
            });
        }

        return [
            'text' => $text,
            'link' => $link,
        ];
    }
}
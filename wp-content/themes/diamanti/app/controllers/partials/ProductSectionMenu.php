<?php

namespace App;

trait ProductSectionMenu
{
    public function productSectionMenu()
    {
        $content = get_field('section_menu');

        return $content;
    }
}

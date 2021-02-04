<?php

namespace App;

trait NewHero
{
    public function newHero()
    {
        $content = get_field('new_hero');
        return $content;
    }
}

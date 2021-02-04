<?php

namespace App;

trait New2CardsBlock
{
    private function new_2_cards_block_output($a = null)
    {
        $content = [
            'type' => 'new2CardsBlock',
        ];

        return array_merge($content, $a);
    }
}

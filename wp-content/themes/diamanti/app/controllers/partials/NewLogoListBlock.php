<?php

namespace App;

trait NewLogoListBlock
{
    private function new_logo_list_block_output($a = null)
    {
        $content = [
            'type' => 'newLogoListBlock'
        ];

        return array_merge($content, $a);
    }
}

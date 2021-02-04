<?php

namespace App;

trait NewTechnologyBlock
{
    private function new_technology_block_output($a = null)
    {
        $content = [
            'type' => 'newTechnologyBlock',
        ];

        return array_merge($content, $a);
    }
}

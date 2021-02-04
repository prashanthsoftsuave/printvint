<?php

namespace App;

trait NewTabsBlock
{
    private function new_tabs_block_output($a = null)
    {
        $content = [
            'type' => 'newTabsBlock',
        ];

        return array_merge($content, $a);
    }
}

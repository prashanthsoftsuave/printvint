<?php

namespace App;

trait NewQuoteBlock
{
    private function new_quote_block_output($a = null)
    {
        $content = [
            'type' => 'newQuoteBlock',
        ];

        return array_merge($content, $a);
    }
}

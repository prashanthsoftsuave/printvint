<?php

namespace App;

trait NewCtaBlock
{
    private function new_cta_block_output($a = null)
    {
        $content = [
            'type' => 'newCtaBlock'
        ];

        return array_merge($content, $a);
    }

    private function new_cta_output($a = null)
    {
        return $this->new_cta_block_output($a);
    }
}

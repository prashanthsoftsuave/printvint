<?php

namespace App;

trait Benefits
{
    private function benefits_section_output($a = null)
    {
        $content = [
            'view_type' => 'benefits',
        ];

        return array_merge($content, $a);
    }
}

<?php

namespace App;

trait ProductUseCase
{
    private function product_use_case_output($a = null)
    {
        $content = [
            'view_type' => 'newUseCase',
        ];

        return array_merge($content, $a);
    }
}

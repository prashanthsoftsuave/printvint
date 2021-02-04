<?php

namespace App;

trait ProductResources
{
    private function product_resources_output($a = null)
    {
        $content = [
            'view_type' => 'productResources',
        ];

        return array_merge($content, $a);
    }
}

<?php

namespace App;

trait ProductOverview
{
    private function product_overview_output($a = null)
    {
        $content = [
            'view_type' => 'newProductFeature',
        ];

        return array_merge($content, $a);
    }
}

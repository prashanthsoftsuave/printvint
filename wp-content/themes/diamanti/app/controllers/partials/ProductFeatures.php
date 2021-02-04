<?php

namespace App;

trait ProductFeatures
{
    private function product_features_output($a = null)
    {
        $content = [
            'view_type' => 'newFeatureList',
        ];

        return array_merge($content, $a);
    }
}

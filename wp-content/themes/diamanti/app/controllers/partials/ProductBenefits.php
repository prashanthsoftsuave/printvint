<?php

namespace App;

trait ProductBenefits
{
    private function product_benefits_output($a = null)
    {
        $content = [
            'view_type' => 'productBenefits',
        ];

        return array_merge($content, $a);
    }
}

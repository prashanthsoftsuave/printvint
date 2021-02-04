<?php

namespace App;

trait ProductsInformation
{
    private function products_information_output($a = null)
    {
        $content = [
            'view_type' => 'productsInformation',
        ];

        return array_merge($content, $a);
    }
}

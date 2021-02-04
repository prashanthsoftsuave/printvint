<?php

namespace App;

use Sober\Controller\Controller;
use Sober\Controller\Module\Tree;


class TemplateProductSingle extends Controller implements Tree
{

    use NewHero, NewCtaBlock, ProductSectionMenu,
        ProductOverview, ProductFeatures, ProductBenefits, ProductUseCase, ProductResources;
    /**
     * @return array of Content Blocks
     */

     public function currentTemplate() {
        return 'product-single';
    }

    public function content_blocks()
    {
        $content_blocks = get_field('content_blocks');

        if (!isset($content_blocks) || !is_array($content_blocks['cb'])) return;

        return array_map(function ($a) {
            $layout = $a['acf_fc_layout'] . '_output';
            return $this->$layout($a);
        }, $content_blocks['cb']);


    }

}

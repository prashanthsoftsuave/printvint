<?php

namespace App;

trait PrimaryNav
{
    public function primaryNav()
    {
        $menuLocations = get_nav_menu_locations();
        $menu = wp_get_nav_menu_object($menuLocations['primary_navigation']);
        $primaryMenuItems = wp_get_nav_menu_items($menu);

        foreach ($primaryMenuItems as $k => $i) {

            $primaryMenuItems[$i->ID] = $i;
            $primaryMenuItems[$i->ID]->menu_item_children = array();
            unset($primaryMenuItems[$k]);
        }
        
        foreach ($primaryMenuItems as $k => $menuItem) {
            $menuItem->menu_thumbnail = get_field('menu_thumbnail', $menuItem->ID);
            $menuItem->menu_thumbnail_active = get_field('menu_thumbnail_active', $menuItem->ID);
            $menuItem->primary_link = get_field('primary_link', $menuItem->ID);

            if ($menuItem->menu_item_parent) {
                $productPageId = get_field('product_page', $menuItem->ID);
                if ($productPageId) {
                    $menuItem->product_page_id = $productPageId;
                    $menuItem->product_resources = get_fields($productPageId);
                    $primaryMenuItems[$menuItem->menu_item_parent]->has_product_children = true;
                }

                array_push($primaryMenuItems[$menuItem->menu_item_parent]->menu_item_children, $menuItem);
            }

        }

        return $primaryMenuItems;
    }
}
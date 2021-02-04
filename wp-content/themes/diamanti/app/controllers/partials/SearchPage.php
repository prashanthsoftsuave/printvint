<?php

namespace App;

trait SearchPage {
    public function getTotalPosts() {
        global $wp_query;
        return $wp_query->found_posts;
    }

    public function getLastPage() {
        global $wp_query;
        return $wp_query->max_num_pages;
    }
}



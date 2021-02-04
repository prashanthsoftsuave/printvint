<?php

namespace App;

use WP_Query;

trait SearchPreview {
    private $searchPostTypes = array(
        ['type' => 'post', 'label' => 'Blog'],
        ['type' => 'news', 'label' => 'News'],
        ['type' => 'event', 'label' => 'Events'],
        ['type' => 'resource', 'label' => 'Resources'],
        ['type' => 'partner', 'label' => 'Partners'],
        ['type' => 'job', 'label' => 'Careers'],
        ['type' => 'page', 'label' => 'Pages']
    );

    public function getSearchFilter() {
        return $this->searchPostTypes;
    }

    public function getSearchTypes() {
        return array_map(function($postType) { return $postType['type']; }, $this->searchPostTypes);
    }

    public function getSearchResult($query_params = []) {

        $query = new WP_Query(
            array_merge(array(
                'posts_per_page' => 10,
                'post_type' => get_query_var('filter', $this->getSearchTypes()),
                's' => get_search_query(),
                'paged' => get_query_var('paged', 1),
                'post_status' => 'publish'
            ), $query_params)
        );

        return $query;
    }
}

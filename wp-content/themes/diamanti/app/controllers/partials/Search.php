<?php

namespace App;

use WP_Query;

trait Search {
    private $searchPostTypes = array(
        ['type' => 'post', 'label' => 'Blog'],
        ['type' => 'page', 'label' => 'Pages'],
        ['type' => 'resource', 'label' => 'Resources'],
        ['type' => 'event', 'label' => 'Events'],
        ['type' => 'partner', 'label' => 'Partners'],
        ['type' => 'news', 'label' => 'News'],
        ['type' => 'job', 'label' => 'Careers']
    );

    private $totalPages = 0;

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

        $this->totalPages = $query->max_num_pages;

        return $query;
    }

    public function getSearchPagePagination() {
        $paginationData = [];

        if ($this->totalPages <= 1) return;

        $paged = get_query_var('paged', 1);
        if ($paged === 0) $paged++;

        $next_page = intval($paged + 1);
        $prev_page = intval($paged - 1);
        $lastPage = intval($this->totalPages);

        $nextPageUrl = get_home_url('/') . '/?paged=' . $next_page . '&s=' . get_search_query();
        $prevPageUrl = get_home_url('/') . '/?paged=' . $prev_page . '&s=' . get_search_query();

        if (get_query_var('filter')) {
            $setFilter = '&filter=' . get_query_var('filter');
            $nextPageUrl .= $setFilter;
            $prevPageUrl .= $setFilter;
        }

        $paginationData['prev_page'] = $prev_page;
        $paginationData['prev_page_url'] = $prevPageUrl;
        $paginationData['paged'] = $paged;
        $paginationData['next_page'] = $next_page;
        $paginationData['last_page'] = $lastPage;
        $paginationData['next_page_url'] = $nextPageUrl;

        return $paginationData;
    }
}

@php($currentPage = get_query_var('paged'))
@if($get_last_page > 1)
    <div class="search-page-pagination">
        @if($currentPage > 1)
            <a class="search-page-pagination__arrow search-page-pagination__arrow--prev" href="{{ get_previous_posts_page_link() }}"></a>
        @endif
        <p class="search-page-pagination__content">
            <span class="current">{{ $currentPage ? $currentPage : '1' }}</span> of {{ $get_last_page }}
        </p>
        @if($currentPage < $get_last_page)
            <a class="search-page-pagination__arrow search-page-pagination__arrow--next" href="{{ get_next_posts_page_link() }}"></a>
        @endif
    </div>
@endif

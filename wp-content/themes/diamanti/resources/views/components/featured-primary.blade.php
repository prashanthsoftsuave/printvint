<a href="{!! get_permalink($primary['ID']) !!}">
    <div class="primary col d-flex p-0 mb-3 mb-md-0"
         style="background: url('{!! get_the_post_thumbnail_url($primary['ID'], 'large') !!}') center center;background-size: cover;min-height: 400px">
        @if (!$featured['hide_title'])
        <div class="featured-meta">
            <div class="category">{{ get_the_category($primary['ID'])[0]->name }}</div>
            <div class="title">{{ $primary['title'] }}</div>
        </div>
        @endif
    </div>
</a>

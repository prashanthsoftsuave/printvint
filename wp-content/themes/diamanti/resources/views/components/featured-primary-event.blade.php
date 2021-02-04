<a href="{!! get_field('event_link', $primary['ID'])['url']  !!}">
    <div class="primary col d-flex p-0 mb-3 mb-md-0"
         style="background: url('{!! get_the_post_thumbnail_url($primary['ID'], 'large') !!}') center center;background-size: cover;min-height: 400px">
        <div class="featured-meta">
            <div class="category">{{ get_post_type($primary['ID']) }}</div>
            <div class="title">{{ $primary['title'] }}</div>
            <p class="post-date">{!! archiveEvent::eventDate($primary['ID']) !!}</p>        </div>
    </div>
</a>
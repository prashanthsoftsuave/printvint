<a class="secondary col d-flex @if($featured['reverse']) flex-row-reverse @endif"
   href="{!! get_field('event_link', $secondary['ID'])['url']  !!}">
    <img src="{!! get_the_post_thumbnail_url($secondary['ID'], 'thumbnail') !!}">
    <div class="featured-meta @if($featured['reverse']) text-right @endif">
        <div class="category">{{ get_post_type($secondary['ID']) }}</div>
        <div class="title">{{ $secondary['title'] }}</div>
        <p class="post-date">{!! archiveEvent::eventDate($secondary['ID']) !!}</p>
    </div>
</a>
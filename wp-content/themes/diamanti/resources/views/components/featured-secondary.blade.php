<a class="secondary col d-flex @if($featured['reverse']) flex-row-reverse @endif"
   href="{!! the_permalink($secondary['ID'], 'thumbnail') !!}">
    <img src="{!! get_the_post_thumbnail_url($secondary['ID'], 'thumbnail') !!}">
    <div class="featured-meta @if($featured['reverse']) text-right @endif">
        <div class="category">{{ get_the_category($secondary['ID'])[0]->name }}</div>
        <div class="title">{{ $secondary['title'] }}</div>
    </div>
</a>
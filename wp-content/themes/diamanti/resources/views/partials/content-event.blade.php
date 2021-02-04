<article @php(post_class())>
    <div class="card">
        @if(has_post_thumbnail())
            @if ( isset(get_field('event_link')['url']) )
                <a class="card-img-link" href="{!! get_field('event_link')['url'] !!}">
            @endif
                {!! the_post_thumbnail('medium', ['class' => 'img-fluid']) !!}
            @if ( isset(get_field('event_link')['url']) )
                </a>
            @endif
        @endif
        <div class="card-body">
            <h4 class="post-card-title">
                {{ the_title() }}
            </h4>

            <p class="post-date">{!! archiveEvent::eventDate() !!}</p>

            <div class="card-text">
                @php( the_content() )
            </div>
        </div>
        <div class="card-footer">
            @if ( isset(get_field('event_link')['url']))
                <a href="{!! get_field('event_link')['url'] !!}" class="card-link link-arrow">Learn More</a>
            @endif
        </div>
    </div>
</article>

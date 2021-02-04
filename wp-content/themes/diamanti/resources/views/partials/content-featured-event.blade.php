<div class="col article sticky">
    <div class="row">
        <div class="col-md-6">
            @if ( isset(get_field('event_link')['url']))
                <a href="{{ get_field('event_link')['url'] }}">
            @endif

                {{ the_post_thumbnail('large', ['class' => 'img-fluid']) }}

            @if ( isset(get_field('event_link')['url']))
                </a>
            @endif
        </div>
        <div class="col-md-6">
            @if ( isset(get_field('event_link')['url']))
                <a href="{{ get_field('event_link')['url'] }}">
            @endif

                <h3 class="post-card-title">{{ the_title() }}</h3>

            @if ( isset(get_field('event_link')['url']))
                </a>
            @endif
                <div class="post-date">{!! archiveEvent::eventDate() !!}</div>

                {{ the_excerpt() }}

                @if ( isset(get_field('event_link')['url']))
                    <a class="btn btn-action" href="{{ get_field('event_link')['url'] }}">Learn More</a>
                @endif
            </div>
        </div>
    </div>
</div>

<article @php(post_class())>
    <div class="card">
        @if(has_post_thumbnail())
            @if ( isset(get_field('news_link')['url']) )
                <a class="card-img-link" href="{!! get_field('news_link')['url'] !!}">
            @endif
                {!! the_post_thumbnail('medium', ['class' => 'img-fluid']) !!}
            @if ( isset(get_field('news_link')['url']) )
                </a>
            @endif
        @endif
        <div class="card-body">
            <div class="post-date">{{ apply_filters( 'the_date', get_the_date(), get_option( 'date_format' ), '', '' ) }}</div>
            @if ( isset(get_field('news_link')['url']) )
                <a href="{!! get_field('news_link')['url'] !!}">
            @endif
            <h4 class="post-card-title">
                {{ the_title() }}
            </h4>
            @if ( isset(get_field('news_link')['url']) )
                </a>
            @endif

            <p>{!! archiveEvent::eventDate() !!}</p>

            <div class="card-text">{{ the_excerpt() }}</div>
        </div>
        <div class="card-footer">
            @if ( isset(get_field('news_link')['url']))
                <a href="{!! get_field('news_link')['url'] !!}" class="card-link link-arrow">Learn More</a>
            @endif
        </div>
    </div>
</article>

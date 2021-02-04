<article @php(post_class())>
    <div class="card">
        @if(has_post_thumbnail())
            <a href="{{ the_permalink() }}">
                {!! the_post_thumbnail('large', ['class' => 'img-fluid']) !!}
            </a>
        @endif
        <div class="card-body">
            <div class="post-date">
                {{ apply_filters( 'the_date', get_the_date(), get_option( 'date_format' ), '', '' ) }}
            </div>
            <a href="{{ the_permalink() }}">
                <h4 class="post-card-title">
                    {{ the_title() }}
                </h4>
            </a>
            <div class="card-text">{{ the_excerpt() }}</div>
        </div>
        <div class="card-footer">
            <a href="{{ the_permalink() }}" class="card-link link-arrow">Read More</a>
        </div>
    </div>
</article>

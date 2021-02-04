<div class="article result-card">
    <article @php(post_class())>
        <div class="card">
            <div class="card-body">
                <div class="card-type card-type--{{ get_post_type() }}">
                    {{ get_post_type() }}
                </div>
                <a href="{{ (get_post_type() === 'event') ? get_field('event_link')['url'] : the_permalink() }}" class="card-title">
                    {{ the_title() }}
                </a>
                <div class="card-text">{{ the_excerpt() }}</div>
                <div>
                <a href="{{ the_permalink() }}" class="card-link">Read More</a>
                </div>
            </div>
        </div>
    </article>
</div>

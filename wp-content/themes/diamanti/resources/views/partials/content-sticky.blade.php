<div class="col article sticky">
    <div class="row">
        <div class="col-md-6">
            <a href="{{ the_permalink() }}">
                {{ the_post_thumbnail('large', ['class' => 'img-fluid']) }}
            </a>
        </div>
        <div class="col-md-6">
            <div class="post-date">{{ the_date('F j, Y') }}</div>
            <a href="{{ the_permalink() }}">
                <h3 class="post-card-title">{{ the_title() }}</h3>
            </a>
            <a href="https://staging.diamanti.com/blog-posts/?ID={{get_the_author_ID()}}" ><div class="post-author">{{ __('By') }} {{ get_the_author() }}</a>
            </div>
            {{ the_excerpt() }}
            <a class="btn btn-action" href="{{ the_permalink() }}">Read More</a>
        </div>
    </div>
</div>

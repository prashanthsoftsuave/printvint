<div class="col-sm-4 article">
  <article @php(post_class())>
    <a href="{{ the_permalink() }}">
      <div class="card">
        @if(has_post_thumbnail())
          {!! the_post_thumbnail('large', ['class' => 'img-fluid']) !!}
        @endif
        <div class="card-body">
          <h5 class="post-card-title">
            {{ the_title() }}
          </h5>
          <div class="card-text">{{ the_excerpt() }}</div>
          <div>
            <a href="{{ the_permalink() }}" class="card-link">Read More</a>
          </div>
        </div>
      </div>
    </a>
  </article>
</div>
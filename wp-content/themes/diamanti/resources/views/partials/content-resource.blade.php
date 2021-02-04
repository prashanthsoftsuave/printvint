<div class="col-md-4 article" data-aos="fade-up">
    <article @php(post_class())>
        <div class="card">
            @if( has_post_thumbnail() )
            <a href="{{ the_permalink() }}">
              {!! the_post_thumbnail('large', ['class' => 'img-fluid']) !!}
            </a>
            @endif
            <div class="card-body text-center">
                @foreach(get_the_terms(get_the_ID(), 'media') as $term)
                  @php $term_color = get_field('color', $term); @endphp
                  <div @if($term_color)style="color: {!! $term_color !!}"@endif>{!! $term->name !!}</div>
                @endforeach
                <a href="{{ the_permalink() }}">
                    <h4 class="post-card-title">
                        {{ the_title() }}
                    </h4>
                </a>
            </div>
        </div>
    </article>
</div>

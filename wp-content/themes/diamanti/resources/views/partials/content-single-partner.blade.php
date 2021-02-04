<section @php(post_class('main-post'))>
  <div class="container mt-5">
    <header>
      <div class="row single-header">
        <div class="col-md-8">
          <h2 class="section-heading">{{ get_the_title() }}</h2>
          <h2>{{ the_field('title') }}</h2>
          <div class="entry-content mt-4">
            @php(the_content())
          </div>
          <div>
            @if (isset(get_field('asset')['url']))
            <a class="btn btn-action" href="{!! get_field('asset')['url'] !!}" target="{{ get_field('asset')['target'] }}">
              {{ get_field('asset')['title'] }}
            </a>
            @endif
            @if (isset(get_field('demo_form')['url']))
            <a class="btn btn-action" href="{!! get_field('demo_form')['url'] !!}" target="{{ get_field('demo_form')['target'] }}">
              {{ get_field('demo_form')['title'] }}
            </a>
            @endif
          </div>
        </div>
        <div class="col-md-4">
          {{ the_post_thumbnail('large', ['class' => 'img-fluid']) }}
        </div>
      </div>
    </header>

    <footer>
      {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
    </footer>
  </div>
</section>

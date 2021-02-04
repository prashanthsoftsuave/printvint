@if($partner['query'])
  <section class="partners py-0 bg-light">
    <div class="container">
      @if ($partner['title'])
      <div class="row">
        <div class="col">
          <h3 class="text-center my-3">{!! $partner['title'] !!}</h3>
        </div>
      </div>
      @endif
      <div class="row partner-logo-items">
        @foreach($partner['query'] as $logo)
          <div class="col-md-3 partner-logo-item">
            <a href="{!! get_the_permalink($logo->ID) !!}">
              {!! get_the_post_thumbnail($logo->ID, 'thumb') !!}
            </a>
{{--            <a class="link-arrow d-block text-center" href="{!! get_the_permalink($logo->ID) !!}">--}}
{{--              Learn More--}}
{{--            </a>--}}
          </div>
        @endforeach
      </div>
    </div>
  </section>
@endif

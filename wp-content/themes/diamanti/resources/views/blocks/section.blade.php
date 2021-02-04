@if($section)
  <section id="{{ $section['id'] }}" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
           class="section sr {{ $section['bg-color'] }} {{ $section['color']}} {!! $section['class'] !!}"
           @if( $section['bg-image']['url'] ) style="background: url('{!! $section['bg-image']['url'] !!}') center center; background-size: cover;" @endif
  >
    <div class="container {{ $section['class'] or '' }}">

      @if ($section['title'] or $section['heading'])
        <div class="row">
          <div class="col use_case-title">
            {!! $section['heading'] !!}
            <div class="h2">{!! $section['title'] !!}</div>
          </div>
        </div>
      @endif
      <div class="content row">
        @foreach($section['cols'] as $col)
          @if ($col['content_type'] === 'text')
            <div class='{{ $col['class']}} text'>
              {!! $col['content'] !!}
            </div>
          @elseif ($col['content_type'] === 'image')
            <div class='{{ $col['class']}} image position-relative'>
              <img class="content-image {{ $col['content']['overflow'] ? $col['content']['overflow'] : 'img-fluid' }}"
                   src="{!! $col['content']['image']['url'] !!}"
                   alt="{!! $col['content']['image']['alt'] !!}">
              <p class="caption">{!! $col['content']['image']['caption'] !!}</p>
            </div>
          @elseif ($col['content_type'] === 'card')
            <div
              class='card-wrap {{ $col['class']}} @if($col['content']['image_fills_background']) image-fills-background @endif'>
              <div class="card">
                @if($col['content']['link']) <a class="card-link" href="{!! $col['content']['link'] !!}"> @endif
                  @if( isset($col['content']['image']['url']))
                    @if($col['content']['image_fills_background'])
                      <img class="image-background position-absolute"
                           src="{!! $col['content']['image']['url'] !!}"
                           alt="{!! $col['content']['image']['alt'] !!}">
                    @else
                      <img class="card-img-top" src="{!! $col['content']['image']['url'] !!}"
                           alt="{!! $col['content']['image']['alt'] !!}">
                    @endif
                  @endif
                  <div class="card-body">
                    @if( $col['content']['title'] )
                      <h5 class="card-title">{!! $col['content']['title'] !!}</h5>
                    @endif

                    <div class="card-text">
                      {!! $col['content']['text'] !!}
                    </div>
                  </div>
                  @if($col['content']['link_text'] && $col['content']['link'])
                    <div class="card-footer">
                                        <span class="link-arrow" href="{!! $col['content']['link'] !!}">
                                            {{ $col['content']['link_text'] }}
                                        </span>
                    </div>
                  @endif
                  @if($col['content']['link']) </a> @endif
              </div>
            </div>
          @elseif ($col['content_type'] === 'video')
            <div class='{{ $col['class']}}'>
              <div class="video">
                <img class="img-fluid" src="{{ $col['content']['poster_frame']['url'] }}"
                     alt="{{ $col['content']['poster_frame']['alt'] }}">
                <a href="#" data-featherlight="{{ $col['content']['source'] }}">
                  <button class="btn-play_white"></button>{{ $col['content']['link_text'] }}</a>
              </div>
            </div>
          @elseif ($col['content_type'] == 'form')
            <div class="{{ $col['class'] }} form">
              {!! gravity_form( $col['content']['choose_a_form'], false, false, false, false, true, 30, true ) !!}
            </div>
          @endif
        @endforeach
      </div>
    </div>
  </section>
@else
  <p class="alert-danger text-center m-5">There are no sections to display</p>
@endif

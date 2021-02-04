@if($featured)
    <section class="featured {!! $featured['type'] !!} {!! $featured['background_color'] !!}"
             @if( !$featured['background_video'] && isset($featured['background_image']['url']) )
             style="background: url({{ $featured['background_image']['url'] }}) no-repeat center center; background-size: cover;
             @endif">
        @if( $featured['background_video'] )
            <video playsinline autoplay muted loop poster="{{ $featured['background_image']['url'] }}" id="bgvid"
                   style="background-image: url('{{ $hero['background_image']['url'] }}');">
                <source src="{{ $featured['background_video'] }}" type="video/mp4">
            </video>
        @endif
        <div class="container">
            @if ($featured['title'])
                <div class="row">
                    <div class="col use_case-title">
                        {!! $featured['heading'] !!}
                        <div class="h2">{!! $featured['title'] !!}</div>
                    </div>
                </div>
            @endif
            <div class="row d-flex no-gutters @if($featured['reverse']) flex-row-reverse @endif">
                <div class="col-md-7 feature">
                    @include('components.featured-primary-'.get_post_type($featured['primary']['ID']), ['primary' => $featured['primary']])
                </div>
                <div class="col-md-5 d-md-flex flex-column">
                    @foreach( $featured['secondary'] as $secondary)
                    @include('components.featured-secondary-' . get_post_type($secondary['ID']), ['secondary' => $secondary])
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@else
    <p class="alert-danger text-center m-5">There are no features to display</p>
@endif




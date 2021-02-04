@if (isset($hero))
    <section class="hero {{ $hero['text_color'] }} {!! $hero['type'] !!} {!! $hero['background_color'] !!}"
        @if( !$hero['background_video'] && isset($hero['background_image']['url']) )
           style="background: url({{ $hero['background_image']['url'] }}) no-repeat center center; background-size: cover;
           @endif">

        @if(isset($hero['background_image']['url']))
            @if ($hero['gradient_overlay'])
                <div class="overlay bg-diamanti-grad"></div>
            @endif
        @else
            @if (!$hero['background_video'])
                <div class="overlay pageHeader__mesh bg-deep-blue">
                <div class="news-buttons">
                        <a href="https://diamanti.com/press-releases/" class="io-news-btn btn btn-action" >Diamanti Press Releases</a>
                </div>
                </div>
            @endif
        @endif

        @if( $hero['background_video'] )
           <video playsinline autoplay muted loop poster="{{ $hero['background_image']['url'] }}" id="bgvid" style="background-image: url('{{ $hero['background_image']['url'] }}');">
               <source src="{{ $hero['background_block-title light text-center aos-init aos-animatevideo'] }}" type="video/mp4">
           </video>
        @endif

        <div class="container">
            <div class="row">
                <div class="col-sm-10 offset-sm-1">
                    @if($hero['heading'])
                    <div class="hero-statement">
                        {!! $hero['heading'] !!}
                    </div>
                    @endif

                    @if($hero['title'])
                        <div class="h2">
                            {!! $hero['title'] !!}
                        </div>
                    @endif

                    @if($hero['description'])
                        <div class="description text-{{ $hero['alignment_class'] }}">
                            {!!  $hero['description'] !!}
                        </div>
                    @endif

                    @if ($hero['buttons'])
                        <div class="button-container text-{{ $hero['alignment_class'] }}">
                            @foreach ($hero['buttons'] as $button)
                                <a class="btn btn-action mt-5" href="{!! $button['link'] !!}">{{ $button['button_text'] }}</a>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
@else
    <p class="alert-danger text-center m-5">There is no hero to display</p>
@endif
<style>
/*news styles*/
.pageHeader .news-buttons {
    display: none;
}
.post-type-archive-news  section.hero.light.pageHeader.bg-diamanti {
    height: 230px;
    display: flex;
}

.post-type-archive-news .hero.light.pageHeader .news-buttons {
    display: flex;
    justify-content: center;
    position: absolute;
    bottom: 20%;
    left: 0;
    right: 0;
}

.post-type-archive-news .hero.light.pageHeader a.io-news-btn.btn.btn-outline {
    border: 1.5px solid #fff;
    margin-left: 15px;
}

.post-type-archive-news .hero.light.pageHeader .block-title.light.text-center.aos-init.aos-animate {
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0;
}
</style>
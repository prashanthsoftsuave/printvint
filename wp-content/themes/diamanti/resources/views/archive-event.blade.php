@extends('layouts.app')

@section('content')
    @include('partials.page-header')
    <section class="section-gradient-mesh event-page">
        <div class="container">
            <div class="event-page__filters">
                @include('partials.content-post-filters', $data = ['event' => true])
            </div>
            <div class="event-page__upcoming">
                <h2 class="event-page__title">Upcoming events</h2>
                <div class="event-page__events">
                    @while ($get_upcoming_events->have_posts()) @php($get_upcoming_events->the_post())
                        @include('partials.content-event-item')
                    @endwhile
                    {{ wp_reset_postdata() }}
                </div>
            </div>
            @if($get_on_demand_webinars->have_posts())
                <div class="event-page__webinars">
                    <h2 class="event-page__title">On-demand webinars</h2>
                    <div class="event-page__events">
                        @while ($get_on_demand_webinars->have_posts()) @php($get_on_demand_webinars->the_post())
                            @include('partials.content-event-item')
                        @endwhile
                        {{ wp_reset_postdata() }}
                    </div>
                    <div class="search-page-pagination">
                        <button class="search-page-pagination__arrow search-page-pagination__arrow--prev"></button>
                        <p class="search-page-pagination__content"></p>
                        <button class="search-page-pagination__arrow search-page-pagination__arrow--next"></button>
                    </div>
                </div>
            @endif
        </div>
    </section>
    @include('blocks.newCtaBlock', ['newCtaBlock' => [
      'title' => 'Hit the ground running with Diamanti',
      'button' => [
          'url' => '/contact/',
          'target' => '_self',
          'title' => 'Contact Sales'
      ]
    ]])
@endsection

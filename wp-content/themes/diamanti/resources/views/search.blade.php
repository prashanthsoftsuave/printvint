@extends('layouts.app')

@section('content')
  <section class="section-gradient-mesh search-page">
      <div class="container">
          @include('partials.search-form-page')
          @if (have_posts())
              <div class="search-page__count">SHOWING RESULTS ({{ $get_total_posts }})</div>
              <div>
                  @while(have_posts()) @php(the_post())
                    @include('partials.content-search-results-item')
                  @endwhile
              </div>
              @include('partials.content-search-pagination')
          @else
              <div class="search-form-results__lack"><p class="search-form-results__lack__message">No results found. Try again.</p></div>
          @endif
      </div>
  </section>
  <section class="section newSection">
      <div class="ctaBlock">
          <div class="ctaBlock__container">
              <div class="ctaBlock__content">
                  <h2 class="ctaBlock__title">Hit the ground running with Diamanti</h2>
                  <a class="ctaBlock__button btn btn-action" href="/contact/">Contact Sales</a>
              </div>
          </div>
      </div>
  </section>
@endsection

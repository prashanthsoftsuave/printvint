@extends('layouts.app')

@section('content')
  @php
    $page_header['heading'] = null;
  @endphp
  @include('partials.page-header')
  <section class="search">
    <div class="container">
      <h2 class="aligncenter use_case mb-5">Search Results for: {!! get_search_query() !!}</h2>
      <div class="row">
        <div class="col-md-3 sidebar">
          @include('partials.sidebar-job')
        </div>
        <div class="col-md-9">
          @if (!have_posts())
            <div class="alert alert-warning">
              {{  __('Sorry, no results were found.', 'sage') }}
            </div>
          @else
            @while(have_posts()) @php(the_post())
              @include('partials.content-job-teaser')
            @endwhile
            {!! get_the_posts_navigation() !!}
          @endif
        </div>
      </div>
    </div>
  </section>
@endsection

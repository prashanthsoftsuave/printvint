@extends('layouts.app')

@section('content')
    @php
        $page_header['heading'] = '<h2 data-aos="fade-right" class="section-heading light text-center aos-init aos-animate">Jobs in</h2>';
        $page_header['title'] = '<div data-aos="fade-left" class="block-title light text-center aos-init aos-animate">'.get_queried_object()->name.'</div>';
    @endphp
    @include('partials.page-header')
    @if (!have_posts())
        <section class="not-found">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="alert alert-warning">
                            {{ __('Sorry, no jobs were found.', 'sage') }}
                        </div>
                    </div>
                    <div class="col-md-3 sidebar">
                        @include('partials.sidebar')
                    </div>
                </div>
            </div>
        </section>

    @else
        <section class="main-query">
            <div class="container ">
                <div class="row">
                  <div class="col-md-3 sidebar">
                    @include('partials.sidebar-job')
                  </div>
                    <div class="col-md-9">
                        @while (have_posts()) @php(the_post())
                          @include('partials.content-job-teaser')
                        @endwhile
                    </div>

                </div>
                {!! get_the_posts_navigation() !!}
            </div>
        </section>
    @endif
@endsection

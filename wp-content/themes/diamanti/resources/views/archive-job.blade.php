@extends('layouts.app')

@section('content')
    @php
        $page_header['heading'] = null;
        $page_header['title'] = '<div data-aos="fade-left" class="block-title light text-center aos-init aos-animate">Jobs</div>';
    @endphp
    @include('partials.page-header')
    @if (!have_posts())
        <section class="not-found">
            <div class="container">
                <div class="row">
                  <div class="col-md-3 sidebar">
                    @include('partials.sidebar')
                  </div>
                    <div class="col-md-9">
                        <div class="alert alert-warning">
                            {{ __('Sorry, no jobs were found.', 'sage') }}
                        </div>
                    </div>
                </div>
            </div>
        </section>

    @else
        <section class="main-query">
            <div class="container ">
                <div class="row">
                  <div class="col-md-3 sidebar">
                    @php echo do_shortcode('[searchandfilter slug="jobs"]'); @endphp
                  </div>
                    <div class="col-md-9">
                      @php echo do_shortcode('[searchandfilter slug="jobs" show="results"]') @endphp
                    </div>
                </div>
                {!! get_the_posts_navigation() !!}
            </div>
        </section>
    @endif
@endsection

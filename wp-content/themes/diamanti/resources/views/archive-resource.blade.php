@extends('layouts.app')

@section('content')
    @include('partials.page-header')

    <div class="container">
        @if (!have_posts())
            <div class="alert alert-warning">
                {{ __('Sorry, no results were found.', 'sage') }}
            </div>
            {!! get_search_form(false) !!}
        @endif
    </div>

    <section class="main-query">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 resources-filters">
                  @php echo do_shortcode('[searchandfilter slug="resources"]') @endphp
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="row">
                        @if (!have_posts())
                            <div class="alert alert-warning">
                              {{ __('Sorry, no results were found.', 'sage') }}
                            </div>
                            {!! get_search_form(false) !!}
                          @endif
                          @php echo do_shortcode('[searchandfilter slug="resources" show="results"]') @endphp
                    </div>
                </div>
            </div>
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

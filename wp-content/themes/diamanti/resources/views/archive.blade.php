@extends('layouts.app')

@section('content')
    @include('partials.page-header')

    @if (!have_posts())
        <section class="not-found">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="alert alert-warning">
                            {{ __('Sorry, no results were found.', 'sage') }}
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
                    <div class="col-md-9">
                        <div class="row">
                            @while (have_posts()) @php(the_post())
                            <div class="col-md-6 article">
                                @include('partials.content-'.get_post_type())
                            </div>
                            @endwhile
                        </div>
                    </div>
                    <div class="col-md-3 sidebar">
                        @include('partials.sidebar')
                    </div>
                </div>
                {!! get_the_posts_navigation() !!}
            </div>
        </section>
    @endif
@endsection

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
    <div class="main-query">
        <div class="container ">
            <div class="row">
                @while (have_posts()) @php(the_post())
                <div class="col-md-4 article" data-aos="fade-up">
                    @include('partials.content-'.get_post_type())
                </div>
                @endwhile
            </div>
            {!! get_the_posts_navigation() !!}
        </div>
    </div>
@endsection

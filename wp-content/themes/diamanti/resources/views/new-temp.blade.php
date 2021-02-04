{{--
  Template Name: Blog posts
  Template Post Type: page, resource
--}}

@extends('layouts.app')

@section('content')


    <div class="container">
{{--        @if (!have_posts())--}}
{{--            <div class="alert alert-warning">--}}
{{--                {{ __('Sorry, no results were found.', 'sage') }}--}}
{{--            </div>--}}
{{--            {!! get_search_form(false) !!}--}}
{{--        @endif--}}
    </div>
{{--    <section class="sticky p-4">--}}
{{--        <div class="container materialize-container">--}}
{{--            <div class="row">--}}
{{--                @while ($sticky_query->have_posts()) @php($sticky_query->the_post())--}}
{{--                @include('partials.content-sticky')--}}
{{--                @endwhile--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <section class="main-query p-4">
        <div class="container ">
            <div class="row">
                <div class="col">
                    <div class="row no-gutters">
{{--                   {{$test_name}}--}}
                        @while ($main_query->have_posts()) @php($main_query->the_post())
                        <div class="col-sm-4 article">
                            @include('partials.content-'.get_post_type())
                        </div>
                        @endwhile
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col mt-3 d-flex justify-content-center">
                    @include('partials.pagination')
                </div>
            </div>
        </div>
    </section>

@endsection

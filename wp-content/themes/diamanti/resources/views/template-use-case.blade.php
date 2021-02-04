{{--
  Template Name: Use Case
--}}

@extends('layouts.app')
@section('content')
    @while(have_posts()) @php(the_post())
    @include('blocks.hero', ['hero' => $page_header])
    @include('partials.content-page')
    @include('blocks.use-case', ['use-case' => $use_case])
    @include('blocks.cta-cards', ['cards' => $cta_cards ])
    @endwhile
@endsection

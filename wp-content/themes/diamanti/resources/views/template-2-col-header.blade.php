{{--
  Template Name: 2-Column Header
--}}

@extends('layouts.app')
@section('content')
    @while(have_posts()) @php(the_post())
    @include('blocks.2col-hero', array('hero' => $page_header))
    @include('partials.content-page')
    @endwhile
@endsection

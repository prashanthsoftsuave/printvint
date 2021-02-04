{{--
  Template Name: Products
--}}

@extends('layouts.app')
@section('content')
    @while(have_posts()) @php(the_post())
    @include('blocks.newHero')
    @include('partials.content-page')
    @endwhile
@endsection

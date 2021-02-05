@extends('layouts.app')

@section('content')
    @while(have_posts()) @php(the_post())
    @include('partials.notification-bar')
    @include('blocks.newHero')
    @include('blocks.client-logo')
    @include('blocks.home_smartslider')
    @include('blocks.scrollmagic')
    @include('blocks.partnertabs')
    @include('partials.content-page')
    @endwhile
@endsection

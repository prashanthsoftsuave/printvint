{{--
  Template Name: Story Template
  Template Post Type: page, resource
--}}

@extends('layouts.app')
@section('content')
    @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    @include('blocks.section', [$top_section_output['type'] => $top_section_output])
    @include('blocks.story', ['story_element' => $story_element_output])
    @include('blocks.cta-cards', ['cards' => $cta_cards ])
    @include('partials.content-page')
    @endwhile
@endsection

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())

  <div class="single pb-5">
    @include('partials.content-single-'.get_post_type())
  </div>

  @endwhile
@endsection

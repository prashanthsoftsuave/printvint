@extends('layouts.app')

@section('content')

@include('blocks.hero', ['hero' => [
    "text_color" => "pageHeader",
    "heading" => '<h2 data-aos="fade-right" class="section-heading light text-center aos-init">' . __('Diamanti', 'diamanti') . '</h2>',
    "title" => '<div data-aos="fade-left" class="block-title light text-center aos-init">' . __('Press Releases', 'diamanti') . '</div>',
    "type" => "light",
    "background_color" => "bg-none",
]])

    <div class="container">
        @if (!have_posts())
            <div class="alert alert-warning">
                {{ __('Sorry, no results were found.', 'sage') }}
            </div>
            {!! get_search_form(false) !!}
        @endif
    </div>
    <section class="main-query">
        <div class="container ">
            <div class="row">
                <div class="col">
                    <div class="row no-gutters">
                        @while (have_posts()) @php(the_post())
                        <div class="col-sm-4 article">
                            <article @php(post_class())>
                                <div class="card">
                                    @if(has_post_thumbnail())
                                        <a href="{{ the_permalink() }}">
                                            {!! the_post_thumbnail('large', ['class' => 'img-fluid']) !!}
                                        </a>
                                    @endif
                                    <div class="card-body">
                                        <div class="post-date">{{ apply_filters( 'the_date', get_the_date(), get_option( 'date_format' ), '', '' ) }}</div>
                                        <a href="{{ the_permalink() }}">
                                            <h4 class="post-card-title">
                                                {{ the_title() }}
                                            </h4>
                                        </a>
                                        <div class="card-text">{{ the_excerpt() }}</div>
                                    </div>
                                    <div class="card-footer">
                                        <a href="{{ the_permalink() }}" class="card-link link-arrow">Read More</a>
                                    </div>
                                </div>
                            </article>
                        </div>
                        @endwhile
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col d-flex justify-content-center">
                    {{ the_posts_pagination([
                      'prev_text' => '<i class="fa fa-chevron-left" aria-hidden="true"></i> Prev',
                      'next_text' => 'Next <i class="fa fa-chevron-right" aria-hidden="true"></i>'
                      ])
                    }}
                </div>
            </div>

        </div>
    </section>
    @include('blocks.newsletter')
    @include('blocks.hero', ['hero' => $blog_hero])
@endsection

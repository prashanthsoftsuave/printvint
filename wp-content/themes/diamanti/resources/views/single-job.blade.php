@extends('layouts.app')

@section('content')
  @php
    $sidebar = ((get_field('job_company_logo') or get_field('job_company_name') or get_field('job_company_about')) and get_field_object('other_companies', 'option')['value'] == true);
  @endphp

  <article @php(post_class('main-post'))>
    <div class="container">
      <div class="row pt-2 pb-2">
        <div class="col">
          <a href="{{ get_post_type_archive_link('job') }}"><i class="fa fa-arrow-left"></i> View All Jobs</a>
        </div>
      </div>
      <div class="row">
        <div class="col @if($sidebar) col-md-8 @endif">
          <div class="row">
            <div class="col">
              <h1>{!!  get_the_title() !!}</h1>
            </div>
          </div>
          <div class="row mb-4 job-meta">
            <div class="col">
              @if(get_field('job_location'))
                <i class="fa fa-map-marker"></i> {!! get_term(get_field('job_location'))->name !!}
                <span class="sep"> | </span>
              @endif
              <i class="fa fa-briefcase"></i> {!! get_field('job_time') !!}
              @if(get_field('job_department'))
                <span class="sep"> | </span>
                <i class="fa fa-building-o"></i> {!! get_term(get_field('job_department'))->name !!}
              @endif
            </div>
          </div>
          {!! $diamanti_social_sharing !!}

          <div class="row mb-4">
            <div class="col">
              <h3>Job Details</h3>
              {!! get_field('job_description') !!}
            </div>
          </div>

          @if (!$sidebar)
            <div class="row mb-4">
              <div class="col">
                @if (get_field('other_companies', 'option')['value'] == true)
                  @if (get_field('job_company_logo'))
                    <img src="{!! get_field('job_company_logo')['url'] !!}"
                         alt="{!! get_field('job_company_logo')['alt'] !!}">
                  @endif
                  @if (get_field('job_company_name'))
                    <h4>About {!! get_field('job_company_name') !!}</h4>
                  @endif
                  @if (get_field('job_company_about'))
                    {!! get_field('job_company_about') !!}
                  @endif
                @else
                  @if (get_field('job_company_logo', 'option'))
                    <img src="{!! get_field('job_company_logo', 'option')['url'] !!}"
                         alt="{!! get_field('job_company_logo', 'option')['alt'] !!}">
                  @endif
                  @if (get_field('job_company_name', 'option'))
                    <h4>About {!! get_field('job_company_name', 'option') !!}</h4>
                  @endif
                  @if (get_field('job_company_about', 'option'))
                    {!! get_field('job_company_about', 'option') !!}
                  @endif
                @endif
              </div>
            </div>
          @endif
        </div>
        @if($sidebar)
          <div class="col-md-4 mb-4">
            @if (get_field('job_company_logo'))
              <img src="{!! get_field('job_company_logo')['url'] !!}"
                   alt="{!! get_field('job_company_logo')['alt'] !!}">
            @endif
            @if (get_field('job_company_name'))
              <h4>About {!! get_field('job_company_name') !!}</h4>
            @endif
            @if (get_field('job_company_about'))
              {!! get_field('job_company_about') !!}
            @endif
          </div>
        @endif
      </div>
      {{--        @if (get_field('job_application_form'))--}}
      {{--            <div class="row mb-4">--}}
      {{--                <div class="col">--}}
      {{--                    <h2>Apply Now</h2>--}}
      {{--                    @php--}}
      {{--                        echo do_shortcode('[gravityform id='.get_field('job_application_form')['value'].' title=false description=false ajax=false tabindex=49]');--}}
      {{--                    @endphp--}}
      {{--                </div>--}}
      {{--            </div>--}}
      {{--        @endif--}}
    </div>
  </article>
@endsection

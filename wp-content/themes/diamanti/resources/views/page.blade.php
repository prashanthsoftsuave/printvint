@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    @include('partials.content-page')
{{--    @include('blocks.cta-cards', ['cards' => $cta_cards ])--}}
  @endwhile

@php($contact_section = get_field('contact_section'))
@if($contact_section['new_cta_block']['button'])

  @include('blocks.newCtaBlock', ['newCtaBlock' => [
      'title' => $contact_section['new_cta_block']['title'],
      'button' => [
          'url' => $contact_section['new_cta_block']['button']['url'],
          'target' => $contact_section['new_cta_block']['button']['target'],
          'title' => $contact_section['new_cta_block']['button']['title']
      ]
    ]])
@endif
@endsection

<style>
  .section.newSection{
      display:none;
  }

  .page-child.parent-pageid-9227 section.pageHeader{
      padding:32px 0;
  }

  .page-child.parent-pageid-9227 .section.newSection{
      display:block;
  }
  .page-child.parent-pageid-9227 h2.section-heading.light.text-center.aos-init.aos-animate {
            color: #fff;
        }
  .page-child.parent-pageid-9227 section .pageHeader__mesh{display:block !important;
            background-image:url('https://go.diamanti.com/rs/597-VSX-966/images/6.png');
            background-size: cover !important;
            background-repeat: no-repeat;
            background-position: center !important;
          }

        .page-child.parent-pageid-9227 .block-title.light.text-center.aos-init.aos-animate{
            font-size: 40px;
            line-height: 50px;
            margin-top: 27px;
            margin-bottom: 27px;
            color: #ffffff;
            font-style: italic;
            font-weight: 900;
        }
        
        .page-child.parent-pageid-9227 .content h2 {
            color: #2492c3;
            font-weight: bold;
            font-size: 40px;
            line-height: 46px;
            margin-bottom: 40px;
        }
        
        .page-child.parent-pageid-9227 .col h2.section-heading {
            font-size: 20px;
            text-align: center;
            color: #2492c3;
            font-weight: bold;
            margin-bottom: 45px;
        }

        .page-child.parent-pageid-9227 h2.section-heading.light.text-center.aos-init.aos-animate {
            font-size: 18px;
            line-height: 24px;
            color: #ffffff;
            margin-bottom: 0px;
            text-transform: initial;
        }

        .page-child.parent-pageid-9227 .content p {
            /* color: #989898; */
            line-height: 1.5;
        }

        .page-child.parent-pageid-9227 .content a {
            margin: 20px 0;
            color: #009ece;
            display: inline-block;
            text-decoration: none;
            font-weight: 600;
        }
        
        .page-child.parent-pageid-9227 .additionalResources  {
            padding: 0 15px;
        }
        .page-child.parent-pageid-9227 .additionalResources .additionalHeading {
            font-size: 18px;
            color: #009ece;
            margin-bottom: 50px;font-weight:bold;
        }
       

        .page-child.parent-pageid-9227 .card-img-top{
            max-width:35px;
        }

        .page-child.parent-pageid-9227 .card-title {
            font-weight: 700;
            margin-top: 30px;
            margin-bottom: 7px;
            color: #313131;
        }

        .page-child.parent-pageid-9227 .card-link{ 
            margin-top: 0px !important; 
            text-decoration: none !important;
        }

        .page-child.parent-pageid-9227 .card{
            box-shadow: 0 0 5px #cccccc !important;
            border-radius: 5px !important;
            padding: 45px 18px 65px 18px;
            border: 1px solid #cccccc;
            background-image: url(https://go.diamanti.com/rs/597-VSX-966/images/5.png);
            background-size: cover !important;
            background-repeat: no-repeat;
            background-position: center !important;
            text-align:center;
            display:block;
            margin-bottom:30px;
            max-height: 320px;
        }

        .page-child.parent-pageid-9227 span.link-arrow{
            font-size: 16px !important;
            font-weight: normal;
        }

        .page-child.parent-pageid-9227 .content h2.ctaBlock__title {
            color: #fff;
            font-size: 48px;
            line-height: 54px;
            margin-bottom: 16px;
            font-weight: 400;
            letter-spacing: 2px;
        }

        .page-child.parent-pageid-9227 a.ctaBlock__button.btn.btn-action {
            color: #fff !important;
        }

        .page-child.parent-pageid-9227 .ctaBlock {
            padding: 0px 0 75px;
        }

        @media (max-width: 767px) {
          .page-child.parent-pageid-9227 .card {
                flex-direction: column;
            }
            .page-child.parent-pageid-9227 .card {
                width: 100%;
                margin-right: 0;
                padding: 30px 15px;
            }
        } 
        .page-child.parent-pageid-9227 .newSection {
            position: relative;
            margin-top: 120px;
            background-color: #2b2b2b;
        }
        
        .page-child.parent-pageid-9227 .newSection::before {
            content: ' ';
            position: absolute;
            width: 140%;
            height: 100vw;
            z-index: 1;
            top: 25px;
            left: 0;
            transform: translateY(-99%);
            background-image: url(https://staging.diamanti.com/wp-content/themes/diamanti/resources/assets/images/darklowerbg.svg);
            background-repeat: no-repeat;
            background-size: 100%;
            background-position: bottom center;
            pointer-events: none;
        }
        .page-child.parent-pageid-9227 section.section {
            padding: 3em 0 0;
            position: relative;
        }

        body.page-child.parent-pageid-9227 { padding-top:109px; }

        body.page-child.parent-pageid-9227 .content a{
            color:#2492C3 !important;
        }
        body.page-child.parent-pageid-9227 .content a:hover, 
        body.page-child.parent-pageid-9227 .content a:visited{
            color:#024F71 !important;
        }
</style>

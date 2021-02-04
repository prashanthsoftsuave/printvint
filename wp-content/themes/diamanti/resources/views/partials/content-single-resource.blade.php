@if(!get_field('show_in_new_template'))
<article @php(post_class('main-post'))>
    <div class="container">
        <header>
            <div class="row single-header">
                <div class="col-md-10">
                  @php($terms = get_the_terms('', 'media') ?? '')
                  @if($terms)
                  @foreach($terms as $term)
                    @php $term_color = get_field('color', 'term_' . $term->term_id); @endphp
                    <div class='resource-label' @if($term_color)style="color: {!! $term_color !!}"@endif>{!! $term->name !!}</div>
                  @endforeach
                  @endif
                    <h1 class="entry-title">{{ get_the_title() }}</h1>
                </div>
            </div>
        </header>

        <div class="row">
            <div class="col-md-7">
                <div class="entry-content mt-4">
                    @php(the_content())
                  @if (!get_field('gate_this_asset'))
                    @if( get_field('attached_media')['url'] )
                      <p>
                        <a class="link-arrow" href="{{ get_field('attached_media')['url'] }}">{{ get_field('link_text') }}</a>
                      </p>
                    @endif
                  @endif
                </div>
            </div>
            <div class="col-md-5 sidebar">
              @if (get_field('gate_this_asset'))
                <section class="section form bg-primary light p-4">
                  {!!  get_field('title_and_description') !!}
                  {!! gravity_form( get_field('choose_a_form'), false, false, false, false, true, 30, true ) !!}
                </section>
              @endif
			  
			   @if (get_field('use_marketo_form'))
                <section class="section form bg-primary light p-4 marketo_form_sidebar">
                  {!!  get_field('marketo_form_embed_code') !!}
                </section>
              @endif

            </div>
        </div>        

        <footer>
            {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
        </footer>
    </div>
</article>


@else

<div class="wrap container-fluid p-0" role="document">
            <div class="content">
                <main class="main">
                    <section class="Banner" style="background-image:url({!!  get_field('header_background_image')['url'] ?? 'https://go.diamanti.com/rs/597-VSX-966/images/6.png' !!})">
                        <div class="newHero__container">
                            <div class="flex">
                                <div class="mktoText" id="banner2text1">
                                    <p><strong>
                                      @php($terms = get_the_terms('', 'media') ?? '')
                                        @if($terms)
                                          @foreach($terms as $term)
                                          @php $term_color = get_field('color', 'term_' . $term->term_id); @endphp
                                          <div class='resource-label' style="color:#fff">{!! $term->name !!}</div>
                                          @endforeach
                                        @endif
                                    </strong></p>
                                    <h1 style="text-transform: uppercase;">{{ get_the_title() }}</h1>
                                    <p>{{ get_field('webinar_date_text') }}</p>
                                  </div>
                            </div>
                        </div>
                    </section>
                    <section class="section1">
                        <div class="newHero__container">
                        @php ($classes = (get_field('gate_this_asset') || get_field('use_marketo_form')) ? 'col-sm-7 col-xs-12 padleft' : 'col-xs-12')
                            <div style="position:relative;" class="{{ $classes }}">
                                @php(the_content())
                                @if (!get_field('gate_this_asset'))
                                  @if( get_field('attached_media')['url'] )
                                    <p>
                                      <a class="link-arrow" href="{{ get_field('attached_media')['url'] }}">{{ get_field('link_text') }}</a>
                                    </p>
                                  @endif
                                @endif

                                @if (get_field('image_section'))
                                    <p>
                                      <img src="{!!  get_field('image_section')['url'] !!}">
                                    </p>
                                @endif
                            </div>
                            <div class="col-sm-5 col-xs-12 padright">
                                @if (get_field('gate_this_asset'))
                                    <section class="section form bg-primary light p-4">
                                      {!!  get_field('title_and_description') !!}
                                      {!! gravity_form( get_field('choose_a_form'), false, false, false, false, true, 30, true ) !!}
                                    </section>
                                  @endif
                            
                                @if (get_field('use_marketo_form'))
                                    <section class="section form bg-primary light p-4 marketo_form_sidebar">
                                      {!!  get_field('marketo_form_embed_code') !!}
                                    </section>
                                @endif
                              
                            </div>
                        </div>
                    </section>

                    @if(get_field('show_speakers'))
                      <section class="section">
                      <h4 class="speaker_title">{!! get_field('speaker_title') !!}</h4>
                      @php($cards = get_field('speaker_sections'))
                      <div class="cta-cards container mb-5">
                        <div class="card-deck">
                          @foreach($cards['cards'] as $card)
                            <div class="box">
                                <img src="{{ $card['icon']['url'] ?? "" }}" alt="{{ $card['icon']['alt'] ?? ""  }}">
                                <h3>{!!  $card['title'] ?? "" !!}</h3>
                                {!!  $card['caption'] ?? "" !!}
                            </div>
                          @endforeach
                        </div>
                      </div>
                      </section>
                      @endif
                    
@php($contact_section = get_field('contact_section'))
@if($contact_section['new_cta_block']['button'])
<div class="contact-sales-setion">
@include('blocks.newCtaBlock', ['newCtaBlock' => [
      'title' => $contact_section['new_cta_block']['title'],
      'button' => [
          'url' => $contact_section['new_cta_block']['button']['url'],
          'target' => $contact_section['new_cta_block']['button']['target'],
          'title' => $contact_section['new_cta_block']['button']['title']
      ]
    ]])
</div>
@endif

</main>
            </div>
        </div>
<style>
.newHero__container form.mktoForm{box-shadow:none !important; border:none !important;}
.newHero__container .bg-primary {
    background: none !important;
    border: 1px solid #eee;
    box-shadow: 0 0 5px #cccccc !important;
}
.section.newSection{ margin-bottom:-50px; }
.newHero__container #mktoForm_1018 .mktoHtmlText.mktoHasWidth, 
.newHero__container #mktoForm_1018 .mktoTemplateBox{
  color:#2b2b2b !important;
}
#mktoForm_1018 {
    border: none !important;
}

section.StaticBanner img {
    width: 100%;
}
			img{max-width:100%;}
			.StaticBanner{display:none; padding:0px;}
            .Banner{
            display:block !important;
            background-image:url('https://go.diamanti.com/rs/597-VSX-966/images/6.png');
            background-size: cover !important;
            background-repeat: no-repeat;
            background-position: center !important;}
            .section1{
            display:block !important;}
            .section2{
            display:block !important;}
            .newSection2{
            display:block !important;
			padding: 0;}
			.site-footer {
			display:block !important;
			}
        </style>
        <style>
            
			.padtopc{
			border-top: 1px solid rgba(241,242,245,.4);
			padding-top: 5px !important;
			}
            .Banner{
                text-align:center;
            }
            .Banner h1{
            font-size: 44px;
            line-height: 50px;
            margin-top: 27px;
            margin-bottom: 27px;
            color: #ffffff;
            font-style: italic;
            font-weight: 900;
            }
            .Banner p,.Banner h3{
            font-size: 18px;
            line-height: 24px;
            color: #ffffff;
            }
            .Banner h3{
            font-weight:bold;
            }
            
            p span.greentxt{
            color:#2492c3;
            font-weight: bold;
            }
            .section1,.section2{
            overflow:hidden;
            }
            .section1 li {
            font-size: 16px;
            line-height: 22px;
            font-weight: 400;
            padding-bottom: 9px;
            }
            .section1 h3 {
            font-size: 16px;
            line-height: 22px;
            font-weight:bold;
            color: #313131;
            margin:0;
            padding: 12px 0 22px 0;
            }
            .section1 ul {
            list-style-type: none;
            padding-left: 30px;
            }
            .section1 li::before {
            content: '';
            background-image: url(https://go.diamanti.com/rs/597-VSX-966/images/dot.png);
            position: absolute;
            width: 5px;
            height: 5px;
            left: 17px;
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            margin-top: 10px;
            }
            .section2 h4 {
            text-align: center;
            color: #2492c3;
            font-weight: bold;
            margin-bottom: 45px;
            }
            .section2 .col-sm-4 {
            max-width: 30%;
            }
            .section2 .flex{
            display:flex;
            justify-content: center;
            padding-bottom: 10px;
            }		
            .newHero__container {
            overflow: hidden;
            }
            .section1 {
            padding: 50px 0 25px 0;
            }			
            .box{
            box-shadow: 0 0 5px #cccccc !important;
            border-radius: 5px !important;
            padding: 30px 18px 20px 18px;
            border: 1px solid #cccccc;
            }
            .box img {
            max-width: 125px;
            width:100%;
            }
            .section2 h3 {
            font-weight: 700;
            margin-top: 30px;
            margin-bottom: 7px;
            }
            .section2 h5 {
            color: #2492c3;
            font-weight: 400;
            font-size: 14px;
            margin-top: 0;
            margin-bottom: 14px;
            }
            .section2 p {
            font-size: 12px;
            line-height: 18px;
            }
            .spektra-heading {
            font-size: 38px;
            padding-top: 40px;
            }
            
            @media (min-width:600px)  {

            .section1 .padleft {
              padding-right: 90px;
            }
            .col-sm-7{
              float:left;
            }
            .col-sm-5{
              float:right;
            }
          }
            
.contact-sales-setion {
    position: relative;
}

.card-deck {
    display: flex;
    justify-content: center;
    padding-bottom: 10px;
}

.box{
    width: 33%;
    padding: 20px;
    box-sizing: border-box;
    margin: 0 15px;
    text-align:center;
}
.box img {
    max-width: 125px;
    width: 100%;
}

h4.speaker_title {
    text-align: center;
    color: #2492c3;
    font-weight: bold;
    margin-bottom: 45px;
    font-size:20px;
}

.box h3 {
    font-weight: 700;
    margin-top: 30px;
    margin-bottom: 7px;
    font-family: Open Sans,Arial,sans-serif;
    font-size: 20px;
}
.box h6, .box h5 {
    color: #2492c3;
    font-weight: 400;
    font-size: 14px;
    margin-top: 0;
    margin-bottom: 14px;
}
.box p {
    font-size: 12px;
    line-height: 18px;
}

.resource-template-default .card-deck  {
        padding-left: 15px;
        padding-right: 15px;
    }
    
    .resource-template-default .card-deck .box {
        width: 32%;
        margin-right: 2%;
        margin-bottom: 20px;
        margin-left: 0;
    }

    .resource-template-default .card-deck .box:nth-child(3n) {
        margin-right: 0;
    }
    
    .resource-template-default .card-deck .box:last-child {
        margin-right: 0;
    }

    @media (max-width: 768px) {
        .resource-template-default .card-deck .box {
            width: 48%;
            margin-right: 4%;
        }

        .resource-template-default .card-deck .box:nth-child(3n) {
            margin-right: 4%;
        }

        .resource-template-default .card-deck .box:nth-child(2n) {
            margin-right: 0;
        }

        @media (max-width: 576px) {
            .resource-template-default .card-deck .box {
                width: 100%;
                margin-right: 0%;
            }

            .resource-template-default .card-deck .box:nth-child(3n) {
                margin-right: 0%;
            }
        }
    }

   .resource-template-default .contact-sales-setion {
    position: relative;
    margin-top: 210px;
}

@media (min-width: 992px){
.ctaBlock {
    padding: 58px 0 75px !important;
}
}
.resource-template-default .contact-sales-setion::before {
    content: ' ';
    position: absolute;
    width: 140%;
    height: 100vw;
    z-index: 1;
    top: 0;
    left: 0;
    transform: translateY(-99%);
    background-image: url(https://staging.diamanti.com/wp-content/themes/diamanti/resources/assets/images/darklowerbg.svg);
    background-repeat: no-repeat;
    background-size: 100%;
    background-position: bottom center;
    pointer-events: none;
}

body{padding-top:109px;}
.content a{
    color:#2492C3 !important;
}
.content a:hover, .content a:visited{
    color:#024F71 !important;
}
.content a.ctaBlock__button.btn.btn-action {
            color: #fff !important;
}
        </style>
@endif


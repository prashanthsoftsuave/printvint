<?php if ( !is_front_page() ) { ?>
@if($new_hero )
    <section class="section newSection" id="{{ $new_hero['section_id'] }}">
        <div class="newHero newHero--{{ $new_hero['direction'] }} newHero--{{ $new_hero['template'] }}">
            @if(is_front_page())
                <div class="interactiveMesh"></div>
            @else
                <div class="staticMesh staticMesh--{{ $current_template }}"></div>
            @endif
            <div class="newHero__container">
                <div class="newHero__columns newHero__columns--{{ $new_hero['direction'] }}">
                    <div class="newHero__column">
                        @if($new_hero['title_label'])
                            <h4 class="newHero__title__label">{{ $new_hero['title_label'] }}</h4>
                        @endif
                        <h1 class="newHero__title">{!! $new_hero['title'] !!}</h1>
                        <p class="newHero__caption The-best-platform-fo">{!! $new_hero['caption'] !!}</p>
                        <a class="newHero__button btn btn-action" href="{{ $new_hero['button']['url'] }}"
                           target="{{ $new_hero['button']['target'] }}">{{ $new_hero['button']['title'] }}</a>
                        <a class="newHero__button btn btn-action contact-Sales" href="/demo">Request Demo</a>
                        @if($new_hero['second_button'])
                            <a class="newHero__button newHero__second-button btn btn-action btn-action--secondary"
                               href="{{ $new_hero['second_button']['url'] }}"
                               target="{{ $new_hero['second_button']['target'] }}">{{ $new_hero['second_button']['title'] }}</a>
                        @endif
                    </div>
                    <div class="newHero__column">
                        @if($new_hero['add_product_diagram'])
                            @include('components.' . $new_hero['diagram_type'] . '-product-diagram')
                        @else
                            <img class="newHero__image" src="{{ $new_hero['image']['url'] }}"
                                 alt="{{ $new_hero['image']['alt'] }}"/>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    @endif
<?php } ?>
   <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
   
    <section id="homescrollv81" style="display: none;">
    <div>
        <?php echo do_shortcode('[smartslider3 slider="2"]');
        ?>
    </div>
</section>
  
      
 

    


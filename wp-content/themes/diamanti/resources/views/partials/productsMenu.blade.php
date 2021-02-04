@if(isset($product_section_menu))
{{--    <section class="productsMenu productsMenu--{{ $current_template }}">--}}
{{--        @if($product_section_menu["custom_link"])--}}
{{--            <div class="productsMenu__sticky">--}}
{{--                <a--}}
{{--                    href="{{ $product_section_menu["custom_link"]["url"] }}"--}}
{{--                    target="{{ $product_section_menu["custom_link"]["target"] }}"--}}
{{--                    class="productsMenu__item productsMenu__item--withArrow"--}}
{{--                >{{ $product_section_menu["custom_link"]["title"] }}</a>--}}
{{--            </div>--}}
{{--        @endif--}}
{{--        <ul class="productsMenu__list">--}}
{{--            @if(isset($current_template) && $current_template == 'product-single')--}}
{{--                <li class="productsMenu__item productsMenu__item--goBack">--}}
{{--                    <a href="{{ get_permalink( $post->post_parent ) }}">All</a>--}}
{{--                </li>--}}
{{--            @endif--}}
{{--            @foreach($product_section_menu['elements'] as $element)--}}
{{--                <li class="productsMenu__item">--}}
{{--                    <a href="#{{ $element['section_id'] }}">{!! $element['label'] !!}</a>--}}
{{--                </li>--}}
{{--            @endforeach--}}
{{--            @if($product_section_menu["custom_link"])--}}
{{--                <li class="productsMenu__item productsMenu__item--withArrow">--}}
{{--                    <a--}}
{{--                        href="{{ $product_section_menu["custom_link"]["url"] }}"--}}
{{--                        target="{{ $product_section_menu["custom_link"]["target"] }}"--}}
{{--                    >{{ $product_section_menu["custom_link"]["title"] }}</a>--}}
{{--                </li>--}}
{{--            @endif--}}
{{--        </ul>--}}

{{--    </section>--}}
@endif

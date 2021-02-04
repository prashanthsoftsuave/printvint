<ul id="menu-primary-navigation" class="navbar-nav align-items-lg-center">

    @foreach($primary_nav as $menu_item)
        @if(!$menu_item->menu_item_parent)
            @if($menu_item->title === 'Request Demo')
                <li class="primary-menu__nav-item">
                    <button type="button" id="openSearchModal" class="open-search-modal">
                        <i class="search-form__icon search-form__icon--search" aria-hidden="true"></i>
                    </button>
                </li>
                <li class="primary-menu__nav-item {{ $menu_item->menu_item_children ? 'menu-item-has-children' : '' }}">
                    <a href="{{ $menu_item->url }}" class="primary-menu__nav-link btn btn-action"><span>{{ $menu_item->title }}</span></a>
                </li>
            @else
                <li class="primary-menu__nav-item {{ $menu_item->menu_item_children ? 'menu-item-has-children' : '' }}">
                    <a href="{{ $menu_item->url }}" class="primary-menu__nav-link {{ $menu_item->title === 'Request Demo' ? 'btn btn-action' : '' }}"
                    {!! $menu_item->menu_item_children ? 'data-submenu-open="' . $menu_item->ID . '"' : '' !!}
                    ><span>{{ $menu_item->title }}</span></a>
                    @if($menu_item->menu_item_children)
                        @if($menu_item->has_product_children)
                            <div class="products-submenu"
                                data-submenu="{{ $menu_item->ID }}">
                                <div class="products-submenu__wrapper">
                                    <div class="products-submenu__col--shadow">
                                        <ul class="products-submenu__items">
                                            <li class="products-submenu__item products-submenu__item--mobileBack">
                                                <a href="#" class="products-submenu__item__link products-submenu__item__link--mobileBack" data-menu-back="">
                                                    <span class="products-submenu__item__title">{{ $menu_item->title }}</span>
                                                </a>
                                            </li>
                                            @foreach($menu_item->menu_item_children as $k => $child)
                                                <li class="products-submenu__item">

                                                    <div class="products-submenu__item__link products-submenu__item__link--{{
                                                    $child->product_resources['extended_menu_resources']['icon_type'] }} {{ $child->menu_item_children || $menu_item->has_product_children ? 'menu-item-has-children' : '' }}" data-product-resources-open="{{ $child->ID }}">
                                                            
                                                        <a href="{{ $child->url }}" target="{{ $child->target }}" class="products-submenu__item__title {{ $menu_item->has_product_children ? '' : 'products-submenu__item__title--primary'}}">{{ $child->title }}</a>
                                                        @if($child->menu_item_children || $menu_item->has_product_children)
                                                            <span data-product-resources-open="{{ $child->ID }}"
                                                                class="products-submenu__item__arrow  {{ $child->menu_item_children || $menu_item->has_product_children ? 'show-arrow' : '' }}">
                                                            </span>
                                                        @endif
                                                    </div>

                               @if(!$menu_item->product_page_id && $child->menu_item_children)
                                                        <ul class="product-submenu__items products-submenu__items--level2">
                                                            @foreach($child->menu_item_children as $childLevel2)
                                                                <li>
                                                                    <a class="products-submenu__item__link"
                                                                    href="{{ $childLevel2->url }}"
                                                                    target="{{ $childLevel2->target }}">
                                                                        <span class="products-submenu__item__title">{{ $childLevel2->title }}</span>
                                                                    </a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    @endif
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="products-submenu"
                                data-submenu="{{ $menu_item->ID }}">
                                <div class="products-submenu__wrapper">
                                    <div class="products-submenu__col--shadow">
                                        <ul class="products-submenu__items">
                                            <li class="products-submenu__item products-submenu__item--mobileBack">
                                                <a href="#" class="products-submenu__item__link products-submenu__item__link--mobileBack" data-menu-back="">
                                                    <span class="products-submenu__item__title">{{ $menu_item->title }}</span>
                                                </a>
                                            </li>
                                            @foreach($menu_item->menu_item_children as $k => $child)
                                                <li class="products-submenu__item">
                                                    <div class="products-submenu__item__link products-submenu__item__link--limited-width" data-product-resources-open="{{ $child->ID }}">
                                                           
                                                            
                                                        <a href="{{ $child->url }}" target="{{ $child->target }}" class="products-submenu__item__title">{{ $child->title }}</a>
                                                    </div>
                                                    <div class="products-submenu__col products-submenu__content-secondary">
                                                                <ul class="products-submenu__links">
                                                                    @foreach($child->menu_item_children as $link)
                                                                        <li>
                                                                            <a href="{{ $link->url }}"
                                                                            target="{{ $link->target }}"
                                                                            class="products-submenu__link">
                                                                                {{ $link->title }}
                                                                                
                                                                            </a>
                                                                        </li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endif
                </li>
            @endif
        @endif
    @endforeach
</ul>

<style>

/*    Menu navigation */
    @media only screen and (min-width: 992px){
       .products-submenu__col--shadow:before {
        display: none;
    }
    a.products-submenu__title__link {
        display: none;
    }
    a.products-submenu__item__title {
        font-size: 14px;
        font-weight: 600;
        color: #2492c3;
        border: none;
        padding: 11px 0;
    }
    a.products-submenu__item__title:hover {
        color: #024f71;
    }
    .products-submenu--minimal, .products-submenu .products-submenu__col--shadow {
        min-height: auto;
        padding: 19px 20px 9px;
        min-width: auto;
    }
    .products-submenu{
        width: auto;
    }
    .products-submenu__item__link:hover .products-submenu__item__title {
        color: #024f71;
        border-left-color: transparent;
        background-color: transparent;
    }
    a.products-submenu__link {
        font-size: 14px;
        font-weight: 400;
        color: #2b2b2b;
        line-height: 1;
        font-weight: 400;
        letter-spacing: normal;
        white-space: nowrap;
    }
    .products-submenu__content-secondary {
        width: 100%;
        padding-left: 11px;
    }
    .products-submenu__item__link.products-submenu__item__link--spektra {
        padding-bottom: 8px;
    }
    a.products-submenu__item__title {
        padding: 5.5px 0;
        border: none;
        line-height: 1;
        white-space: nowrap;
        }
    .products-submenu__items--level2 .products-submenu__item__link {
        padding-left: 11px;
        font-weight: 400;
        color: #2b2b2b;
        white-space: nowrap;
    }
    .products-submenu__col .products-submenu__item__title {
        font-size: 14px;
        padding: 0;
        border: none;
        line-height: 1.2;
        font-size: 14px;
        margin-bottom: 10px;
    }
    .products-submenu__item__link.products-submenu__item__link--ultima {
        padding-bottom: 8px;
    }
    .products-submenu__item__link.products-submenu__item__link--limited-width {
        /*padding-bottom: 8px;*/
    }
    .products-submenu__item__link:hover .products-submenu__item__title {
        color: #024f71 !important;
        text-decoration: none !important;
    }
    span.products-submenu__item__title {
        font-size: 14px;
        line-height: 18px;
        margin-bottom: 10px;
        padding: 0;
        border: none;
    }
    .primary-menu__nav-item {
        position: relative;
    }
    .products-submenu__item__link--mobileBack {
        white-space: nowrap;
    }
    }
    @media only screen and (max-width: 992px){
        .products-submenu__content-secondary {
            width: 100%;
                padding-bottom: 0;
        }
        .primary-menu__nav-link {
            height:auto !important;
        }
    }
.headerCta__content {
    justify-content: unset;
}
.primary-menu__nav-item:last-of-type .primary-menu__nav-link{
    color: black;
}
.newSection .ctaBlock__button.btn.btn-action {
    color: black;
}
    
</style>
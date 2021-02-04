<header class="banner header @if(is_single()) single @endif" data-sticky-element="header">
    @include('partials.header-cta', array('show_mobile' => false ))

    <div class="header__wrapper">
        <div class="container header__container">
            @include('partials.menu')
        </div>
        @include('partials.searchform')
    </div>
    @include('partials.productsMenu')
</header>
@include('partials.header-cta', array('show_mobile' => true ))

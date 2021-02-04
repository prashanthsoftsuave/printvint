<section class="section newSection"
         id="{{ $newProductFeature["section_id"] }}">
    <div class="productFeatures productFeatures--{{ $newProductFeature['type'] }}">
        <div class="productFeatures__container">
            @include('blocks.newSectionHeader', array('data' => $newProductFeature))
            @if ($newProductFeature['type'] != 'd20')
                @include('partials.content-product-feature')
            @else
                @include('partials.content-product-feature-simple')
            @endif
        </div>
    </div>
</section>

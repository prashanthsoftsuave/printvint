<div class="productFeatures__diagram--simple">
    <div class="productFeatures__image">
        <img src="{{ $newProductFeature['image_desktop']['url'] }}" alt="{{ $newProductFeature['image_desktop']['alt'] }}" class="productFeatures__diagram-img
                    productFeatures__diagram-img--desktop">
        <img src="{{ $newProductFeature['image_mobile']['url'] }}" alt="{{ $newProductFeature['image_mobile']['alt'] }}"
             class="productFeatures__diagram-img productFeatures__diagram-img--mobile">
    </div>
    <div class="productFeatures__elements">
        @foreach($newProductFeature['feature_list'] as $feature)
            <div class="productFeatures__item">
                {!! $feature['feature_text'] !!}
            </div>
        @endforeach
    </div>
</div>

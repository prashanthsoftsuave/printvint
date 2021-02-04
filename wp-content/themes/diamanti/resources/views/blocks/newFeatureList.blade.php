@if($newFeatureList)
    <section class="section newSection" id="{{ $newFeatureList['section_id'] }}">
        <div class="featureList featureList--{{ $newFeatureList['type'] }}">
            <div class="staticMesh"></div>
            <div class="featureList__container">
                @include('blocks.newSectionHeader', array('data' => $newFeatureList))
                <div class="featureList__list">
                    @foreach($newFeatureList['feature_list'] as $k => $item)
                        <div class="featureList__item">
                            <div class="featureList__content">
                                <img src="{{ $item['icon']['url'] }}" alt="{{ $item['icon']['alt'] }}" class="featureList__icon">
                                <h4 class="featureList__title">{!! $item['title'] !!}</h4>
                                <p class="featureList__text">{!! $item['caption'] !!}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endif

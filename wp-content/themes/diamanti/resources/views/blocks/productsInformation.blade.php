@if($productsInformation)
    @php($hash = uniqid())
    <section
        class="section newSection productsInformation productsInformation--{{ $productsInformation['background_type'] }}"
        style="z-index:{!! $productsInformation['z_index'] !!}"
    >
        @if($productsInformation["section_id"] == 'd20Section')
            <div class="staticMesh staticMesh--black"></div>
        @endif
        <div
            class="productsInformation__content"
            id="{{ $productsInformation["section_id"] }}"
        >
            <div class="productsInformation__header">
                @include('blocks.newSectionHeader', array('data' => $productsInformation))
                @if($productsInformation['button'])
                    <a
                        class="productsInformation__cta btn btn-action"
                        href="{!! $productsInformation['button']['url'] !!}"
                        target="{!! $productsInformation['button']['target'] !!}"
                    >
                        {{ $productsInformation['button']['title'] }}
                    </a>
                @endif
            </div>
            @if($productsInformation['cards'])
                <div class="cardsBlock__container">
                    <div class="cardsBlock__columns">
                        @foreach($productsInformation['cards'] as $card)
                            <div class="cardsBlock__column" data-eh="product-cards-{{ $hash }}">
                                <div class="cardsBlock__card">
                                    <img class="cardsBlock__card__icon productsInformation__cardIcon" src="{{ $card['icon']['url'] }}"
                                         alt="{{ $card['icon']['alt'] }}"/>
                                    <h4 class="cardsBlock__card__title">{!! $card['title'] !!}</h4>
                                    <div class="cardsBlock__card__description">{!! $card['caption'] !!}</div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </section>
@endif

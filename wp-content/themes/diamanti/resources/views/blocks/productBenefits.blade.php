@if($productBenefits)
    @php($hash = uniqid())
    <section class="productBenefitsSection productBenefitsSection--{{ $productBenefits['type'] }}"
             id="{{ $productBenefits["section_id"] }}">
        <div class="productBenefits">
            @include('blocks.newSectionHeader', array('data' => $productBenefits))
            <div class="productBenefits__cards">
                @foreach($productBenefits['benefit_list'] as $k => $card)
                    <div class="productBenefits__card" data-eh="benefits-cards-{{ $hash }}">
                        <img
                                class="productBenefits__card__image"
                                src="{{ $card['icon']['url'] }}"
                                alt="{{ $card['icon']['alt'] }}"
                        />
                        <h3 class="productBenefits__card__title">{!! $card['title'] !!}</h3>
                        <p class="productBenefits__card__description">{!! $card['caption'] !!}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endif





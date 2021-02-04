<section class="section newSection tabs_with_bg" id="ultimaKeyBenefitsSec">
    <div class="cardsBlock">
        <div class="cardsBlock__container text">
            <div class="section_tabs">
                <h3 class="benefit_title">Key Benefits</h3>
                <div class="benefit-container">
                    <div class="benefit-wrapper">
                        <div class="benefit-left">
                            <h3 class="benefit-h">Application Freedom Across Clouds</h3>
                            <p class="benefit-p">Deploy and migrate stateful applications and their volumes across
                                clusters</p>
                        </div>
                        <div class="benefit-right">
                            {{--                            <img src="/wp-content/uploads/2020/10/applic-freedom-diagram-1.svg" class="card_img">--}}
                            <img src="/wp-content/uploads/2020/10/applic-freedom-diagram-2.svg" class="card_img">
                        </div>
                    </div>
                    <div class="benefit-wrapper">
                        <div class="benefit-left">
                            <h3 class="benefit-h">High Performance</h3>
                            <p class="benefit-p">I/O optimized storage layer and NVMe storage deliver high IOPs at low
                                latency</p>
                        </div>
                        <div class="benefit-right">
                            {{--                            <img src="/wp-content/uploads/2020/10/supercharge-performance-diagram-1.svg"--}}
                            {{--                                 class="card_img">--}}
                            <img src="/wp-content/uploads/2020/10/supercharge-performance-diagram-2.svg"
                                 class="card_img">
                        </div>
                    </div>
                    <div class="benefit-wrapper">
                        <div class="benefit-left">
                            <h3 class="benefit-h">Fully Integrated, Turnkey Solution</h3>
                            <p class="benefit-p">Rapidly adopt and expand Kubernetes with an all-in-one solution that
                                has been tested and
                                validated.</p>
                        </div>
                        <div class="benefit-right">
                            {{--                            <img src="/wp-content/uploads/2020/10/turnkey-solution-diagram.svg"--}}
                            {{--                                 class="card_img">--}}
                            <img src="/wp-content/uploads/2020/10/turnkey-solution-diagram-4.svg"
                                 class="card_img">
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>


@if($productResources)
    @php($hash = uniqid())
    <section class="productResourcesSection productResources--{{ $productResources['type'] }}"
             id="{{ $productResources["section_id"] }}">
        @if($productResources['type'] != 'spektra-landing')
            <div class="staticMesh staticMesh--black staticMesh--resources"></div>
        @endif
        <div class="productResources">
            @include('blocks.newSectionHeader', array('data' => $productResources))
            <div class="productResources__cards">
                @foreach($productResources['resources'] as $k => $card)
                    <div class="productResources__card" data-eh="resources-cards-{{ $hash }}">
                        <img
                                class="productResources__card__image"
                                src="{{ $card['icon']['url'] }}"
                                alt="{{ $card['icon']['alt'] }}"
                        />
                        <h3 class="productResources__card__title">{!! $card['title'] !!}</h3>
                        <p class="productResources__card__description">{!! $card['caption'] !!}</p>
                        <a class=" {{ $card['webpage_resource'] ? 'productResources__card__link productResources__card__link--webpage' : 'btn-tertiary' }}"
                           href="{{ $card['resource_url'] }}" target="_blank">{{ $card['cta_text'] }}</a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endif

<style>
    #ultimaTabSec {
        display: none;
    }

    .page-id-13187 #ultimaTabSec {
        display: block;
    }

    #ultimaTabSec .card_body_img .card_img {
        padding: 20px;
        height: 360px;
        width: 100%;
    }

    #additionalResourcesSec .productResources__card__image {
        width: 212px;
        height: 102px;
    }

    #additionalResourcesSec a.productResources__card__link.productResources__card__link--webpage {
        background-image: none;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 11px 20px;
        color: #fff;
        font-size: 17px;
        font-weight: 600;
        line-height: 25px;
        background-color: #93d500;
        border: none;
        border-radius: 8px;
        position: relative;
        margin: 0;
        width: 180px;
        height: 40px;
    }

    #additionalResourcesSec .productResources__card {
        height: 318px;
        margin: 0;
        padding: 15px 0 25px 0;
    }

    #additionalResourcesSec .productResources__card__description {
        padding: 0 10px;
    }

    #additionalResourcesSec .productResources__card__title {
        margin-top: 10px;
    }
</style>
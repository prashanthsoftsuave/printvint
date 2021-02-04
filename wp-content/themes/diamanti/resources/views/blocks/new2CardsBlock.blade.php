@if($new2CardsBlock)
{{--    <section class="section newSection tabs_with_bg">--}}
{{--        <div class="cardsBlock">--}}
{{--            <div class="cardsBlock__container text">--}}
{{--                --}}{{--                @include('blocks.newSectionHeader', array('data' => $new2CardsBlock))--}}


{{--                <div class="section_tabs">--}}
{{--                    <h3 class="tabs_title">Rapidly adopt and expand Kubernetes on-premises and in the cloud</h3>--}}
{{--                    <div class="tabs_card hidden-xs">--}}
{{--                        <section class="card__tab__wrapper">--}}
{{--                            <div data-tab-id="tab-1" class="card__tab card__tab--active">--}}
{{--                                <h3 class="tabs_menu_title">Hybrid Cloud Kubernetes</h3>--}}
{{--                                <p class="tabs_sub_text">--}}
{{--                                    Centrally manage Kubernetes clusters across public clouds and on-premises--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                            <div data-tab-id="tab-2" class="card__tab">--}}
{{--                                <h3 class="tabs_menu_title">Application Freedom Across Clouds</h3>--}}
{{--                                <p class="tabs_sub_text">--}}
{{--                                    The most advanced Kubernetes platform for stateful applications--}}
{{--                                </p></div>--}}
{{--                            <div data-tab-id="tab-3" class="card__tab">--}}
{{--                                <h3 class="tabs_menu_title">Future-Proof for the Enterprise</h3>--}}
{{--                                <p class="tabs_sub_text">--}}
{{--                                    Solving tomorrow’s challenges so you can ship applications with confidence today--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                            <div data-tab-id="tab-4" class="card__tab">--}}
{{--                                <h3 class="tabs_menu_title">Supercharged Performance</h3>--}}
{{--                                <p class="tabs_sub_text">--}}
{{--                                    Get 30x greater performance on your data-intensive applications--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </section>--}}
{{--                        <section class="card__body">--}}
{{--                            <section class="card__section card__section--active" id="tab-1">--}}
{{--                                <div class="card_body_img">--}}
{{--                                    <img src="/wp-content/uploads/2020/10/hybrid-cloud-k-8-diagram.svg" class="card_img">--}}
{{--                                </div>--}}
{{--                                <div class="card_body_text">--}}
{{--                                    <p>Run your apps on any infrastructure, in any location, and manage them from a single control plane.--}}
{{--                                        Easily provision and administer Kubernetes clusters hosted in the data center, in the cloud,--}}
{{--                                        or at the edge with enterprise-grade security, high availability and resilience built in.</p>--}}
{{--                                </div>--}}
{{--                                <a class="tabsBlock__tab__button btn btn-action tabs_learmore" href="https://diamanti.com/whats-new/" target="">--}}
{{--                                    Learn More--}}
{{--                                </a>--}}
{{--                            </section>--}}
{{--                            <section class="card__section" id="tab-2">--}}
{{--                                <div class="card_body_img">--}}
{{--                                    <img src="/wp-content/uploads/2020/10/applic-freedom-diagram.svg" class="card_img">--}}
{{--                                </div>--}}
{{--                                <div class="card_body_text">--}}
{{--                                    <p>Gain the freedom to deploy and migrate your applications to any environment. Protect your applications and your data across availability zones, data centers, and geographic locations with the only Kubernetes-native platform with fully-integrated management and data planes.--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                                <a class="tabsBlock__tab__button btn btn-action tabs_learmore" href="https://diamanti.com/product/diamanti-ultima/" target="">--}}
{{--                                    Learn More--}}
{{--                                </a>--}}
{{--                            </section>--}}
{{--                            <section class="card__section" id="tab-3">--}}
{{--                                <div class="card_body_img">--}}
{{--                                    <img src="/wp-content/uploads/2020/10/future-proof-diagram.svg" class="card_img">--}}
{{--                                </div>--}}
{{--                                <div class="card_body_text">--}}
{{--                                    <p>Accelerate your digital transformation with turnkey solutions that are ready for the enterprise. Eliminate the complexity of integrating hardware and software components and get up and running with Kubernetes out-of-the-box. We’ve already addressed the infrastructure security and availability challenges so you can just bring the app.--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                                <a class="tabsBlock__tab__button btn btn-action tabs_learmore" href="https://diamanti.com/solutions/red-hat-openshift/" target="">--}}
{{--                                    Learn More--}}
{{--                                </a>--}}
{{--                            </section>--}}
{{--                            <section class="card__section" id="tab-4">--}}
{{--                                <div class="card_body_img">--}}
{{--                                    <img src="/wp-content/uploads/2020/10/supercharge-performance-diagram.svg" class="card_img">--}}
{{--                                </div>--}}
{{--                                <div class="card_body_text">--}}
{{--                                    <p>Supercharge your data-intensive applications on-premises with Diamanti’s patented acceleration technology. Greatly improve performance, reduce latency and significantly reduce costs to deliver financial benefits to your organization.--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                                <a class="tabsBlock__tab__button btn btn-action tabs_learmore" href="https://diamanti.com/problems-we-solve/io-performance" target="">--}}
{{--                                    Learn More--}}
{{--                                </a>--}}
{{--                            </section>--}}
{{--                        </section>--}}
{{--                    </div>--}}
{{--                    <div class="tabs_card_wrap_sm visible-sm">--}}
{{--                        <div class="tabs_card_sm">--}}
{{--                            <h3 class="tabs_sm_title">Hybrid Cloud Kubernetes</h3>--}}
{{--                            <p class="tabs_sm_text">Centrally manage Kubernetes clusters across public clouds and on-premises</p>--}}
{{--                            <a href="">Learn More <img src="/wp-content/uploads/2020/10/mobile-nav-copy-5.svg"> </a>--}}
{{--                        </div>--}}
{{--                        <div class="tabs_card_sm">--}}
{{--                            <h3 class="tabs_sm_title">Application Freedom Across Clouds</h3>--}}
{{--                            <p class="tabs_sm_text">The most advanced Kubernetes platform for stateful applications</p>--}}
{{--                            <a href="">Learn More <img src="/wp-content/uploads/2020/10/mobile-nav-copy-5.svg"> </a>--}}
{{--                        </div>--}}
{{--                        <div class="tabs_card_sm">--}}
{{--                            <h3 class="tabs_sm_title">Future-Proof for the Enterprise</h3>--}}
{{--                            <p class="tabs_sm_text">Solving tomorrow’s challenges so you can ship applications with confidence today</p>--}}
{{--                            <a href="">Learn More <img src="/wp-content/uploads/2020/10/mobile-nav-copy-5.svg"> </a>--}}
{{--                        </div>--}}
{{--                        <div class="tabs_card_sm">--}}
{{--                            <h3 class="tabs_sm_title">Supercharged Performance</h3>--}}
{{--                            <p class="tabs_sm_text">Get 30x greater performance on your data-intensive applications</p>--}}
{{--                            <a href="">Learn More <img src="/wp-content/uploads/2020/10/mobile-nav-copy-5.svg"> </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

                {{--<div class="cardsBlock__columns">
                    @foreach($new2CardsBlock['cards'] as $card)
                        <div class="cardsBlock__column">
                            <div class="cardsBlock__card">
                                <img class="cardsBlock__card__icon" src="{{ $card['icon']['url'] }}"
                                     alt="{{ $card['icon']['alt'] }}"/>
                                <h4 class="cardsBlock__card__title">{!! $card['title'] !!}</h4>
                                <div class="cardsBlock__card__description">{!! $card['description'] !!}</div>
                            </div>
                        </div>
                    @endforeach
                </div>--}}
            </div>
        </div>
    </section>
@else
    <p class="alert-danger text-center m-5">There are no sections to display</p>
@endif
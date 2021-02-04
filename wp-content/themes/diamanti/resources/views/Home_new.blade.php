{{--
   Template Name: Home New
   Template Post Type: page, resource
--}}
@extends('layouts.app')

@section('content')

<div class="why-hero">
    <div class="custom_container">
        <div class="why-hero-content">
            <h1 class="why-hero-title">why diamanti?<br>
                this is your green light.</h1>
            <h1 class="why-hero-text">Rapidly adopt and expand Kubernetes on-premises and in the cloud.</h1>
            <div class="why-hero-buttons">
                <a href="https://diamanti.com/contact/" class="why-hero-btn btn btn-action contact-btn">Contact Us</a>
                <a href="https://diamanti.com/demo/" class="why-hero-btn btn btn-outline req-demo-btn">Request Demo</a>
            </div>
        </div>
    </div>
</div>


<section class="section newSection tabs_with_bg">
        <div class="cardsBlock">
            <div class="cardsBlock__container text">
                {{--                @include('blocks.newSectionHeader', array('data' => $new2CardsBlock))--}}


                <div class="section_tabs">
                    <h3 class="tabs_title">Rapidly adopt and expand Kubernetes on-premises and in the cloud</h3>
                    <div class="tabs_card hidden-xs">
                        <section class="card__tab__wrapper">
                            <div data-tab-id="tab-1" class="card__tab card__tab--active">
                                <h3 class="tabs_menu_title">Hybrid Cloud Kubernetes</h3>
                                <p class="tabs_sub_text">
                                    Centrally manage Kubernetes clusters across public clouds and on-premises
                                </p>
                            </div>
                            <div data-tab-id="tab-2" class="card__tab">
                                <h3 class="tabs_menu_title">Application Freedom Across Clouds</h3>
                                <p class="tabs_sub_text">
                                    The most advanced Kubernetes platform for stateful applications
                                </p></div>
                            <div data-tab-id="tab-3" class="card__tab">
                                <h3 class="tabs_menu_title">Future-Proof for the Enterprise</h3>
                                <p class="tabs_sub_text">
                                    Solving tomorrow’s challenges so you can ship applications with confidence today
                                </p>
                            </div>
                            <div data-tab-id="tab-4" class="card__tab">
                                <h3 class="tabs_menu_title">Supercharged Performance</h3>
                                <p class="tabs_sub_text">
                                    Get 30x greater performance on your data-intensive applications
                                </p>
                            </div>
                        </section>
                        <section class="card__body">
                            <section class="card__section card__section--active" id="tab-1">
                                <div class="card_body_img">
                                    <img src="/wp-content/uploads/2020/10/hybrid-cloud-k-8-diagram.svg" class="card_img">
                                </div>
                                <div class="card_body_text">
                                    <p>Run your apps on any infrastructure, in any location, and manage them from a single control plane.
                                        Easily provision and administer Kubernetes clusters hosted in the data center, in the cloud,
                                        or at the edge with enterprise-grade security, high availability and resilience built in.</p>
                                </div>
                                <a class="tabsBlock__tab__button btn btn-action tabs_learmore" href="https://diamanti.com/whats-new/" target="">
                                    Learn More
                                </a>
                            </section>
                            <section class="card__section" id="tab-2">
                                <div class="card_body_img">
                                    <img src="/wp-content/uploads/2020/10/applic-freedom-diagram.svg" class="card_img">
                                </div>
                                <div class="card_body_text">
                                    <p>Gain the freedom to deploy and migrate your applications to any environment. Protect your applications and your data across availability zones, data centers, and geographic locations with the only Kubernetes-native platform with fully-integrated management and data planes.
                                    </p>
                                </div>
                                <a class="tabsBlock__tab__button btn btn-action tabs_learmore" href="https://diamanti.com/product/diamanti-ultima/" target="">
                                    Learn More
                                </a>
                            </section>
                            <section class="card__section" id="tab-3">
                                <div class="card_body_img">
                                    <img src="/wp-content/uploads/2020/10/future-proof-diagram.svg" class="card_img">
                                </div>
                                <div class="card_body_text">
                                    <p>Accelerate your digital transformation with turnkey solutions that are ready for the enterprise. Eliminate the complexity of integrating hardware and software components and get up and running with Kubernetes out-of-the-box. We’ve already addressed the infrastructure security and availability challenges so you can just bring the app.
                                    </p>
                                </div>
                                <a class="tabsBlock__tab__button btn btn-action tabs_learmore" href="https://diamanti.com/solutions/red-hat-openshift/" target="">
                                    Learn More
                                </a>
                            </section>
                            <section class="card__section" id="tab-4">
                                <div class="card_body_img">
                                    <img src="/wp-content/uploads/2020/10/Supercharge-Performance-Diagram.svg" class="card_img">
                                </div>
                                <div class="card_body_text">
                                    <p>Supercharge your data-intensive applications on-premises with Diamanti’s patented acceleration technology. Greatly improve performance, reduce latency and significantly reduce costs to deliver financial benefits to your organization.
                                    </p>
                                </div>
                                <a class="tabsBlock__tab__button btn btn-action tabs_learmore" href="https://diamanti.com/problems-we-solve/io-performance" target="">
                                    Learn More
                                </a>
                            </section>
                        </section>
                    </div>
                    <div class="tabs_card_wrap_sm visible-sm">
                        <div class="tabs_card_sm">
                            <h3 class="tabs_sm_title">Hybrid Cloud Kubernetes</h3>
                            <p class="tabs_sm_text">Centrally manage Kubernetes clusters across public clouds and on-premises</p>
                            <a href="">Learn More <img src="/wp-content/uploads/2020/10/mobile-nav-copy.png"> </a>
                        </div>
                        <div class="tabs_card_sm">
                            <h3 class="tabs_sm_title">Application Freedom Across Clouds</h3>
                            <p class="tabs_sm_text">The most advanced Kubernetes platform for stateful applications</p>
                            <a href="">Learn More <img src="/wp-content/uploads/2020/10/mobile-nav-copy.png"> </a>
                        </div>
                        <div class="tabs_card_sm">
                            <h3 class="tabs_sm_title">Future-Proof for the Enterprise</h3>
                            <p class="tabs_sm_text">Solving tomorrow’s challenges so you can ship applications with confidence today</p>
                            <a href="">Learn More <img src="/wp-content/uploads/2020/10/mobile-nav-copy.png"> </a>
                        </div>
                        <div class="tabs_card_sm">
                            <h3 class="tabs_sm_title">Supercharged Performance</h3>
                            <p class="tabs_sm_text">Get 30x greater performance on your data-intensive applications</p>
                            <a href="">Learn More <img src="/wp-content/uploads/2020/10/mobile-nav-copy.png"> </a>
                        </div>
                    </div>
                </div>


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



<script>
    const cardClassName = "card";
    const tabDataAttributeName = "data-tab-id";

    const tabClassName = `${cardClassName}__tab`;
    const tabSectionClassName = `${cardClassName}__section`;
    const tabSectionsContainerClassName = `${cardClassName}__body`;

    const tabSectionsContainerSelector = `.${tabSectionsContainerClassName}`;

    const tabSelector = `.${tabClassName}[${tabDataAttributeName}]`;
    const tabSectionSelector = `.${tabSectionClassName}`;

    const activeTabClassName = `${tabClassName}--active`;
    const activeSectionClassName = `${tabSectionClassName}--active`;

    const tabs = document.querySelectorAll(tabSelector);
    const tabsSections = document.querySelector(tabSectionSelector);
    const tabSectionsContainer = document.querySelector(
        tabSectionsContainerSelector
    );

    const setTabInactive = (tab) => tab && tab.classList.remove(activeTabClassName);
    const setTabActive = (tab) => tab && tab.classList.add(activeTabClassName);

    const setSectionInactive = (section) =>
        section && section.classList.remove(activeSectionClassName);
    const setSectionActive = (sectionId) => {
        const currentSection = document.querySelector(
            `${tabSectionSelector}#${sectionId}`
        );

        if (currentSection) {
            changeSectionsContainerHeight(currentSection);
            currentSection.classList.add(activeSectionClassName);
        }
    };

    const getCurrentlyActiveTab = () =>
        document.querySelector(`.${activeTabClassName}`);
    const getCurrentlyActiveSection = () =>
        document.querySelector(`.${activeSectionClassName}`);

    const getSectionHeight = (section) =>
        section && section.getBoundingClientRect().height;
    const changeSectionsContainerHeight = (section) =>
        (tabSectionsContainer.style.height = `${getSectionHeight(section)}px`);

    const changeTab = (tab) => {
        const tabSectionId = tab.getAttribute(tabDataAttributeName);

        if (tabSectionId) {
            setTabInactive(getCurrentlyActiveTab());
            setSectionInactive(getCurrentlyActiveSection());
            setTabActive(tab);
            setSectionActive(tabSectionId);
        }
    };

    const updateSectionsContainerHeight = () => {
        const currentlyActiveSection = getCurrentlyActiveSection();
        currentlyActiveSection &&
        changeSectionsContainerHeight(currentlyActiveSection);
    };

    (() => {
        changeTab(getCurrentlyActiveTab());

        tabs.forEach((tab) => {
            tab.addEventListener("click", () => changeTab(tab));
        });

        window.addEventListener("resize", () => updateSectionsContainerHeight());
    })();
	
	 jQuery(document).ready(function(){
        jQuery(".tabs_card .card__body").css("height", "650px");
    });
	
</script>

<style>
    .btn.btn-outline:hover {
        color: #fff;
        background-color: #6ac613;
        border-color: #6ac613;
    }
    .interactiveMesh {
        top: -70px;
    }
    .tabs_card{
        display: flex;
        flex-flow: row;
        align-items: flex-start;
        padding: 0;
    }
    .card__tab__wrapper {
        display: flex;
        flex-flow: column;
        padding: 0.8em 1.2em;
        width: 55%;
    }
    .card__tab {
        display: inline-block;
        background-color: transparent;
        border-radius: 0 10px 10px 0;
        font-size: 1.5rem;
        color: #fff;
        text-align: center;
        text-decoration: none;
        user-select: none;
        transition: all 150ms ease;
        width: 100%;
        position: relative;
        padding: 15px;
    }
    .card__section {
        visibility: hidden;
        opacity: 0;
    }
    .card__section.card__section--active {
        visibility: visible;
        opacity: 1;
    }
    @media screen and (max-width: 600px) {
        .card__tab {
            font-size: 1.25rem;
            padding: 0.35em 0.75em;
        }
    }
    .card__tab:hover {
        cursor: pointer;
    }
    .card__tab:not(.card__tab--active):hover {
        background-color: rgb(2 81 116 / 30%);
    }
    .card__tab--active {
        color: #ffffff;
        background-color: rgb(2 81 116 / 30%);
    }
    .card__body {
        position: relative;
        font-size: 1.25rem;
        background-color: transparent;
        padding: 0.8em 0;
        border-radius: 0.5rem;
        border-top-left-radius: 0;
        line-height: 140%;
        overflow: hidden;
        transition: all 350ms ease;
        width: 80%;
    }
    @media screen and (max-width: 600px) {
        .card__body {
            font-size: 1.15rem;
        }
    }
    .card__section {
        position: absolute;
        top: 0;
        left: 0;
        padding: inherit;
        transition: all 150ms 350ms ease-in-out;
    }
    .card__section:not(.card__section--active) {
        opacity: 0;
        transition: all 150ms ease-out;
    }
    .tabs_menu_title{
        font-size: 18px;
        font-weight: bold;
        text-align: left;
    }
    .tabs_sub_text{
        font-size: 14px;
        font-weight: 600;
        text-align: left;
        margin-bottom: 0;
    }
    section.card__tab__wrapper:after {
        position: absolute;
        height: calc(100% - 25px);
        content: "";
        width: 4px;
        background-color: #f1f1f1;
        opacity: 0.45;
        left: 15px;
    }
    .card_body_img {
        text-align: center;
        background-color: #f7f7f9;
        border-radius: 10px 10px 0 0;
        max-height: 363px;
        overflow: hidden;
    }
    .card_body_img .card_img {
        padding: 0;
        height: 100%;
        width: auto;
    }
    .card__section#tab-4 .card_body_img img {
        margin-bottom: 55px;
    }
    .card_body_text {
        background-color: rgb(2 81 116 / 30%);
        padding: 21px;
        border-radius: 0 0 10px 10px;
    }
    .card_body_text p{
        color: #fff;
        font-size: 14px;
        margin: 0;
    }
    .card__tab--active .tabs_title{
        color: #93d500;
    }
    .card__tab__wrapper .card__tab.card__tab--active:after {
        content: "";
        position: absolute;
        width: 6px;
        height: 100%;
        background-color: #93d500;
        top: 0;
        left: -5px;
        z-index: 1;
        border-radius: 10px;
    }
    .tabs_title {
        text-align: center;
        color: #fff;
        font-weight: bold;
        font-size: 18px;
        padding: 45px 0;
        text-transform: uppercase;
    }
    .tabs_with_bg .cardsBlock:before {
        content: '';
        position: absolute;
        left: 50%;
        bottom: 0;
        width: 100%;
        -webkit-transform: translateX(-50%);
        -o-transform: translateX(-50%);
        transform: translateX(-50%);
        z-index: -1;
        top: 0;
        min-width: 3000px;
        background-image: url(/wp-content/uploads/2020/10/blue-shaped-background-no-grid.svg);
        background-size: 100% 100%;
    }
    .tabs_with_bg .section_tabs{
        padding: 100px 0;
    }
    .tabs_learmore,.btn_learnmore {
        margin-top: 20px;
    }
    a.tabsBlock__tab__button.btn.btn-action.tabs_learmore {
    padding: 13px 45px;
    margin-top: 40px;
    }

    /*logos section*/

    .logo_list_title {
        color: #fff;
        text-align: center;
        font-size: 18px;
        font-weight: bold;
        text-transform: uppercase;
    }
    .logoList{
        padding: 90px 0 0px;
    }

    /*Partnering card section*/

    .partnering_title{
        color: #93d500;
        font-size: 18px;
        font-weight: bold;
        text-transform: uppercase;
        text-align: center;
        margin: 0;
    }
    .partnering_card_wrapper {
        display: flex;
        padding-top: 80px;
        justify-content: center;
        justify-content: center;
    }
    .partner_card {
        background-color: #fff;
        padding: 13px 13px 23px;
        margin: 0 25px;
        text-align: center;
        border-radius: 4px;
        width: 240px
    }
    .partner_card_logo {
        min-height: 102px;
        background-image: url("/wp-content/uploads/2020/10/partner-card-image.png");
        background-size: cover;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 5px;
    }
    .card_light_bg{
        background-image: url("/wp-content/uploads/2020/09/partner-card-image-light");
    }
    .partner_card_title {
        font-size: 15px;
        text-align: center;
        font-weight: 600;
    }
    .partner_card_text {
        font-size: 14px;
        text-align: center;
        padding-top: 15px;
    }
    .partner_card_content {
        padding: 25px 0;
    }
    .partner_card_logo img {
        padding: 0 10px;
    }
    .card_light_bg img {
        padding: 0;
        width: 100%;
        object-fit: cover;
        object-position: center;
            max-height: 102px;
        border-radius: 5px;
    }
    .partner_cards_section .cardsBlock__container .partnering_card_wrapper .partner_card .learnmore_btn {
        color: #fff;
        font-size: 18px;
        font-weight: 600;
        line-height: 25px;
        background-color: #93d500;
        border: none;
        border-radius: 8px;
    }
    .partner_cards_section{
        position: relative;
        z-index: 4;
        background-color: #2b2b2b;
        padding: 10px 0 80px;
        /*box-shadow: 0 5px 20px 0 rgba(0, 0, 0, 0.29);*/
    }

    /*Journey blgo card*/
    .journey-card{
        position: relative;
        z-index: 4;
    }
    .journey_card_left{
        display: flex;
        flex-flow: column;
    }
    .journey_card {
        background-color: #fff;
        /*box-shadow: 0 0 4px 0 rgba(0, 0, 0, 0.23);*/
        border-radius: 6px;
        padding: 15px;
        margin-bottom: 30px;
        text-align: center;
        max-width: 378px;
        margin-bottom: 24px;
    }
    .journey_card_wrap {
        display: flex;
        justify-content: center;
        padding-top: 50px;
    }
    .journey_card_small {
        display: flex;
    }
    .journey_card_small .blog-img {
        max-width: 133px;
        width: 133px;
        height: 116px;
    }
    .journey_card_left {
        display: flex;
        flex-flow: column;
        padding: 0px 25px;
    }
    .journey_card_right {
        display: flex;
        flex-flow: column;
        padding: 0px;
    }
    .small_card_content {
        padding: 0 0 0 15px;
        text-align: left;
    }
    .journey_card .blog-title {
        font-size: 17px;
        font-weight: 600;
        margin-top: 9px;
        margin-bottom: 30px;
    }
    .journey-card-right .journey_card.journey_card_small img.card-img {
        width: 133px;
        height: 183px;
    }
    .journey_card_left .journey_card_small {
        height: 184px;
    }
    .big_card_content {
        padding-top: 25px;
    }
    .journey_card_section {
        position: relative;
        z-index: 4;
        padding-top: 120px;
        text-align: center;
        background-color: #f7f7f8;
    }
    .journey_card_title{
        color: #024f71;
        font-size: 18px;
        font-weight: bold;
        text-transform: uppercase;
        margin: 0;
    }
    .journey_card img.card-img  {
        width: 100%;
    }
    .journey_card .blog_txt {
        font-size: 14px;
        padding-top: 0;

    }
    .journey_card_left .journey_card.journey_card_big {
        height: 408px;
    }
    .section.newSection .quoteBlock {
        padding: 70px 0 202px;
        font-size: 36px;
    }
    .hero_product_diagarm{
        min-height: 300px;
        background-image: url("https://staging.diamanti.com/wp-content/uploads/2020/10/Homepage-Hero-1.svg");
        background-size: contain;
        background-repeat: no-repeat;
        background-position: center;
        margin-top: 46px;
    }
    .featured_hero_div {
        max-width: 540px;
        width: 100%;
        background-color: #fff;
        padding: 20px;
        border-radius: 6px;
        margin: 79px 0 0 52px;
    }
    .featured_top_content {
        display: flex;
       justify-content: space-between;
    }
    .featured_top_left {
        display: flex;
    }
    .featured_bottom_content {
        padding-top: 15px;
    }
    .featured-center h3 {
        color: #93d500;
        font-size: 14px;
		font-weight: bold;
		text-transform: uppercase;
        margin-bottom: 15px;
        padding-bottom: 0;
    }
    .featured-center p {
        font-size: 20px;
        font-weight: 600 !important;
        color: #2b2b2b;
        line-height: 19px;
    }
    .featured-center{
        padding: 0 15px;
    }
    .featured_bottom_content p {
        color: #2b2b2b;
        font-size: 14px;
        margin: 0;
    }
    .featured_hero_div {
        padding: 20px;
        margin: 79px 0 0 52px;
    }
    .featured_bottom_content img {
        padding-top: 15px;
    }
    .visible-sm {
        display: none !important;
    }
    .visible-sm-fl {
        display: none !important;
    }
    .tabs_sm_title {
        color: #fff;
    }
    .tabs_sm_title {
        color: #fff;
        font-size: 18px;
        font-weight: 700;
        text-align: center;
    }
    .tabs_sm_text {
        color: #fff;
        font-size: 14px;
        text-align: center;
        text-align: center;
        padding: 0 40px;
        margin-bottom: 9px;
    }
    .tabs_card_sm a {
        color: #fff !important;
        text-decoration: none !important;
    }
    .tabs_card_sm {
        text-align: center;
        margin: 10px 0 40px;
    }

    .productDiagram__container{
        display: flex;
        align-items: center;
    }
    .newHero__caption,.newHero__button{
        font-family: "Open Sans", Arial, sans-serif !important;
    }
    .newHero__title{
        font-size: 70px;
        line-height: 72px;
        margin-bottom: 25px;
        word-break: break-word;
            letter-spacing: normal;
    }
    .newHero .newHero__button {
        margin-top: 65px;
        margin-bottom: 0px;
    }
	.quoteBlock__quote blockquote{
		font-size: 36px !important;
        margin-bottom: 55px;
        line-height: 55px;
	}
    .quoteBlock__quote .quoteBlock__logo {
        margin-top: 55px;
    }
	.author_name{
		font-size: 18px;
		font-weight: 600 !important;
	}
	.newHero{
		padding-top: 0 !important;
	}
	.quoteBlock::before{
		background-image: url(https://staging.diamanti.com/wp-content/uploads/2020/09/white-poly-bg.svg) !important;
	}

	.card__tab--active .tabs_menu_title {
    color: #93d501;
	}
	.btn {
    border-radius: 12px;
	}
	.tabs_with_bg .section_tabs .tabs_title {
		padding-top: 151px;
	}
	.logoList{
		    padding: 50px 0 0px;
	}
    .section.newSection.tabs_with_bg {
    position: relative;
    z-index: 1;
    }
    .productDiagram {
        width: 382px;
        height: auto;
    }
    .newHero__columns.newHero__columns--left{
            margin-top: 70px;
    }
    .logoList__column {
        padding: 0 25px 60px;
    }
    .partner_card:first-child .partner_card_logo img {
        padding: 0 10px;
        width: 160px;
    }
    .btn.btn-action.contact-Sales:hover {
        background-color: #6ac613 !important;
        color: #f7f7f9 !important;
    }
    @media only screen and (max-width: 640px){
        .productDiagram {
            width: 100%;
            height: auto;
        }
        .featured_hero_div{
            margin: 0;
            margin-top: 42px;
            padding: 20px 10px;
        }
        .featured-left img {
            display: none;
        }
        .featured-right {
            display: none;
        }
        .featured-center {
            padding: 0 15px;
            text-align: center;
        }
        .featured_bottom_content {
            text-align: center;
        }
        .visible-sm{
            display: inline-block !important;
        }
        .visible-sm-fl {
            display: flex !important;
        }
        .hidden-xs{
            display: none !important;
        }
        .tabs_with_bg .section_tabs {
            padding: 0 0 100px 0;
        }
        a.newHero__button.btn.btn-action {
            margin-bottom: 20px;
            margin-top: 37px;
        }
        /*partnering card style*/
        .partnering_card_wrapper {
            display: flex;
            padding-top: 10px;
            flex-flow: column;
        }
        .partner_card {
            max-width: 250px;
            margin: 15px auto 17px !important;
        }
        /* Journey card style*/
        .journey_card_wrap {
            flex-flow: column;
            align-items: center;
            padding-top: 41px;
        }
        .journey_card_left {
            display: flex;
            flex-flow: column;
            padding: 0;
        }
        .journey_card.journey_card_small.visible-sm-fl img.card-img {
            width: 133px;
            height: 183px;
        }
        .journey_card_left .journey_card_small.visible-sm-fl {
            height: 212px;
        }
        .quoteBlock{
            background-color: #f7f7f9;
        }
        .featured-center h3 {
            color: #93d500;
            font-size: 14px;
            font-weight: 900;
            text-transform: uppercase;
        }
            .section.newSection .quoteBlock {
                padding: 70px 0 69px;
                font-size: 36px;
            }
            .quoteBlock__quote blockquote {
                margin-bottom: 35px;
                font-size: 32px !important;
                letter-spacing: normal;
                line-height: normal;
            }
            
            .newHero__title {
                font-size: 63px;
                max-width: 100%;
                line-height: 68px;
            }
            .newHero__container {
                padding-top: 20px;
            }
            .tabs_sm_title {
                font-size: 14px;
                padding: 0 40px;
            }
            .logo_list_title {
                padding: 0 30px;
            }
            .partnering_title {
                padding: 0 40px 14px;
            }
            .journey_card_title {
                padding: 0 10px;
            }
            .newHero__columns.newHero__columns--left{
               margin-top: 10px;
            }
            .The-best-platform-fo {
                word-break: break-word;
                width: 100% !important;
                display: inline-block;
            }
            .tabs_with_bg .cardsBlock:before{
                background-size: 126% 100%;
                background-position: center;
                background-image: url(/wp-content/uploads/2020/10/blue-shaped-background-sm-1.svg);
            }
            .tabs_with_bg .section_tabs .tabs_title {
                padding: 100px 54px 33px 54px;
            }

            .partner_cards_section{
                    background-image: url(https://staging.diamanti.com/wp-content/uploads/2020/10/black-shaped-background-sm.svg);
                    background-position: bottom;
                    padding-bottom: 100px;
                    background-repeat: no-repeat;
                    background-size: cover;
                    background-color: #f7f7f8;
            }
            .journey_card_section {
                padding-top: 20px;
            }
            .journey_card {
                padding: 16px 16px 20px;
            }
            .big_card_content {
                padding-top: 29px;
            }
            .journey_card .blog-title {
                margin-top: 0;
                margin-bottom: 24px;
            }
            .journey_card .blog_txt {
                margin-bottom: 29px;
            }
            .quoteBlock__quote .quoteBlock__logo {
                margin-top: 40px;
            }
    }
    
    
    
    .Rectangle-Copy-3{
        height: 380px;
    }
    .journey_card:hover{
        box-shadow: 0 0 4px 0 rgba(0, 0, 0, 0.23)
    }
    .Homepage-Hero {
        width: 382px;
        height: 364px;
        object-fit: contain;
    }
    .The-best-platform-fo {
        width: 459px;
        height: 21px;
        font-family: OpenSans;
        font-size: 16px !important;
        font-weight: normal;
        font-stretch: normal;
        font-style: normal;
        line-height: normal;
        letter-spacing: normal;
        color: #ffffff;
    }
    .contact-Sales {
        background: #ffffff !important;
        font-family: OpenSans;
        font-size: 18px;
        font-weight: 600;
        font-stretch: normal;
        font-style: normal;
        line-height: normal;
        letter-spacing: normal;
        text-align: center;
        color: #87c204 !important;
    }
    @media (min-width:980px){
        .contact-Sales{
            margin-left: 25px;
        }}

    @media (max-width:980px){
        .contact-Sales{
        margin-top:auto !important;
    }}
</style>




<style>
     /* my styles */
    .why-hero-buttons .contact-btn {
        background-color: #93d500;
        width: 150px;
        height: 48px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        border-radius: 5px;
    }

    .why-hero-buttons .req-demo-btn {}

    .stat-section {
        padding: 86px 0 99px;
    }

    .stat-row.stat-row-left:before {
        content: "";
        position: absolute;
        height: 183px;
        opacity: 0.19;
        background-image: linear-gradient(to right, #2492c3, rgba(36, 146, 195, 0) 92%);
        width: 669px;
        top: 0;
        bottom: 0;
        margin: auto;
        left: 0;
    }
    .stat-row.stat-row-right:before {
        content: "";
        position: absolute;
        height: 220px;
        opacity: 0.19;
        background-image: linear-gradient(to right, #2492c3, rgba(36, 146, 195, 0) 92%);
        width: 590px;
        top: 0;
        bottom: 0;
        margin: auto;
        right: 0;
        transform: scaleX(-1);
        z-index: 0;
    }
    .stat-row.stat-row-right .stat-content {
        justify-content: flex-end;
    }


    .stat-img-left {
        display: flex;
        justify-content: flex-end;
    }

     .bg-stat {
        height: 183px;
        opacity: 0.19;
        background-image: linear-gradient(to right, #2492c3, rgba(36, 146, 195, 0) 92%);
        width: 100%;
    }

    .stat-content-right {
        display: flex;
        align-items: center;
        padding-left: 0px;
        font-size: 20px;
        color: #2b2b2b;
        line-height: 1.2;
    }

    .stat-img-right {
        display: flex;
        justify-content: left;
    }

    .stat-content-left {
        display: flex;
        align-items: center;
        justify-content: flex-end;
        padding-right: 26px;
        font-size: 20px;
        color: #2b2b2b;
        line-height: 1.2;
    }

    .stat-img-right .bg-stat {
        display: block;
        height: 220px;
        opacity: 0.19;
        background-image: linear-gradient(to right, rgba(36, 146, 195, 0), #2492c3 92%);
        width: 100%;
        position: absolute;
    }
    .stat-row.stat-row-left .stat-content-left {
        padding-right: 32px;
    }
    .stat-row.stat-row-left .stat-content-left img{
        max-width: 526px;
    }
    .stat-row.stat-row-right .stat-content-right img {
        max-width: 460px;
    }
    .discover-card-wrap{
        display: flex;
        justify-content: center;
        padding-bottom: 200px;
        
    }
    .discover-section {
        padding: 78px 0;
        background-image: url(/wp-content/uploads/2020/10/white_background_right_sm-01.svg);
        background-position: bottom;
        background-size: cover;
        position: relative;
        z-index: 30;
        background-color: #2b2b2b;
        background-repeat: no-repeat;
    }
    .discover-card{
        width: 220px;
        border-radius: 4px;
        box-shadow: 0 0 8px 0 rgba(2, 79, 113, 0.5);
        background-color: #ffffff;
        width: 220px;
        margin: 0 10.5px;
        text-align: center;
        padding: 30px 0 22px;
    }
    .discover-title{
        font-size: 35px;
        font-weight: 600;
        line-height: 42px;
        letter-spacing: normal;
        text-align: center;
        color: #024f71;
        padding-bottom: 74px;
    }
    .discover-card-title {
        font-size: 24px;
        font-weight: 600;
        padding: 0 10px 24px;
        margin: 0;
        letter-spacing: normal;
    }
    .discover-text {
        font-size: 14px;
        line-height: 22px;
        color: #2b2b2b;
        padding: 0 8px 21px;
    }
    .discover-card-link{
        font-size: 14px;
        font-weight: bold;
        text-align: center;
        color: #93d500;
        text-decoration: underline !important;
    }

    .drive-results-section{
        padding: 64px 0;
            background-image: url(/wp-content/uploads/2020/10/background-blue-.svg);
        background-size: cover;
        background-position: bottom left;
        padding-bottom: 170px;
        padding-top: 65px;
    }
    .drive-results-title{
        padding-bottom: 94px;
        line-height: 42px;
        font-size: 35px;
        margin: 0;
        letter-spacing: 0;
        text-align: center;
        color: #fff;
        font-weight: 600;
    }
    .drive-results-card-wrap {
        display: flex;
        justify-content: center;
        padding-bottom: 120px;
    }
        .drive-results-card {
        background-color: #fff;
        width: 240px;
        border-radius: 4px;
        box-shadow: 0 0 16px 0 rgba(2, 79, 113, 0.58);
        background-color: #ffffff;
        margin: 0 25px;
        padding: 22px 10px 16px;
            text-align: center;
    }
    .drive-logo-img {
        display: flex;
        justify-content: center;
        padding-bottom: 20px;
        align-items: center;
        height: 35px;
        line-height: 1.27;
        letter-spacing: normal;
        text-align: center;
        color: #2b2b2b;
    }
    .drive-card-title {
        font-size: 22px;
        font-weight: 600;
        text-align: center;
        padding-top: 27px;
        min-height: 105px;
    }
    p.drive-card-text {
        text-align: center;
        font-size: 14px;
        line-height: 1.57;
        letter-spacing: normal;
        text-align: center;
        color: #2b2b2b;
        margin: 0;
        padding-top: 5px;
        padding-bottom: 17px;
        height: 106px;
    }
    .drive-card-link {
        font-size: 14px;
        font-weight: bold;
        text-align: center;
        color: #93d500;
        text-decoration: underline !important;
    }
    
    .less-than-section{
        height: 350px;
        object-fit: contain;
        background-image: url(/wp-content/uploads/2020/10/less-than-100-microsecond.png);
    }
    
    .stat-content {
        display: flex;
    }
    .stat-row{
        position: relative;
    }
    .stat-text{
          font-size: 20px;
              font-weight: 600 !important;
          line-height: 1.2;
          letter-spacing: normal;
          color: #2b2b2b;
        margin: 0;
    }
    .stat-row.stat-row-right .stat-text {
    text-align: right;
}
    .stat-row.stat-row-left {
        margin-bottom: 65px;
    }

    .custom_container {
        max-width: 970px;
        margin: auto;
    }

    .apps_deserve_d_title {
        color: #024f71;
        font-weight: 600;
        font-size: 35px;
        text-align: center;
        padding-bottom: 59px;
        letter-spacing: normal;
        margin: 0;
        line-height: 42px;
    }

    .italic {
        font-style: italic;
    }

    .apps_deserve_content {
        font-size: 30px;
        color: #009ece;
        text-align: center;
        line-height: 40px;
        margin: 0;
        padding: 0 16px;
    }

    .apps_deserve_section {
        padding: 64px 0 93px;
    }

    .answer_Innovation_card_wrap {
        display: flex;
        justify-content: center;
    }

    .answer_Innovation_title {
        font-size: 35px;
        padding-bottom: 80px;
        font-weight: 600;
        line-height: 1.2;
        letter-spacing: normal;
        margin: 0;
    }

    .answer_Innovation_section {
        background-image: url(/wp-content/uploads/2020/10/green-horizontal-texture.png);
        background-position: center -125px;
        background-repeat: no-repeat;
        background-size: cover;
        padding: 62px 0 114px;
        text-align: center;
        font-size: 35px;
        color: #fff;
        font-weight: 600;
        background-color: #000;
    }
        .less-than-section {
        height: 350px;
        object-fit: cover;
        background-image: url(/wp-content/uploads/2020/10/Specs-Stats_Module-3-Blue.png);
        background-repeat: no-repeat;
        background-size: auto 100%;
        align-items: center;
        background-position: center center;
    }
        .less-than-section .custom_container {
            display: flex;
            align-items: center;
            height: 100%;
        }
        .less-than-section h1 {
        font-size: 50px;
        font-weight: 800;
        text-transform: uppercase;
        font-style: italic;
        line-height: 42px;
        padding: 0 0 24px;
        letter-spacing: -4px;
        margin: 0;
        color: #ffffff;
    }

    .answer_Innovation_card {
        /* background-color: #fff; */
        margin: 0 15px;
        border-radius: 5px;
        padding: 0;
        width: 33.33%;
    }

    .answer_Innovation_card_title {
        font-size: 31.5px;
        font-weight: 900;
        color: #fff;
        text-align: center;
        line-height: 30px;
        padding: 4px 0 25px 0;
        letter-spacing: normal;
        font-size: 24px;
        font-weight: 600;
        line-height: normal;
        margin: 0;
    }

    .answer_Innovation_card .answer_Innovation_icon {
            display: flex;
    justify-content: center;
    align-items: center;
    height: 48px;
    }

    .answer_Innovation_card p {
        font-size: 14px;
        color: #eee;
        font-weight: normal;
        text-align: center;
        margin-bottom: 0;
        padding: 0 30px;
    }

    .hardware {
        background-image: url(https://staging.diamanti.com/wp-content/uploads/2020/09/blue-shaped-background-big.svg);
        background-size: cover;
        background-position: bottom left;
        padding-bottom: 170px;
        padding-top: 80px;

    }

    .hardware_content {
        display: flex;
    }

    .hardware_sm_title {
        font-size: 18px;
        letter-spacing: 0.75px;
        color: #fff;
        font-weight: bold;
        text-transform: uppercase;
        padding-bottom: 35px;
    }

    .hardware_bg_title {
        font-size: 50px;
        color: #fff;
        font-weight: bolder;
        text-transform: uppercase;
        letter-spacing: -4px;
        line-height: 42px;
        font-style: italic;
    }

    .hardware_text {
        font-size: 16px;
        color: #fff;
        line-height: 24px;
        padding-top: 30px;
    }

    .hardware_content_right img {
        background-color: #f7f7f9;
        border-radius: 10px;
    }

    .hardware_content_left {
        padding-right: 60px;
    }

    .hardware_content_bottom {
        display: flex;
        padding-top: 80px;
    }

    .hardware_content_btm_text {
        display: flex;
        align-items: flex-start;
        padding: 10px 0 10px;
    }

    .btm_txt_title {
        font-size: 20px;
        color: #fff;
        font-weight: 600;
        padding-right: 25px;
    }

    .hardware_btm_text_right {
        padding-left: 15px;
    }

    .btm_txt_content {
        font-size: 14px;
        color: #fff;
    }

    .tco_content {
        display: flex;
    }

    .tco_left p {
        font-size: 30px;
        color: #2492c3;
        line-height: 40px;
    }

    .tco_title {
        font-size: 35px;
        color: #024f71;
        font-weight: 600;
        padding-bottom: 40px;
        letter-spacing: normal;
    }

    .tco_section {
        padding: 80px 0;
    }

    .tco_left {
        padding-right: 90px;
    }

    .tco_left .btn.btn-action {
        font-size: 16px;
        color: #fff;
        margin-top: 40px;
    }

    .why-hero {
        background-image: url(/wp-content/uploads/2020/10/why-diamani-hero.png);
        padding: 64px 0;
        background-repeat: no-repeat;
        background-size: auto 100%;
        background-position: center center;
        background-color: #000;
    }

    .why-hero-title {
        font-size: 50px;
        font-weight: 800;
        text-transform: uppercase;
        font-style: italic;
        line-height: 42px;
        padding: 0 0 24px;
        letter-spacing: -4px;
        margin: 0;
        color: #f7f7f9;
    }
    .why-hero-buttons .why-hero-btn.contact-btn:hover {
        color: #fff;
        background-color: #6ac613;
    }
    .why-hero-buttons .why-hero-btn.contact-btn:focus {
        color: #fff;
        background-color: red;
    }

    .why-hero-btn.btn-action {
        color: #fff;
    }

    .why-hero-btn.btn-outline {
        color: #fff !important;
        height: 50px;
        display: flex;
        border-radius: 8px;
        border: solid 1.5px #ffffff;
        width: 190px;
        text-align: center;
        padding: 0;
        justify-content: center;
        font-weight: 600;
        align-items: center;
    }

    .why-hero-text {
        font-size: 16px;
        color: #fff;
        line-height: 24px;
        margin-bottom: 28px;
        letter-spacing: normal;
    }

    .why-hero-buttons {
        padding: 63px 0 0;
        display: flex;
    }

    .why-hero-content {
        width: 65%;
        max-width: 630px;
    }

    .why-hero-buttons .why-hero-btn.contact-btn {
        height: 50px;
        width: 146px;
        display: flex;
        min-width: 146px;
        color: #fff;
        margin-right: 40px;
    }

    .visible-sm {
        display: none !important;
    }
    .btn.btn-outline:hover {
        color: #fff;
        background-color: #6ac613;
        border-color: #6ac613;
    }
    .primary-menu__nav-item {
        position: relative;
    }

    @media only screen and (max-width: 767px) {
        .why-hero-content {
            width: 100%;
            padding: 0px 15px;
        }
        .why-hero-buttons {
            padding: 56px 0 0;
        }
        .why-hero-text {
            margin-bottom: 0;
        }
        .why-hero-buttons {
            padding: 56px 0 0;
            flex-flow: column;
        }
        .why-hero-buttons .why-hero-btn.contact-btn{
            width: 100%;
            margin-right: 0;
        }
        a.why-hero-btn.btn.btn-outline.req-demo-btn {
            margin-top: 9px;
            margin-bottom: 5px;
            border-radius: 8px;
        }

        .why-hero-buttons .why-hero-btn {
            margin-right: 0;
            margin-bottom: 15px;
            color: #fff !important;
            width: 100%;
        }
        .apps_deserve_d_title {
            color: #024f71;
            font-weight: 600;
            font-size: 35px;
            text-align: center;
            padding: 0 0 28px;
            letter-spacing: normal;
            margin: 0;
            line-height: 42px;
        }

        .apps_deserve_section {
            padding: 29px 34px 42px;
        }

        .apps_deserve_content {
            font-size: 24px;
            padding: 0;
            line-height: 33px;
        }

        .answer_Innovation_card_wrap {
            flex-flow: column;
        }

        .answer_Innovation_title {
                padding: 0 25px 54px;
            letter-spacing: 0.67px;
        }

        .answer_Innovation_section {
            padding: 50px 0 20px;
            background-image: url(https://staging.diamanti.com/wp-content/uploads/2020/10/green-horizontal-texture-1.png);
            background-position: center center;
        }

        .answer_Innovation_card {
            margin: 0;
            width: 100%;
            padding: 0 72px 39px;
        }

        .hardware_content {
            flex-flow: column;
            align-items: center;
            padding: 10px 20px;
        }

        .hardware_content_bottom {
            flex-flow: column;
            padding: 30px 50px 0;
        }

        .hardware_content_right img {
            width: 100%;
        }

        .tco_title {
            text-align: center;
        }

        .tco_content {
            flex-flow: column;
            align-items: center;
        }

        .tco_left {
            padding: 0 30px;
            text-align: center;
        }

        .tco_right {
            text-align: center;
            margin-bottom: 30px;
        }

        .hidden-xs {
            display: none !important;
        }

        .visible-sm {
            display: block !important;
        }

        .tco_section .btn.btn-action {
            width: 90%;
            color: #fff;
        }

        .apps_deserve_title {
            padding-bottom: 30px;

        }

        .answer_Innovation_card_title {
            letter-spacing: normal;
            padding: 4px 0 15px 0;
        }
        .stat-row.stat-row-left {
            margin-bottom: 90px;
        }

        .answer_Innovation_card p {
            font-style: normal;
            padding: 0 10px;
        }

        .why-hero-title {
            padding: 0;
            position: relative;
            left: -5px;
            padding-bottom: 30px;
        }
        .why-hero{
            padding: 33px 0;
            background-position: 63.3% center;
            background-image: url(https://staging.diamanti.com/wp-content/uploads/2020/10/hero-image-mobile.png);
        }
        .stat-content {
            flex-flow: column;
        }
        .stat-row.stat-row-left .stat-content-left {
            align-items: center;
            padding: 0px 18px;
        }
        .stat-row.stat-row-left:before {
            height: 132px;
            top: -80px;
                width: 100%;
        }
        .stat-content-right {
            justify-content: center;
            padding-top: 32px;
            text-align: center;
        }
        .stat-section {
            padding: 40px 0;
        }
        .stat-row.stat-row-left .stat-content-left img{
            width: 100%;
        }
        .stat-row.stat-row-right .stat-content-left {
            text-align: center;
            order: 1;
            padding-top: 40px;
            padding-right: 0;
            justify-content: center;
        }
        .stat-row.stat-row-right .stat-content-right img {
            width: 100%;
        }
        .stat-row.stat-row-right .stat-content-right {
            padding: 0 42px;
        }
        .stat-row.stat-row-right:before {
            height: 158px;
            top: -84px;
            width: 100%;
        }
        .less-than-section {
            height: 315px;
            object-fit: cover;
            background-size: auto 315px;
            background-position: center;
            background-image: url(https://staging.diamanti.com/wp-content/uploads/2020/10/WhyD-Blue-Stat-mobile.png);
        }
        .drive-results-card-wrap {
            flex-flow: column;
            align-items: center;
                padding-bottom: 60px;
        }
        .drive-results-card {
            margin: 0 25px 25px;
        }
        .discover-card-wrap {
            flex-flow: column;
            align-items: center;
            padding-bottom: 0;
        }
        .discover-card {
            margin: 0 10.5px 24px;
        }
        .discover-section {
            background-image: none;
            background-color: #fff;
        }
        .discover-section {
            padding: 36px 0 69px;
            background-image: none;
            background-color: #fff;
        }
        .drive-results-section{
            padding: 45px 0;
            background-image: url(https://staging.diamanti.com/wp-content/uploads/2020/10/background-blue-sm-long-01.svg);
            padding-bottom: 0;
        }
        .drive-results-title {
            padding: 0 20px 30px;
        }
        p.drive-card-text{
                padding: 5px 5px 17px;
        }
        .why-cta-section{
                padding: 0;
        }
        .why-cta-section .ctaBlock__title{
            margin-bottom: 0;
        }
        .ctaBlock__button {
                margin: 33px auto 13px;
        }
        .ctaBlock{
            padding: 70px 0 13px;
        }
        .discover-card-title {
            padding: 8px 10px 24px;

        }
        .less-than-section h1{
            padding: 0 23px;
            font-size: 43px;
            line-height: 36px;
        }
        .discover-title{
            padding-bottom: 30px;
            margin: 0;
        } 
        
        .stat-row.stat-row-right .stat-text {
            text-align: center;
        }

    }
    
/*    Menu navigation */
  
</style>


@endsection

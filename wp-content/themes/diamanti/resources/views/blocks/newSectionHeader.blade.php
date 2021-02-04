<div class="newSection__header">
    @if(isset($data['section_title']) && $data['section_title'])<h3>{!! $data['section_title']  !!}</h3>@endif
    @if(isset($data['title']) && $data['title'])<h2>{!! $data['title']  !!}</h2>@endif
    @if(isset($data['caption']) && $data['caption'])<p>{!! $data['caption']  !!}</p>@endif
</div>


<script>
    console.log("const cardClassName = \"card\";");
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
        console.log(`tabSectionId: ${tabSectionId}`);

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

    jQuery(document).ready(function () {
        jQuery(".tabs_card .card__body").css("height", "638px");
        console.log("tab");
    });

</script>

<style>
    .btn.btn-outline:hover {
        color: #fff;
        background-color: #6ac613;
        border-color: #6ac613;
    }

    .interactiveMesh {
        top: 100px;
    }

    .tabs_card {
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

    .tabs_menu_title {
        font-size: 18px;
        font-weight: bold;
        text-align: left;
    }

    .tabs_sub_text {
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
        margin-bottom: 60px;
    }

    .card_body_text {
        background-color: rgb(2 81 116 / 30%);
        padding: 21px;
        border-radius: 0 0 10px 10px;
    }

    .card_body_text p {
        color: #fff;
        font-size: 14px;
        margin: 0;
    }

    .card__tab--active .tabs_title {
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

    .tabs_with_bg .section_tabs {
        padding: 100px 0;
    }

    .tabs_learmore, .btn_learnmore {
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

    .logoList {
        padding: 90px 0 0px;
    }

    /*Partnering card section*/

    .partnering_title {
        color: #93d500;
        font-size: 18px;
        font-weight: bold;
        text-transform: uppercase;
        text-align: center;
        margin: 0;
    }

    .partnering_card_wrapper {
        display: flex;
        padding-top: 50px;
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

    .card_light_bg {
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

    .partner_cards_section {
        position: relative;
        z-index: 4;
        background-color: #2b2b2b;
        padding: 10px 0 80px;
        /*box-shadow: 0 5px 20px 0 rgba(0, 0, 0, 0.29);*/
    }

    /*Journey blgo card*/
    .journey-card {
        position: relative;
        z-index: 4;
    }

    .journey_card_left {
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
        padding-top: 80px;
        text-align: center;
        background-color: #f7f7f8;
    }

    .journey_card_title {
        color: #024f71;
        font-size: 18px;
        font-weight: bold;
        text-transform: uppercase;
        margin: 0;
    }

    .journey_card img.card-img {
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
        padding: 70px 0 140px 0;
        font-size: 36px;
    }

    .page-id-701 .hero_product_diagarm {
        min-height: 300px;
        background-image: url(/wp-content/uploads/2020/10/Homepage-Hero-1.svg);
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        margin-top: 0;
        position: relative;
        bottom: 30px;
        width: 100%;
        left: 30px;
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

    .featured-center {
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

    .productDiagram__container {
        display: flex;
        align-items: center;
    }

    .page-id-701 .newHero__caption, .page-id-701 .newHero__button {
        font-family: "Open Sans", Arial, sans-serif !important;
    }

    .page-id-701 .newHero__title {
        margin-bottom: 0;
        font-size: 39.4px;
        font-weight: 300;
        font-stretch: normal;
        font-style: normal;
        line-height: 1.3;
        letter-spacing: normal;
        color: #00caf0;
        position: relative;
        bottom: 60px;
    }

    .page-id-701 .newHero__title .highlight-txt {
        display: inline-block;
        text-decoration: none !important;
        font-weight: 300 !important;
        cursor: default;
    }

    .page-id-701 .newHero__title .highlight-txt::before {
        content: "";
        width: 346px;
        height: 1px;
        background-color: #00caf0;
        position: absolute;
        top: 52px;
    }

    .page-id-701 .newHero .newHero__button {
        margin-top: 65px;
        margin-bottom: 0px;
    }

    .quoteBlock__quote blockquote {
        font-size: 36px !important;
        margin-bottom: 55px;
        line-height: 55px;
    }

    .quoteBlock__quote .quoteBlock__logo {
        margin-top: 55px;
    }

    .author_name {
        font-size: 18px;
        font-weight: 600 !important;
    }

    .page-id-701 .newHero {
        padding-top: 0 !important;
    }

    .quoteBlock::before {
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

    .logoList {
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

    .page-id-701 .newHero__columns.newHero__columns--left {
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
        background-color:rgba(147,213,0,.85) !important;
        color: #f7f7f9 !important;
    }

    .featured_hero_div {
        display: none;
    }

    .page-id-701 .featured_hero_div {
        display: block;
    }

    a.newHero__button.btn.btn-action {
        display: none;
    }

    .page-id-701 a.newHero__button.btn.btn-action {
        display: inline-block;
        margin-top: 0px;
    }

    @media only screen and (max-width: 640px) {
        .productDiagram {
            width: 100%;
            height: auto;
        }

        .featured_hero_div {
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

        .visible-sm {
            display: inline-block !important;
        }

        .visible-sm-fl {
            display: flex !important;
        }

        .hidden-xs {
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

        .quoteBlock {
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

        .page-id-701 .newHero__title {
            /*font-size: 63px;*/
            max-width: 100%;
            /*line-height: 68px;*/
            font-size: 40px;
            line-height: 1.3;
        }

        .page-id-701 .newHero__container {
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

        .page-id-701 .newHero__columns.newHero__columns--left {
            margin-top: 10px;
        }

        .page-id-701 .The-best-platform-fo {
            word-break: break-word;
            width: 100% !important;
            display: inline-block;
        }

        .tabs_with_bg .cardsBlock:before {
            background-size: 126% 100%;
            background-position: center;
            background-image: url(/wp-content/uploads/2020/10/blue-shaped-background-sm-1.svg);
        }

        .tabs_with_bg .section_tabs .tabs_title {
            padding: 100px 54px 33px 54px;
        }

        .partner_cards_section {
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

        .page-id-701 a.newHero__button.btn.btn-action {
            display: block;
        }

        .page-id-701 .hero_product_diagarm {
            min-height: auto;
            margin-top: 0;
            bottom: 0;
            width: 100%;
            left: 0;
            top: 20px;
            background-size: contain;
        }

        .page-id-701 #homeBannerBoxSec .home_box-wrapper {
            grid-template-columns: 1fr;
        }

        .page-id-701 #homeBannerBoxSec {
            margin: 0;
        }

        .page-id-701 #homeBannerBoxSec .box-card {
            height: 120px;
        }
    }


    .Rectangle-Copy-3 {
        height: 372px;
    }

    .journey_card:hover {
        box-shadow: 0 0 4px 0 rgba(0, 0, 0, 0.23)
    }

    .Homepage-Hero {
        width: 382px;
        height: 364px;
        object-fit: contain;
    }

    .page-id-701 .The-best-platform-fo {
        width: 459px;
        height: 0;
        font-family: Open Sans;
        font-size: 16px !important;
        font-weight: normal;
        font-stretch: normal;
        font-style: normal;
        line-height: normal;
        letter-spacing: normal;
        color: #ffffff;
        margin: 0;
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
        /*color: #87c204 !important; */
        color: black;
    }

    @media (min-width: 980px) {
        .contact-Sales {
            margin-left: 25px;
        }
    }

    @media (max-width: 980px) {
        .contact-Sales {
            margin-top: auto !important;
        }
    }

    /*    home page css 20/10/2020*/
    .diamanti_propels_div {
        display: none;
    }

    /*    Ultima page style*/
    #ultimaData .newHero__columns.newHero__columns--left {
        display: flex;
    }

    #ultimaData .newHero__column {
        width: 100%;
        margin: 0;
        height: 318px;
    }

    #ultimaData .productFeatures .newSection__header .cc-message, .productFeatures .newSection__header p {
        line-height: 33px;
        font-size: 24px;
        padding: 0;
        margin-top: 0px;
    }

    #ultimaData .newHero--product .newHero__image {
        left: 0;
        margin: 0;
        width: 85%;
        padding: 0;
        /* bottom: 50px; */
        float: right;
    }

    #ultimaData .newHero__title {
        text-transform: uppercase;
        margin-bottom: 0;
    }

    #ultimaData a.newHero__button.btn.btn-action {
        display: block;
        height: 50px;
        width: 170px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        min-width: 146px;
        padding: 0;
        color: black;
    }


    #ultimaData a.newHero__button.btn.btn-action.contact-Sales {
        background-color: transparent !important;
        height: 50px;
        display: inline-flex;
        border-radius: 8px;
        border: solid 1.5px #93d501;
        width: 190px;
        text-align: center;
        padding: 0;
        justify-content: center;
        font-weight: 600;
        align-items: center;
        font-family: Open Sans, Arial, sans-serif;
        margin-left: 15px;
    }

    #ultimaData a.newHero__button.btn.btn-action.contact-Sales:hover {
        background-color: #93d501 !important;
    }

    #highPerformanceDataSln .productFeatures {
        padding-bottom: 50px;
    }

    #highPerformanceDataSln .productFeatures .newSection__header {
        padding: 0;
    }

    #highPerformanceDataSln .productFeatures .newSection__header h3 {
        text-transform: uppercase;
        margin-bottom: 25px;
    }

    #highPerformanceDataSln .productFeatures__container {
        margin-top: 30px;
    }

    #highPerformanceDataSln .productFeatures__image {
        margin-top: 78px;
        margin-bottom: 43px;    }

    #highPerformanceDataSln .productFeatures__diagram--simple .productFeatures__image img {
        width: 89%;
    }


    #containerNativeData .newSection__header h3 {
        text-transform: uppercase;
        margin-bottom: 25px;
    }

    #containerNativeData .newSection__header p {
        font-size: 24px;
        line-height: 1.38;
    }

    #networkingAndStorage .productFeatures .newSection__header {
        padding-top: 85px;
        padding-bottom: 85px;
    }

    #networkingAndStorage .productFeatures .newSection__header h3 {
        text-transform: uppercase;
        margin-bottom: 25px;
    }

    #networkingAndStorage .productFeatures {
        padding-bottom: 80px;
    }


    #ultimaServiceSec.productBenefitsSection {
        min-height: auto;
        padding: 0;
    }

    #ultimaServiceSec.productBenefitsSection--ultima:before {
        background-image: none;
        min-height: auto !important;
        padding: 0;
    }

    #ultimaServiceSec .productBenefits__cards {
        margin: 20px 60px;
    }

    #ultimaServiceSec .productBenefits__card {
        height: 320px;
        padding: 29px 13px;
    }

    #containerNativeData {
        padding-bottom: 0;
        min-height: auto;
    }

    #containerNativeData .newSection__header {
        padding-top: 30px;
    }

    #containerNativeData .productBenefits__cards {
        margin: 60px 60px;
    }

    #containerNativeData .productBenefits__card {
        padding: 29px 13px;
        height: 320px !important;
    }

    #additionalResourcesSec {
        margin-top: -252px;
        padding-top: 0;
        padding-bottom: 118px;
        min-height: auto;
    }

    #additionalResourcesSec .productResources .newSection__header h2 {
        padding-bottom: 0;
        margin-bottom: 60px;
        padding-top: 120px;
    }

    #additionalResourcesSec .productResources__cards {
        margin-top: 0px;
    }


    #ultimaKeyBenefitsSec .cardsBlock {
        background-image: url(/wp-content/uploads/2020/10/background-blue-1-1.svg) !important;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: bottom left;
        position: relative;
    }

    #ultimaKeyBenefitsSec .cardsBlock:before {
        display: none;
    }

    #ultimaKeyBenefitsSec .benefit_title {
        font-size: 48px;
        font-weight: normal;
        font-stretch: normal;
        font-style: normal;
        line-height: 1.13;
        letter-spacing: 1px;
        text-align: center;
        color: #ffffff;
        margin-bottom: 25px;
    }

    #ultimaKeyBenefitsSec .benefit-container {
        position: relative;
        width: 100%;
    }

    #ultimaKeyBenefitsSec .benefit-wrapper {
        display: flex;
        margin-bottom: 30px;
    }

    #ultimaKeyBenefitsSec .benefit-left {
        width: 50%;
        padding-right: 15px;
    }

    #ultimaKeyBenefitsSec .benefit-h {
        font-size: 20px;
        font-weight: 600;
        font-stretch: normal;
        font-style: normal;
        line-height: 1.2;
        letter-spacing: normal;
        color: #ffffff;
        margin-bottom: 15px;
        padding-top: 30px;
    }

    #ultimaKeyBenefitsSec .benefit-p {
        font-size: 14px;
        font-stretch: normal;
        font-style: normal;
        line-height: 1.57;
        letter-spacing: normal;
        color: #ffffff;
        width: 332px;
    }

    #ultimaKeyBenefitsSec .benefit-right {
        width: 50%;
        padding-left: 15px;
    }

    #ultimaKeyBenefitsSec img.card_img {
        height: 240px;
        margin: 0;
        width: 332px;
        background-color: #fff;
        padding: 20px 30px;
        border-radius: 10px;
        box-shadow: 0 0 16px 0 rgb(38 148 196 / 72%);
    }

    #ultimaKeyBenefitsSec .benefit-wrapper:nth-child(2) {
        display: flex;
        flex-direction: row-reverse;
    }

    #ultimaKeyBenefitsSec .benefit-wrapper:nth-child(2) .benefit-left {
        padding-left: 15px;
        padding-right: 0px;
    }

    #ultimaKeyBenefitsSec .benefit-wrapper:nth-child(2) .benefit-right {
        padding-left: 0px;
        padding-right: 15px;
    }

    #ultimaKeyBenefitsSec {
        display: none;
    }

    .page-id-13187 #ultimaKeyBenefitsSec {
        display: block;
        margin-top: 60px;
    }

    #ultimaKeyBenefitsSec .benefit_title {
        margin-bottom: 40px;
    }

    #ultimaKeyBenefitsSec .section_tabs {
        padding: 80px 0 70px 0;
    }
    /*ultima new */
    .page-id-14219 #ultimaServiceSec {
        background: url(/wp-content/uploads/2020/12/blue-grad-polygon-shape2-2.svg);
        background-repeat: no-repeat;
        background-size: cover;
        background-position:left bottom ;
        min-height: 539px;
        z-index: 1;
    }
    .page-id-14219 #ultimaServiceSec .productBenefits__card img.productBenefits__card__image {
        display: none;
    }
    .page-id-14219 .productBenefits__card {
        background: unset;
        box-shadow: none;
        color: white;
        max-width: 389px;
    }
    .page-id-14219 #ultimaServiceSec .productBenefits__card h3 {
        color: white;
        font-size: 38px;
    }
    .page-id-14219 .productBenefits{
        max-width:1289px;
    }
    .page-id-14219 .productBenefits__card {
        border-right: 1px solid white;
        border-radius: unset;
    }
    .page-id-14219 #ultimaServiceSec .productBenefits__cards {
        margin: 80px 60px;
    }
    #accelerationfeatures .productFeatures.productFeatures--spektra {
        background-image: url(/wp-content/uploads/2020/12/top-bkgd-polygons.svg);
        background-repeat: repeat-x;
    }
    #accelerationfeatures .productFeatures .newSection__header h3 {
        font-size: 55px;
        font-weight: 400;
        font-stretch: normal;
        font-style: normal;
        line-height: 1;
        letter-spacing: 1px;
        text-align: center;
        color: #024f71;
        font-family: Open Sans,Arial,sans-serif;
    }
    #accelerationfeatures .productFeatures .newSection__header p{
        /*font-size: 16px;*/
        font-size: 14px;
        font-weight: normal;
        font-stretch: normal;
        font-style: normal;
        line-height: 2.2;
        letter-spacing: normal;
        text-align: center;
        color: #2b2b2b;
    }
    #accelerationfeatures .productFeatures__container {
        max-width: 1140px;
    }
    #accelerationfeatures .productFeatures .newSection__header{
        max-width: 990px;
    }
    #accelerationfeatures {
        background-color: #f7f7f9;
        margin-top: -229px;
    }
    #globalpartners h2 {
        color: #024f71;
    }
    #globalpartners {
        background: #f7f7f9;
        /*min-height: unset;*/
    }
    @media (min-width: 992px){
        #globalpartners:before {
            min-width: unset;
            background-image: url(/wp-content/uploads/2020/12/white-polygon-bkgd-shape.svg);
        }}
    .page-id-14219 #additionalResourcesSec {
        background-image: linear-gradient(180deg, #00597e , #009ecd );
    }
    .page-id-14219 #additionalResourcesSec .productResources .newSection__header h2{
        color: white;
    }
    .page-id-14219 #ultimaData .newHero--product .newHero__image{
        width: 351px;
        height: 181px;
        margin-top: 22px;
    }
    .page-id-14219 #ultimaData .newHero__column{
        max-width: 540px !important;
    }
    .page-id-14219 #ultimaData .newHero__container {
        max-width: 1140px !important;
    }
    /*.page-id-14219 .newHero--product .newHero__column:first-child {*/
    /*    max-width: 50%;*/
    /*}*/
    .page-id-14219 .productFeatures .newSection__header {
        padding: 300px 0 50px;
    }
    .page-id-14219 #ultimaData .staticMesh.staticMesh--product-single {
        opacity: 0.6;
    }
    /*.page-id-14219 #ultimaData a.newHero__button.btn.btn-action{*/
    /*    color: black !important;*/
    /*}*/
    .page-id-14219 #networkingAndStorage .productFeatures .newSection__header {
        padding-top: 0px;
    }
    .page-id-14219 .newHero--product{
        padding-bottom: unset;
    }
    .page-id-14219 .productBenefits__card:last-child {
        border: unset;
    }
    .page-id-14219 .productFeatures {
        padding-bottom: 50px;
    }
    .page-id-14219 .partnerulg {
        margin: 25px;
    }
    .page-id-14219 .productResources__card {
        background-color: #ffffff;
    }
    .page-id-14219 .productResources__card__description{
        color: #2b2b2b;
    }
    .page-id-14219 #additionalResourcesSec a.productResources__card__link.productResources__card__link--webpage{
        color: black;
    }
    .page-id-14219 .ctaBlock__button.btn.btn-action {
        color: black;
    }
    .page-id-14219 #additionalResourcesSec:before {
        content: unset;
    }
    .page-id-14219 #ultimavbac:before {
        content: close-quote;
        width: 100%;
        position: absolute;
        height: 300px;
        top: -300px;
        background: url(/wp-content/uploads/2020/12/black-bottom.png);
        background-size: 100% 300px;
        background-repeat: no-repeat;
    }
    #ultimavbac .productFeatures.productFeatures--ultima {
        display: none;
    }
    .page-id-14219 #additionalResourcesSec .newSection__header {
        padding-top: unset;
    }
    .page-id-14219 #additionalResourcesSec .productResources .newSection__header h2{
        padding-top:80px;
    }
    #networkingAndStorage .productFeatures__diagram-img--desktop{
        /*width: 940px;*/
    }
    .page-id-14219 .productFeatures__col {
        display: flex;
        justify-content: center;
    }
    .page-id-14219 .productFeatures__diagram{
        display: unset;
    }
    .page-id-13187 .productFeatures__col {
        display: flex;
        justify-content: center;
    }
    .page-id-13187 .productFeatures__diagram{
        display: unset;
    }
    .page-id-14219 .productFeatures .newSection__header {
        max-width: 974px;
    }
    .page-id-14219 #additionalResourcesSec .productResources__card__title {
        color: #2b2b2b;
    }
    .page-id-14219 #ultimaServiceSec .productBenefits__card{
        height: 234px;
        padding: 5px 13px;
    }
    .page-id-14219 .primary-menu__nav-item:last-of-type .primary-menu__nav-link {
        color: black;
    }
    .partnerlrnbtn:hover {
        background-color: #6ac613 !important;
    }
    .partnerlrnbtn{
        margin: 55px auto;
        background-image: none;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 11px 20px;
        color: #000;
        font-size: 17px;
        font-weight: 600;
        line-height: 25px;
        background-color: #93d500;
        border: none;
        border-radius: 8px;
        position: relative;
        width: 229px;
        height: 50px;
    }
    .partnerlrnbtn:focus{
        outline:unset;
    }
    .page-id-14219 #additionalResourcesSec .productResources{
        z-index:1;
    }
    .page-id-14219 #additionalResourcesSec a.productResources__card__link.productResources__card__link--webpage:hover {
        background-color: #6ac613 !important;
        opacity: unset;
    }
    .page-id-14219 i.fa.fa-circle{
        font-size: 7px !important;
        color: #2b2b2b;
        margin: 2px;
        vertical-align: middle;
    }
    .page-id-14219 .productBenefits__card p {
        width: 260px;
        margin: auto;
    }
    .page-id-14219 .staticMesh--product-single {
        background-position: 0 70%;
        left: -100px;
    }
    .page-id-14219 #globalpartners{
        min-height: 730px;
    }
    .page-id-13512 .staticMesh.staticMesh--black.staticMesh--resources {
        display: none;
    }
    /*.page-id-10787 .staticMesh.staticMesh--black.staticMesh--resources {*/
    /*    display: none;*/
    /*}*/





    @media (max-width: 980px) {

        .page-id-14219 .productBenefits__card {
            border-right: unset;

        }
        .page-id-14219 #ultimaServiceSec {
            background: url(/wp-content/uploads/2020/12/tOP001.svg);
            background-size: cover;
        }
        #globalpartners .newSection__header p span {
            padding: unset !important;
        }
        #globalpartners {
            background: #ffffff;
            min-height: 700px;
        }
        #globalpartners:before {
            background:Unset;
        }
        #globalpartners .newSection__header p span img {
            width: 80px;
            margin: 10px 15px;
        }
        #accelerationfeatures .productFeatures .newSection__header h3{
            font-size: 32px;
            line-height: 1.25;
        }
        #accelerationfeatures .productFeatures .newSection__header p {
            font-size: 14px;
        }
        .page-id-14219 .productFeatures .newSection__header {
            padding-bottom:unset;
        }
        #ultimavbac:before {
            content: unset !important;
        }
        .page-id-14219 .partnerulg{
            margin:unset;
        }

    }

    /*diamanti-spektra2-new page-----------------------------------------------------------------------------------------------------*/
    .page-id-14582 #ultimaServiceSec {
        background: url(/wp-content/uploads/2020/12/blue-grad-polygon-shape2-2.svg);
        background-repeat: no-repeat;
        background-size: cover;
        background-position:left bottom ;
        min-height: 630px;
        z-index: 1;
    }
    .page-id-14582 #additionalResourcesSec {
        background-image: linear-gradient(180deg, #00597e , #009ecd );
    }
    .page-id-14582 #additionalResourcesSec .productResources .newSection__header h2{
        color: white;
        line-height: 1.3em;
        padding-top:80px;
    }
    .page-id-14582 #ultimaServiceSec .productBenefits__card img.productBenefits__card__image {
        display: none;
    }
    .page-id-14582 .productBenefits__card {
        background: unset;
        box-shadow: none;
        color: white;
        max-width: 389px;
    }
    .page-id-14582 #ultimaServiceSec .productBenefits__card h3 {
        color: white;
        font-size: 38px;
    }
    .page-id-14582 .productBenefits{
        max-width:1289px;
    }
    .page-id-14582 .productBenefits__card {
        border-right: 1px solid white;
        border-radius: unset;
    }
    .page-id-14582 #ultimaServiceSec .productBenefits__cards {
        margin: 90px 35px;
    }
    .page-id-14582 .productFeatures__col {
        display: flex;
        justify-content: center;
    }
    .page-id-14582 .productFeatures__diagram{
        display: unset;
    }
    .page-id-13582 .productFeatures__col {
        display: flex;
        justify-content: center;
    }
    .page-id-14582 .productFeatures .newSection__header {
        padding: 300px 0 0px;
    }
    .page-id-14582 #ultimaData .staticMesh.staticMesh--product-single {
        opacity: 0.6;
    }
    .page-id-14582 #networkingAndStorage .productFeatures .newSection__header {
        padding-top: 0px;
    }
    .page-id-14582 #ultimavbac:before {
        content: close-quote;
        width: 100%;
        position: absolute;
        height: 300px;
        top: -300px;
        background: url(/wp-content/uploads/2020/12/black-bottom.png);
        background-size: 100% 300px;
        background-repeat: no-repeat;
    }
    .page-id-14582 #additionalResourcesSec .newSection__header {
        padding-top: unset;
    }
    .page-id-14582 #accelerationfeatures .productFeatures.productFeatures--spektra{
        padding-bottom: 260px !important;
    }
    .page-id-14582 #ultimaServiceSec .productBenefits__cards .productBenefits__card:nth-child(3) {
        max-width: 420px;
    }
    .page-id-14582 .productFeatures .newSection__header .col-md-6 h3 {
        margin-bottom: 22px;
        margin-top: 11px;
    }
    .page-id-14582 .productFeatures .newSection__header h3 {
        margin-bottom: 90px;
        margin-top: 11px;
    }
    .page-id-14582 #additionalResourcesSec .productResources__card{
        background: #ffffff;
    }
    .page-id-14582 .productResources__card__title{
        color: #2b2b2b;
    }
    .page-id-14582 #additionalResourcesSec .productResources__card__description{
        color: #2b2b2b;
    }
    .page-id-14582 #networkingAndStorage .productFeatures{
        padding-top: 50px;
        padding-bottom: 5px;
    }
    .page-id-14582 #ultimaServiceSec .productBenefits .productBenefits__cards .productBenefits__card p {
        width: 265px;
        margin: 0 auto;
    }
    .page-id-14582 .productBenefits__card:last-child {
        border: unset;
    }
    .page-id-14582 #ultimaServiceSec .productBenefits__card{
        height: 290px;
    }
    .page-id-14582 p.newHero__caption.The-best-platform-fo {
        width: 540px;
    }
    .page-id-14582 #ultimaData .newHero--product .newHero__image{
        width: 75%;
    }
    .page-id-14582 #additionalResourcesSec .productResources {
        z-index: 1;
    }
    .page-id-14582 #additionalResourcesSec a.productResources__card__link.productResources__card__link--webpage:hover {
        background-color: #6ac613 !important;
        opacity: unset;
    }
    .page-id-14582 #additionalResourcesSec a.productResources__card__link.productResources__card__link--webpage {
        color: black;
    }
    .page-id-14582 #accelerationfeatures .productFeatures .newSection__header h3{
        line-height: 36px !important;
    }
    .page-id-14582 #networkingAndStorage .productFeatures .newSection__header{
        padding-bottom: unset;
    }
    #accelerationfeatures .col-md-6.featurescols3 {
        padding-bottom: 83px;
    }
    .page-id-14582 #accelerationfeatures .productFeatures .newSection__header p{
        margin: 0 39px;
        line-height: 22px;
    }
    .page-id-14582 #additionalResourcesSec a.productResources__card__link.productResources__card__link--webpage{
        padding: 9px 20px 11px !important;
    }

    @media (max-width: 980px) {

        .page-id-14582 .productBenefits__card {
            border-right: unset;

        }
        .page-id-14582 #ultimaServiceSec {
            background: url(/wp-content/uploads/2020/12/tOP001.svg);
            background-size: cover;
        }
        .page-id-14582 .productFeatures .newSection__header {
            padding-bottom:unset;
        }
        .page-id-14582 .partnerulg{
            margin:unset;
        }
        .page-id-14582 p.newHero__caption.The-best-platform-fo {
            width: unset;
        }
        .page-id-14582 #ultimaData .newHero--product .newHero__image {
            width: auto;
            max-width: 350px;
            margin-top: 25px;
        }
        .page-id-14582 #ultimaData .newHero__column {
            width: auto;
            margin: 0 auto;
        }
        .page-id-14582 #networkingAndStorage .productFeatures {
            padding-top: 20px;
        }
        .page-id-14582 #networkingAndStorage .productFeatures .newSection__header {
            padding-bottom: 40px;
        }
        .page-id-14582 #accelerationfeatures .productFeatures.productFeatures--spektra{
            background: unset;
        }
        .page-id-14582 #ultimaServiceSec .productBenefits .productBenefits__cards .productBenefits__card p {
            width: auto;
            margin: 0 auto;
        }
        #accelerationfeatures .featurescols3 {
            padding: 0 25px;
        }
        .page-id-14582 #accelerationfeatures .productFeatures.productFeatures--spektra {
            padding-bottom: 130px !important;
        }
        .page-id-14582 #accelerationfeatures .productFeatures .newSection__header p {
            margin: unset;
            line-height: 22px !important;
        }
        .page-id-14582 .productFeatures .newSection__header h3 {
            margin-bottom: 76px;
        }
        #accelerationfeatures .col-md-6.featurescols3 {
            padding-bottom: unset;
        }
        .page-id-14582 .productFeatures .newSection__header {
            padding: 255px 0 0px;
        }
        .page-id-14582 #ultimaServiceSec .productBenefits__cards {
            margin: 0px 35px 90px 35px;
        }
        .productBenefits__card{
            margin-top: 5px;
        }
        .page-id-14582 #ultimaServiceSec .productBenefits__cards {
            margin: 0px 35px 90px 35px;
        }
        .page-id-14582 #spektraData .productFeatures .newSection__header .cc-message, .productFeatures .newSection__header p{
            line-height: 30px !important;
        }
        .page-id-14582 #ultimaServiceSec .productBenefits__card__title{
            line-height: 56px;
        }


    }


    /*diamanti-spektra-test page start*/
    #spektraKeyBenefit .productFeatures.productFeatures--spektra::before {
        content: "";
        background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMDAwIiBoZWlnaHQ9IjExMDAiIHZpZXdCb3g9IjAgMCAzMDAwIDExMDAiPgogICAgPHBhdGggZmlsbD0iIzAyNGY3MSIgZmlsbC1ydWxlPSJldmVub2RkIiBkPSJNMC41IDM2Mi4xMjVMMTIyMi45NCAwIDE0NjkgNDMgMzAwMC41IDEwMi40NjkgMzAwMC41IDExMDAgMCAxMTAweiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLS41KSIvPgo8L3N2Zz4K);
        position: absolute;
        top: 0;
        left: 50%;
        right: 0;
        transform: translateX(-50%);
        width: 100%;
        height: 100%;
        background-position: top;
        background-repeat: no-repeat;
        background-size: cover;
    }

    #spektraKeyBenefit .productFeatures .newSection__header {
        position: relative;
        padding-bottom: 0;
        padding-top: 140px;
    }

    #spektraKeyBenefit .productFeatures .newSection__header h3 {
        font-family: Open Sans, Arial, sans-serif;
        font-size: 18px;
        font-weight: 700;
        text-align: center;
        color: #a5de00;
        text-transform: uppercase;
        margin-bottom: 25px;
    }

    #spektraKeyBenefit .productFeatures__container {
        padding-top: 30px;
    }

    #spektraKeyBenefit .newSection__header p {
        font-size: 24px;
        font-weight: normal;
        font-stretch: normal;
        font-style: normal;
        line-height: 1.38;
        letter-spacing: normal;
        text-align: center;
        color: #ffffff;
    }

    #spektraKeyBenefit {
        display: none;
    }

    .page-id-13280 #spektraKeyBenefit {
        display: block;
    }

    #spektraKeyBenefit .cardsBlock:before {
        /*background-image: url(/wp-content/uploads/2020/10/background-blue-.svg);*/
        background-image: url(https://diamanti.c.wpstage.net/wp-content/uploads/2020/10/background-blue-1-1.svg);
        background-size: cover;
        background-position: bottom left;
    }

    #spektraKeyBenefit .benefit_title {
        font-size: 48px;
        font-weight: normal;
        font-stretch: normal;
        font-style: normal;
        line-height: 1.13;
        letter-spacing: 1px;
        text-align: center;
        color: #ffffff;
        margin-bottom: 25px;
    }

    #spektraKeyBenefit .benefit-container {
        position: relative;
        width: 100%;
    }

    #spektraKeyBenefit .benefit-wrapper {
        display: flex;
        margin-bottom: 30px;
    }

    #spektraKeyBenefit .benefit-left {
        width: 50%;
        padding-right: 15px;
    }

    #spektraKeyBenefit .benefit-h {
        font-size: 20px;
        font-weight: 600;
        font-stretch: normal;
        font-style: normal;
        line-height: 1.2;
        letter-spacing: normal;
        color: #ffffff;
        margin-bottom: 15px;
        padding-top: 30px;
    }

    #spektraKeyBenefit .benefit-p {
        font-size: 14px;
        font-stretch: normal;
        font-style: normal;
        line-height: 1.57;
        letter-spacing: normal;
        color: #ffffff;
        width: 332px;
    }

    #spektraKeyBenefit .benefit-right {
        width: 50%;
        padding-left: 15px;
    }

    #spektraKeyBenefit img.card_img {
        height: 211px;
        margin: 0;
        width: auto;
    }

    #spektraKeyBenefit .benefit-wrapper:nth-child(2) {
        display: flex;
        flex-direction: row-reverse;
    }

    #spektraKeyBenefit .benefit-wrapper:nth-child(2) .benefit-left {
        padding-left: 15px;
        padding-right: 0px;
    }

    #spektraKeyBenefit .benefit-wrapper:nth-child(2) .benefit-right {
        padding-left: 0px;
        padding-right: 15px;
    }

    #spektraKeyBenefit {
        display: none;
    }

    .page-id-13280 #spektraKeyBenefit {
        display: block;
        margin-top: 0px;
    }

    #spektraKeyBenefit .benefit_title {
        margin-bottom: 40px;
        position: relative;
    }

    #spektraKeyBenefit .section_tabs {
        padding: 80px 0 70px 0;
    }

    #spektraFeaturesSec .featureList {
        background-color: transparent;
        background-image: url(/wp-content/uploads/2020/10/background-gray-.svg);
        background-position: bottom;
        background-repeat: no-repeat;
        background-size: cover;
        padding-top: 85px;
        padding-bottom: 85px;
    }

    #spektraKeyBenefit .productFeatures.productFeatures--spektra {
        padding-bottom: 80px;
    }


    #additionalResourcesSec .newSection__header {
        padding-top: 210px;
    }

    .page-id-13280 #spektraData .newHero--product .newHero__image {
        left: 0;
        margin: 0;
        width: 85%;
        padding: 0;
        bottom: unset;
        position: relative;
        height: 360px;
        float: right;
    }

    .page-id-13280 #spektraData .newHero__column {
        width: 100%;
        margin: 0;
        height: 318px;
        /* max-width: 100%; */
    }

    #spektraData .newHero__columns.newHero__columns--left {
        display: flex;
    }

    #spektraData .newHero__column {
        width: 100%;
        margin: 0;
        height: 318px;
    }

    #spektraData .productFeatures .newSection__header .cc-message, .productFeatures .newSection__header p {
        line-height: 33px;
        font-size: 24px;
        padding: 0;
        margin-top: 0px;
    }


    #spektraData .newHero--product .newHero__image {
        left: 0;
        margin: 0;
        width: 100%;
        padding: 0;
        bottom: 50px;
    }

    #spektraData .newHero__title {
        text-transform: uppercase;
        margin-bottom: 0;
    }

    #spektraData a.newHero__button.btn.btn-action {
        display: block;
        height: 50px;
        width: 170px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        min-width: 146px;
        padding: 0;
        color: black;
    }


    #spektraData a.newHero__button.btn.btn-action.contact-Sales {
        background-color: transparent !important;
        height: 50px;
        display: inline-flex;
        border-radius: 8px;
        border: solid 1.5px #93d501;
        width: 190px;
        text-align: center;
        padding: 0;
        justify-content: center;
        font-weight: 600;
        align-items: center;
        font-family: Open Sans, Arial, sans-serif;
        margin-left: 15px;
    }

    #spektraData a.newHero__button.btn.btn-action.contact-Sales:hover {
        background-color: #93d501 !important;
    }

    #expandingKubernetes .productFeatures {
        padding-bottom: 50px;
    }

    #expandingKubernetes .productFeatures .newSection__header {
        padding: 0;
    }

    #expandingKubernetes .productFeatures .newSection__header h3 {
        text-transform: uppercase;
        margin-bottom: 25px;
    }

    #expandingKubernetes .productFeatures__container {
        margin-top: 30px;
    }

    #expandingKubernetes .productFeatures__image {
        margin-top: 15px;
    }

    #expandingKubernetes .productFeatures__diagram--simple .productFeatures__image img {
        width: 585px;
        margin-top: 60px;
    }

    body.page-template-template-product-single {
        padding-top: 110px !important;
    }

    .page-id-701 .logoList__columns {
        margin-bottom: 0px;
    }

    body.page-template-template-products {
        padding-top: 110px;
    }

    /*.productsMenu--product-single {*/
    /*    display: none;*/
    /*}*/


    /*diamanti-spektra-test page end*/
    @media (max-width: 991px) {
        section#ultimaData {
            margin-top: 25px;
        }

        #ultimaData a.newHero__button.btn.btn-action {
            position: relative;
            left: 30%;
            margin: 0;
            margin-right: 10px;
            margin-top: 20px;
        }

        #ultimaData a.newHero__button.btn.btn-action.contact-Sales {
            position: relative;
            left: 30%;
            margin: 0;
            margin-left: 10px;
            margin-top: 20px !important;
        }

        #ultimaData .newHero__column:first-child {
            height: auto;
            margin-bottom: 20px;
        }

        #ultimaData .newHero__column {
            height: 260px;
        }

        #ultimaData .newHero--product .newHero__image {
            left: 0;
            right: 0;
            margin: 0 auto;
            width: 100%;
            height: 421px;
            padding: 0;
            bottom: 0;
            position: relative;
        }


        #highPerformanceDataSln .productFeatures__elements {
            display: none;
        }

        #highPerformanceDataSln .productFeatures {
            padding-bottom: 0;
        }

        #ultimaKeyBenefitsSec .cardsBlock {
            background-image: url(/wp-content/uploads/2020/10/bacblue.png) !important;
        }
        .page-id-13280 #spektraData .newHero--product .newHero__image{
            width: 100%;
            float: unset;
        }

    }


    /*mycss 2*/
    @media (max-width: 990px) {
        #ultimaData .newHero__title {
            letter-spacing: normal;
        }

        #ultimaData a.newHero__button.btn.btn-action {
            width: 100%;
            left: unset;
            margin-left: auto;
        }

        #ultimaData a.newHero__button.btn.btn-action.contact-Sales {
            width: 100%;
            left: unset;
            margin-left: auto;

        }

        #ultimaData p.newHero__caption.The-best-platform-fo {
            margin: 15px;
        }

        #ultimaKeyBenefitsSec .benefit-wrapper {
            display: unset !important;
        }

        #ultimaKeyBenefitsSec .benefit-left {
            width: 100%;
            text-align: center;
            padding: unset !important;
        }

        #ultimaKeyBenefitsSec .benefit-right {
            width: 100%;
            text-align: center;
            padding: unset !important;
        }

        #ultimaKeyBenefitsSec .benefit-left .benefit-p {
            width: 100%;
            margin-bottom: 2rem;
        }

        #additionalResourcesSec .productResources__card {
            margin: 12px 0px 12px 0 !important;
        }

        #additionalResourcesSec .productResources__cards {
            margin-bottom: 58px;
        }

        #additionalResourcesSec {
            padding-bottom: unset;
        }

        #additionalResourcesSec .productResourcesSection:before {
            background: unset !important;
        }

        #additionalResourcesSec .productResources__cards {
            margin-bottom: 58px;
        }

        #additionalResourcesSec {
            padding-bottom: unset;
        }

        #ultimaKeyBenefitsSec .section_tabs {
            padding-top: 56px;
        }

        #networkingAndStorage .productFeatures {
            padding-bottom: unset;
        }

        #containerNativeData .productBenefits .newSection__header {
            padding-top: unset;
        }

        #additionalResourcesSec:before {
            background-color: unset;
        }

        #additionalResourcesSec .productResources .newSection__header h2 {
            margin-bottom: 45px;
        }

        #ultimaKeyBenefitsSec {
            margin-top: 50px !important;
        }

        #networkingAndStorage .productFeatures__diagram-img--mobile {
            margin-bottom: 35px;
        }

        #ultimaServiceSec .productBenefits__cards {
            margin-top: unset;
        }

        #diamantiHomeDataSec {
            padding: unset;
        }

        #ultimaKeyBenefitsSec .section_tabs {
            padding: 56px 0 90px 0;
        }
    }

    @media (max-width: 480px) {
        #ultimaData .newHero--product .newHero__image {
            height: unset;
        }

        #highPerformanceDataSln .productFeatures__container {
            margin-top: unset;
        }

        #networkingAndStorage .productFeatures .newSection__header {
            padding-bottom: 60px;
            padding-top: 60px;
        }

        #ultimaData .newHero.newHero--left.newHero--product {
            padding-bottom: unset;
        }

        #additionalResourcesSec .productResources .newSection__header h2 {
            padding-top: unset;
        }


        #ultimaKeyBenefitsSec .cardsBlock:before {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI0MTUiIGhlaWdodD0iMTI4MSIgdmlld0JveD0iMCAwIDQxNSAxMjgxIj4KICAgIDxwYXRoIGZpbGw9IiMyNDkyQzMiIGZpbGwtcnVsZT0iZXZlbm9kZCIgZD0iTTAuMDI2IDI2LjAyTDg5LjI1NyAwIDQxNC4xMiA1Ny41MTcgNDE0LjAwNiAxMjgwLjg3IDAuMDQyIDEyODAuODY5eiIvPgo8L3N2Zz4K) !important;
            background-position: left;
            left: 0;
            transform: scaleY(-1);
            background-size: contain;
        }

        #ultimaKeyBenefitsSec .benefit-h {
            padding-top: 47px;
        }

        #ultimaKeyBenefitsSec .benefit_title {
            margin-bottom: unset;
        }

        #containerNativeData .productBenefits__cards {
            margin-top: 25px;
        }
    }

    @media (max-width: 380px) {
        .benefit-right img {
            width: 100% !important;
        }

        #spektraFeaturesSec .featureList__list {
            padding: unset;
        }

        #containerNativeData .productBenefits__cards {
            margin: 20px 40px;
        }
    }

    /*css-spek*/
    @media (max-width: 480px) {
        #spektraKeyBenefit .productFeatures.productFeatures--spektra::before {
            background-position: left;
        }

        #spektraKeyBenefit img.productFeatures__diagram-img--mobile {
            margin-bottom: 15px;
        }
    }

    @media (max-width: 991px) {
        #spektraData .newHero__title {
            letter-spacing: normal;
        }

        #spektraData a.newHero__button.btn.btn-action {
            width: 100%;
            left: unset;
            margin-left: auto;
        }

        #spektraData a.newHero__button.btn.btn-action.contact-Sales {
            width: 100%;
            left: unset;
            margin-left: auto;
        }

        .page-id-13280 #spektraData .newHero--product .newHero__image {
            margin-top: 65px;
        }

        .page-id-13280 #spektraData .newHero.newHero--left.newHero--product {
            padding-bottom: 47px;
        }

        #spektraKeyBenefit .productFeatures.productFeatures--spektra::before {
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI0MTUiIGhlaWdodD0iMTI4MSIgdmlld0JveD0iMCAwIDQxNSAxMjgxIj4KICAgIDxwYXRoIGZpbGw9IiMyNDkyQzMiIGZpbGwtcnVsZT0iZXZlbm9kZCIgZD0iTTAuMDI2IDI2LjAyTDg5LjI1NyAwIDQxNC4xMiA1Ny41MTcgNDE0LjAwNiAxMjgwLjg3IDAuMDQyIDEyODAuODY5eiIvPgo8L3N2Zz4K) !important;
            min-width: 415px;
            background-size: cover;
            background-position: unset;
        }

        .page-id-13280 #spektraKeyBenefit .productFeatures .newSection__header {
            padding-top: 81px;
        }

        #spektraKeyBenefit .benefit-wrapper {
            display: unset !important;
        }

        #spektraKeyBenefit .benefit-left {
            width: 100%;
            text-align: center;
            padding: unset !important;
        }

        #spektraKeyBenefit .benefit-left {
            width: 100%;
            text-align: center;
            padding: unset !important;
        }

        #spektraKeyBenefit .benefit-right {
            width: 100%;
            text-align: center;
            padding: unset !important;
        }

        #spektraKeyBenefit .benefit-left .benefit-p {
            width: 100%;
            margin-bottom: 2rem;
        }

        #spektraFeaturesSec .featureList {
            background-color: #f7f7f9;
            padding-bottom: 15px;
        }

        #spektraKeyBenefit .benefit-h {
            padding-top: 47px;
        }

        #expandingKubernetes .productFeatures.productFeatures--d20 {
            padding-bottom: 15px;
        }

        #spektraKeyBenefit img.productFeatures__diagram-img--mobile {
            margin-bottom: unset;
        }

        #spektraFeaturesSec .featureList--spektra {
            padding-top: 56px;
        }

        #additionalResourcesSec .productResources .newSection__header h2 {
            padding-top: unset;
        }

        #spektraKeyBenefit .benefit_title {
            margin-bottom: unset;
        }

        #expandingKubernetes .productFeatures__container {
            margin-top: 50px;
        }
        #additionalResourcesSec {
            margin-top: -150px;
        }


    }
    .page-id-701 .ctaBlock__title {
        letter-spacing: normal;
    }

    #diamantiHomeDataSec a.btn.btn-action.learn-more-btn:hover {
        background-color: #6ac613;
    }
    .cardsBlock a.tabsBlock__tab__button.btn.btn-action.tabs_learmore:hover {
        background-color: #6ac613;
    }

    .page-id-701 .partner_card .btn-action:hover{
        background-color: #6ac613;

    }
    .why-hero-buttons a.why-hero-btn.btn.btn-outline.req-demo-btn:hover {
        /* background-color: #6ac613; */
    }
    #spektraData a.newHero__button.btn.btn-action.contact-Sales:hover {
        background-color:#6ac613 !important;
    }
    #spektraData a.newHero__button.btn.btn-action:hover{
        background-color:#6ac613 !important;
        color:black;
    }
    #ultimaData a.newHero__button.btn.btn-action:hover {
        background-color:#6ac613 !important;
        color:black;
    }
    #ultimaData a.newHero__button.btn.btn-action.contact-Sales:hover {
        background-color:#6ac613 !important;
    }
    h2.ctaBlock__title {
        letter-spacing: normal;
    }
    a.ctaBlock__button.btn.btn-action:hover {
        background-color: #6ac613 !important;
    }
    .why-hero-buttons .why-hero-btn.contact-btn:hover {
        background-color:rgba(147,213,0,.85) !important;
    }
    .section_tabs .card_body_text {
        min-height: 152px;
    }

    .secondary-menu .menu-item a{
        font-size: 14px;
    }
    .primary-menu__nav-link span {
        font-size: 16px;
    }
    @media (min-width: 992px) {
        .page-id-13280 .productFeatures__diagram {
            flex-wrap: wrap;
            padding-top:20px;
            padding-bottom: 20px;
        }
    }
    .page-id-13280 .productFeatures__diagram {
        padding-top:80px;
        padding-bottom: 80px;
    }

    @media (max-width: 991px){
        #additionalResourcesSec .productResources__card {
            flex: unset;
            -ms-flex: unset;
        }
        #resourcesSection .productResources__card {
            flex: unset;
            -ms-flex: unset;
        }

    }
</style>

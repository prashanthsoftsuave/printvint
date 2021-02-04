{{--
  Template Name: Single Product
--}}

@extends('layouts.app')
@section('content')
    @while(have_posts()) @php(the_post())
    @include('blocks.newHero')
    @include('partials.content-page')


    @endwhile
@endsection
<style>
    /* about css*/
    .page-id-13512 #leadership {
        background-image: linear-gradient(203deg, #2492c3 36%,#4ac4e3 85%, #4ac4e3 80%);
        z-index: 1;
    }
    #leadership .staff-member{
        background: #fff;
        text-align: center;
        margin: 30px;
        border-radius: 5px;
        box-shadow: 0 0 4px 0 rgba(0, 0, 0, 0.50);
    }
    #leadership .staff-member img {
        width: 65%;
        margin-top: 30px;
        border-radius: 5px;
    }
    @media (min-width: 576px){
        #leadership .col-sm-4 {
            max-width: 27.33333%;
        }}
    #leadership .productFeatures__container {
        max-width: 1100px !important;
    }
    .page-id-5100 #aboutgetdirections {
        display: none;
    }
    .page-id-5100 #aboutcontactus{
        display: none;
    }
    .page-id-5100 #advisors{
        display: none;
    }
    .page-id-5100 #customerch {
        display: none;
    }
    section .cardsBlock__container, section .container, section .ctaBlock__container, section .featureList__container, section .headerCta__container, section .logoList__container, section .newHero__container, section .productFeatures__container, section .quoteBlock__container, section .tabsBlock__container, section .technologyList__container, section .useCase__container {
        max-width: 1024px !important;
        margin: auto;
    }
    .site-footer .container {
        max-width: 1180px !important;

    }
    .header__container {
        max-width: 1024px;
    }
    .page-id-13512 #boardmenbers {
        background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMjAwIiBoZWlnaHQ9IjE0MTQiIHZpZXdCb3g9IjAgMCAxMjAwIDE0MTQiPgogICAgPGcgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIiBzdHJva2U9IiM1RjVGNUYiIHN0cm9rZS13aWR0aD0iLjUiIG9wYWNpdHk9Ii4yIj4KICAgICAgICA8cGF0aCBkPSJNNDUuNzEyIDcwNC45NjdMMTc4LjAyMiA4MDEuMTk5IDI0LjQxNCA4NTUuNTIzeiIgdHJhbnNmb3JtPSJyb3RhdGUoOTAgNTk5LjE3MSA1OTkuNjgpIi8+CiAgICAgICAgPHBhdGggZD0iTTE3Ny44NDYgODAxLjA5OUw0NS43MTIgNzA0Ljk2NyAyMzEuOTM3IDY0OS4wMTd6IiB0cmFuc2Zvcm09InJvdGF0ZSg5MCA1OTkuMTcxIDU5OS42OCkiLz4KICAgICAgICA8cGF0aCBkPSJNMjMxLjkzNyA2NDkuMDE3TDQ1LjcxMiA3MDQuOTY3LjUwOSA1NTguOTg5ek0yMzEuOTM3IDY0OS4wMTdMNDAwLjY2IDgyNS42NSA0MDAuODA0IDY0OS4wMTd6IiB0cmFuc2Zvcm09InJvdGF0ZSg5MCA1OTkuMTcxIDU5OS42OCkiLz4KICAgICAgICA8cGF0aCBkPSJNMTc3Ljg0NiA4MDEuMDk5TDI2Ny41NjEgMTAwMS43OCA0MDAuNzU1IDgyNS42Mjh6TTI0LjQxNCA4NTUuNTIzTDE0OS40MjkgOTMzLjI1NyAxNzcuODQ2IDgwMS4wOTl6TTE0OS40MjkgOTMzLjI1N0w2NC45NjggMTA1My45MjYgMjY3LjU2MSAxMDAxLjc4IDI5Ny4wNDIgMTE1OS4wMDQgMjQuNDE0IDExNzEuODkzIDI2Ny41NjEgMTAwMS43OHpNNjAwLjY5NyAxMDA3LjQ3Mkw1MTEuMjg3IDEwNzEuMTg0IDQzMy42NTMgOTU4LjAyMyA1OTguOTI1IDc1Mi43NzkgNjU1LjEyMSA4OTMuMTAxIDQzMy42NTMgOTU4LjAyM3oiIHRyYW5zZm9ybT0icm90YXRlKDkwIDU5OS4xNzEgNTk5LjY4KSIvPgogICAgICAgIDxwYXRoIGQ9Ik0yMzEuOTM3IDY0OS4wMTdMMTkwLjA5OSA0ODkuOTQzIDQwMC43NTUgNjQ5LjM0MiA0MDEuMzEyIDQwMy43NzcgNTk5LjE3MSA1MDcuNDY1IDQwMC43NTUgNjQ5LjM0MiA1OTkuMTcxIDc1Mi43MjMgNDAwLjc1NSA4MjUuNjI4IDQzMy42NTMgOTU4LjAyMyAyNjcuNTYxIDEwMDEuNzggNTExLjI4NyAxMDcxLjE4NCAyOTcuMDQyIDExNTkuMDA0IiB0cmFuc2Zvcm09InJvdGF0ZSg5MCA1OTkuMTcxIDU5OS42OCkiLz4KICAgICAgICA8cGF0aCBkPSJNNTQuOTMyIDMzOC43NUwwLjUwOSA1NTguOTg5IDE5MC4wOTkgNDg5Ljk0MyA0MDEuMzEyIDQwMy43NzcgMjMxLjkzNyAzMzQuMTc0IDE5MC4wOTkgNDg5Ljk0M3oiIHRyYW5zZm9ybT0icm90YXRlKDkwIDU5OS4xNzEgNTk5LjY4KSIvPgogICAgICAgIDxwYXRoIGQ9Ik01NC45MzIgMzM4Ljc1TDIwMC45MTEgMjE0LjI0NCAyMzEuOTM3IDMzNC4xNzR6IiB0cmFuc2Zvcm09InJvdGF0ZSg5MCA1OTkuMTcxIDU5OS42OCkiLz4KICAgICAgICA8cGF0aCBkPSJNMjAwLjkxMSAyMTQuMjg1TDU0LjkzMiAzMzguNzUgNTQuNDI0IDEwNS4xNzR6IiB0cmFuc2Zvcm09InJvdGF0ZSg5MCA1OTkuMTcxIDU5OS42OCkiLz4KICAgICAgICA8cGF0aCBkPSJNMjAwLjkxMSAyMTQuMjg1TDU0LjQyNCAxMDUuMTc0IDIzNi41MTUuNTA5ek0yMzEuOTM3IDMzNC4xNzRMNDAxLjMxMiA0MDMuNzc3IDM4Ni40MTYgMjE0LjI0NHpNMjM2LjUxNS41MDlMMzk0LjQyNCA3NS42MDggNDg3Ljc4LjUwOSA0NzguMzg5IDEzNi4yNTYgMzk0LjQyNCA3NS42MDhNNTk5LjE3MSA1MDcuNDY1TDc5NS41MDQgNjAwLjkxOCA1OTkuMTcxIDc1Mi43Nzl6IiB0cmFuc2Zvcm09InJvdGF0ZSg5MCA1OTkuMTcxIDU5OS42OCkiLz4KICAgICAgICA8cGF0aCBkPSJNMzg2LjQxNiAyMTQuMjQ0TDM5NC40MjQgNzUuNjA4IDIwMC45MTEgMjE0LjI0NCAzODYuNDE2IDIxNC4yNDQgNDc4LjM4OSAxMzYuMjU2IDQwMS4zMTIgNDAzLjc3NyA2NDUuMjQ1IDM4Ni4yMzEgNTk5LjE3MSA1MDcuNDY1IDU5OS4xNzEgNzUyLjc3OSA4NTguNzc2IDcxOS45NDUgNjU1LjEyMSA4OTMuMTAxIDgyMi40NjIgMTA0Mi4wMjQgNzczLjU4NyA3OTIuNDIgOTMzLjg1MiA5MjEuMDU4IDg1OC43NzYgNzE5Ljk0NSAxMDIxLjUyNyA2ODUuNzMzIDc5NS41ODkgNjAwLjY5NyA4NTguNzc2IDcxOS45NDUgMTExOS4wMTggODQ2LjM2NyIgdHJhbnNmb3JtPSJyb3RhdGUoOTAgNTk5LjE3MSA1OTkuNjgpIi8+CiAgICAgICAgPHBhdGggZD0iTTY1NS4xMjEgODkzLjEwMUw2MDAuNjk3IDEwMDcuNDcyIDgyMi40NjIgMTA0Mi4wMjQgNjI0LjYwMyAxMTcxLjg5M3pNNTExLjI4NyAxMDcxLjE4NEw2MjQuNjAzIDExNzEuODkzTTgyMi40NjIgMTA0MS44MjRMOTMzLjg1MiA5MjEuMDU4IDEwMTQuNzI1IDExOTcuODM0ek03OTUuNTg5IDYwMC42OTdMODY3Ljc0OCAzNTkuNjA0IDY0NS4yNDUgMzg2LjIzMSA5ODMuMTkgNDgyLjk3NXoiIHRyYW5zZm9ybT0icm90YXRlKDkwIDU5OS4xNzEgNTk5LjY4KSIvPgogICAgICAgIDxwYXRoIGQ9Ik03OTUuNTA0IDYwMC45MThMNjQ1LjI0NSAzODYuMjMxIDY3OC40MzcgMjE1LjY2MSA0MDEuMzEyIDQwMy43NzcgNTk5LjE3MSA1MDcuNDY1ek0xMTYwLjEzOCAxMDA2LjU4N0w5MzMuODUyIDkyMS4wNTggMTExOS4wMTggODQ2LjM2N3pNMTAxNC43MjUgMTE5Ny44MzRMMTE2MC4xMzggMTAwNi41ODcgMTQxMi40NzcgMTE5Ni44MTZ6IiB0cmFuc2Zvcm09InJvdGF0ZSg5MCA1OTkuMTcxIDU5OS42OCkiLz4KICAgICAgICA8cGF0aCBkPSJNMTExOS4wMTggODQ2LjM2N0wxMDIxLjUyNyA2ODUuNzMzIDk4Mi40NjggNDgyLjk1NSA4NjcuMjE1IDM1OS45MTIgMTA4Ny4yNzQgMjM0LjkwNCA5MzMuNjgzIDE2OC4wMzIgNzg4LjM1MyAzLjU2IDY3OC40MzcgMjE1LjY2MSA5MzMuNjgzIDE2OC4wMzIgODY3LjIxNSAzNTkuOTEyIDY3OC40MzcgMjE1LjY2MSA0NzguMzg5IDEzNi4yNTYgNzg4LjM1MyAzLjU2IDExMDYuNDU2IDEuNTI2IDEwODcuMjc0IDIzNC45MDQgOTgzLjE5IDQ4Mi45NTVNOTMzLjY4MyAxNjguMDMyTDExMDYuNDU2IDEuNTI2IiB0cmFuc2Zvcm09InJvdGF0ZSg5MCA1OTkuMTcxIDU5OS42OCkiLz4KICAgIDwvZz4KPC9zdmc+Cg==);
        background-size: cover;
        margin-top: -150px;
        padding-top: 150px;
    }
    .footer-widgets #menu-item-9367 {
        margin-right: 25px;
    }
    #aboutbanner .newSection__header p {
        color: #000;
    }
    #aboutbanner .newSection__header h3 {
        font-size: 35px;
        text-align: center;
        color: #2b2b2b;
        font-weight: 600;
    }
    #aboutlgslide .abtse2s1{
        font-size: 36px;
        font-stretch: normal;
        font-style: normal;
        line-height: 1.53;
        letter-spacing: normal;
        text-align: center;
        color: #ffffff;
    }
    #aboutbanner {
        padding-top: 425px;
        min-height: 841px;
        padding-bottom: 170px;
    }
    #aboutbanner:before {
        content: "";
        background-color: #fff !important;
    }
    #aboutlgslide {
        background: url(/wp-content/uploads/2020/11/io-image.png);
        background-size: cover;
        margin-top: -240px;
        /*background-size: 2800px;*/
    }
    #aboutlgslide .productFeatures.productFeatures--spektra {
        padding-bottom: unset;
    }
    .abtse2s1p2{
        font-size: 24px;
        font-stretch: normal;
        font-style: normal;
        line-height: normal;
        letter-spacing: normal;
        text-align: center;
        color: #2492c3;
        margin-top: 80px;
    }
    #leadership .productFeatures .newSection__header {
        padding: 20px 0 90px;
    }
    #leadership .staff-member h3 {
        font-size: 17px;
        font-weight: 600;
        font-stretch: normal;
        font-style: normal;
        line-height: normal;
        letter-spacing: normal;
        color: #024f71 !important;
    }
    #aboutlgslide .productFeatures .newSection__header {
        padding: 150px 0 90px;
    }
    #leadership .staff-member strong {
        font-size: 14px;
        font-weight: normal;
        font-stretch: normal;
        font-style: normal;
        line-height: 1.21;
        letter-spacing: normal;
        text-align: center;
        color: #494949;
    }
    #leadership .productFeatures {
        padding-bottom: 30px;
    }
    #boardmenbers .staff-member .fa {
        display: none;
    }
    #boardmenbers .productFeatures .newSection__header {
        padding: 92px 0 67px;
    }
    #boardmenbers .productFeatures .newSection__header h3 {
        font-size: 35px;
        font-weight: 600;
        font-stretch: normal;
        font-style: normal;
        line-height: 1.2;
        letter-spacing: normal;
        text-align: center;
        color: #00668e;
    }
    #aboutdiscover img.productResources__card__image {
        width: 212px;
        height: auto;
        max-width: 191px;
    }
    #aboutdiscover .productResources__card {
        background: #fff;
    }
    #aboutdiscover .productResources__card__title {
        color: #000;
    }
    #aboutdiscover a.productResources__card__link.productResources__card__link--webpage {
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
    #aboutdiscover .productResources__card:nth-child(4) {
        margin-left: 10px;
    }
    #aboutdiscover .productResources .newSection__header h2{
        color: #ffffff;
        font-size: 35px;
        font-weight: 600;
    }
    #aboutdiscover {
        margin: unset;
        padding: unset;
        background: url(/wp-content/uploads/2020/11/bottom-texture-wide@3x.png);
        background-repeat: no-repeat;
        padding-top: 74px;
        background-size: 130% 775px;
        min-height: 800px;
    }
    #aboutdiscover:before{
        content: "";
        background-image:unset;
    }
    #boardmenbers .productFeatures {
        padding-bottom: unset;
    }
    #aboutdiscover .productResources__cards {
        margin: auto;
        padding-top: unset;
    }
    #boardmenbers .staff-member img{
        border:unset;
    }
    #boardmenbers .staff-member {
        border: 1px solid #aaa;
        background: #fff;
        margin: 15px;
        border-radius: 5px;
    }
    #boardmenbers .staff-member h3{
        font-size: 17px;
        font-weight: 600;
        font-stretch: normal;
        font-style: normal;
        line-height: normal;
        letter-spacing: normal;
        text-align: center;
        color: #2b2b2b;
    }
    @media (min-width: 1276px) {
        #boardmenbers .staff-members .col-sm-3{
            max-width: 22%;
        }}

    #aboutdiscover .productResources__card__title{
        padding-bottom: 36px;
        padding-top: 17px;
    }
    #aboutdiscover .productResources__card {
        height: 258px;
        padding-bottom: 24px;
        padding-top: 12px;
        max-width: 220px;
        margin: 0 10px;
        min-height: 258px;
    }
    .page-id-13512 .productFeatures__col.productFeatures__col--list {
        display: block;
        margin:unset;
    }
    .page-id-13512 .productFeatures__col{
        display: none;
    }
    #boardmenbers .productFeatures__container{
        max-width: 1360px !important;
    }
    #boardmenbers .container.staff-members {
        max-width: 1271px !important;
    }
    #boardmenbers .staff-members .col-sm-3{
        padding: 19px 32px;
    }
    #aboutdiscover .productResources {
        max-width: 970px;
    }
    @media (max-width:991px){
        #aboutlgslide .abtse2s1{
            font-size: 16px;
        }
        #aboutlgslide .productFeatures__col--list{
            padding: 0 30px;
        }
        #aboutbanner{
            margin-top: -470px;
            padding-top: 405px;
            padding-bottom: 290px;
        }
        #leadership .productFeatures__diagram .productFeatures__item p {
            font-size: 18px !important;
        }
        #leadership .productFeatures__col--list {
            padding: 0px 20px;
        }
        #aboutdiscover .productResources__card{
            margin: 10px;
        }
        #aboutdiscover{
            background-size: unset;
        }
        #aboutlgslide {
            background: url(/wp-content/uploads/2020/11/io-image-mobile-1.png);
            background-size: cover;
            /*margin-top: -240px;*/
        }
        #aboutlgslide .productFeatures .newSection__header {
            padding: 50px 0 65px;
        }
        #aboutdiscover .productResources__cards{
            padding-bottom: 55px;
        }
        .page-id-13512 #boardmenbers{
            background-size: unset;
            padding-bottom: 50px;
        }
        #aboutdiscover .productResources__card {
            flex: unset;
            -ms-flex: unset;
        }

    }
</style>




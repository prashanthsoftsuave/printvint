@if($newTechnologyBlock)
    <section class="section newSection">
        {{--<div class="technologyList">
            <div class="technologyList__container">
                @include('blocks.newSectionHeader', array('data' => $newTechnologyBlock))
                @php(list($primaryListRow1, $primaryListRow2) = array_chunk($newTechnologyBlock['primary_logo_list'], ceil(count($newTechnologyBlock['primary_logo_list']) / 2)))
                <div class="technologyList__rows">
                    <div class="technologyList__row">
                        @foreach($primaryListRow1 as $logo)
                            <div class="technologyList__logo technologyList__logo--tooltip">
                                @if($logo['link']) <a href="{{ $logo['link'] }}" class="technologyList__logo__link"> @endif
                                    <img
                                        class="technologyList__logo__image"
                                        src="{{ $logo['logo']['url'] }}"
                                        alt="{{ $logo['logo']['alt'] }}"
                                    />
                                @if ($logo['tooltip_text'])
                                    <p class="technologyList__logo__tooltip">{{ $logo['tooltip_text'] }}</p>
                                @endif
                                @if($logo['link']) </a> @endif
                            </div>
                        @endforeach
                    </div>
                    <div class="technologyList__row">
                        @foreach($primaryListRow2 as $logo)
                            <div class="technologyList__logo {{ $logo['tooltip_text'] ? 'technologyList__logo--tooltip' : ''}}">
                                @if($logo['link'])
                                    <a href="{!! $logo['link'] !!}">
                                        <img
                                            class="technologyList__logo__image"
                                            src="{{ $logo['logo']['url'] }}"
                                            alt="{{ $logo['logo']['alt'] }}"
                                        />
                                    </a>
                                @else
                                    <img
                                        class="technologyList__logo__image"
                                        src="{{ $logo['logo']['url'] }}"
                                        alt="{{ $logo['logo']['alt'] }}"
                                    />
                                @endif
                                @if ($logo['tooltip_text'])
                                    <p class="technologyList__logo__tooltip">{{ $logo['tooltip_text'] }}</p>
                                @endif
                            </div>
                        @endforeach
                    </div>
                    <div class="technologyList__row technologyList__row--secondary">
                        @foreach($newTechnologyBlock['secondary_logo_list'] as $logo)
                            <div class="technologyList__logo">
                                <img
                                    class="technologyList__logo__image"
                                    src="{{ $logo['logo']['url'] }}"
                                    alt="{{ $logo['logo']['alt'] }}"
                                />
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>--}}
<!--        <div class="journey_card_section">-->
<!--            <div class="quoteBlock__container">-->
<!--                    <div class="journey-card">-->
<!--                        <h3 class="journey_card_title">Take the next step in your Kubernetes journey</h3>-->
<!--                        <div class="journey_card_wrap">-->
<!--                            <div class="journey_card_left">-->
<!--                                <div class="journey_card journey_card_big" onclick="location.href='/announcing-spektra-3-1-and-diamanti-central-customer-portal/';" style="cursor: pointer;">-->
<!--                                    <img src="/wp-content/uploads/2020/12/blog-post-image@3x.png" class="card-img ">-->
<!--                                    <div class="big_card_content">-->
<!--                                    <h4 class="blog-title">Blog Post</h4>-->
<!--                                    <p class="blog_txt">-->
<!--                                        Announcing Diamanti Spektra 3.1 and <br> Diamanti Central-->
<!--                                    </p>-->
<!--                                    </div>-->
<!--                                    <img src="/wp-content/uploads/2020/10/link-green.svg">-->
<!--                                </div>-->
<!--{{--                                <div class="journey_card journey_card_small visible-sm-fl" onclick="location.href='https://www.techrepublic.com/article/how-diamanti-wants-to-bridge-kubernetes-into-the-cloud/';" style="cursor: pointer;">--}}-->
<!--                                <div class="journey_card journey_card_small visible-sm-fl" onclick="window.open('https://thenewstack.io/diamanti-extends-kubernetes-stateful-storage-reach-and-support-for-aws/', '_blank')" style="cursor: pointer;">-->
<!--                                <img src="/wp-content/uploads/2020/12/latest-news-i@3x.png" class="card-img ">-->
<!--                                    <div class="small_card_content">-->
<!--                                        <h4 class="blog-title">Latest News</h4>-->
<!--                                        <p class="blog_txt">-->
<!--                                            The New Stack: Diamanti Extends Kubernetes Stateful Storage Reach and Support for AWS-->
<!--                                        </p>-->
<!--                                        <img src="/wp-content/uploads/2020/10/link-green.svg" >-->
<!--                                    </div>-->

<!--                                </div>-->
<!--                                <div class="journey_card journey_card_small" onclick="location.href='https://diamanti.com/solutions/database';" style="cursor: pointer;">-->
<!--                                    <img src="/wp-content/uploads/2020/10/use-case-image.png" class="card-img blog-img">-->
<!--                                    <div class="small_card_content">-->
<!--                                        <h4 class="blog-title">Use Cases</h4>-->
<!--                                        <p class="blog_txt">-->
<!--                                            Go deeper into use cases to learn more about Diamanti-->
<!--                                        </p>-->
<!--                                        <img src="/wp-content/uploads/2020/10/link-green.svg">-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="journey-card-right">-->
<!--{{--                                <div class="journey_card journey_card_small hidden-xs" onclick="location.href='https://www.techrepublic.com/article/how-diamanti-wants-to-bridge-kubernetes-into-the-cloud/';" style="cursor: pointer;">--}}-->
<!--                                <div class="journey_card journey_card_small hidden-xs" onclick="window.open('https://thenewstack.io/diamanti-extends-kubernetes-stateful-storage-reach-and-support-for-aws/', '_blank')" style="cursor: pointer;">-->
<!--                                    <img src="/wp-content/uploads/2020/12/latest-news-i@3x.png" class="card-img ">-->
<!--                                    <div class="small_card_content">-->
<!--                                        <h4 class="blog-title">Latest News</h4>-->
<!--                                        <p class="blog_txt">-->
<!--                                            The New Stack: Diamanti Extends Kubernetes Stateful Storage Reach and Support for AWS-->
<!--                                        </p>-->
<!--                                        <img src="/wp-content/uploads/2020/10/link-green.svg">-->
<!--                                    </div>-->

<!--                                </div>-->
<!--                                <div class="journey_card journey_card_big Rectangle-Copy-3" onclick="location.href='https://diamanti.com/resources/451-research-report-the-need-for-cloud-native-enterprise-storage-and-data-management/';" style="cursor: pointer;">-->
<!--{{--                                <div class="journey_card journey_card_big Rectangle-Copy-3" onclick="window.open('https://diamanti.com/resources/451-research-report-the-need-for-cloud-native-enterprise-storage-and-data-management/', '_blank')" style="cursor: pointer;">--}}-->
<!--                                    <img src="/wp-content/uploads/2020/12/upcoming-events-d-splunk@3x.png" class="card-img ">-->
<!--                                    <div class="big_card_content">-->
<!--                                        <h4 class="blog-title">451 Research Report</h4>-->
<!--                                        <p class="blog_txt">-->
<!--                                            The Need For Cloud-Native Enterprise Storage and Data Management-->
<!--                                        </p>-->
<!--                                        <img src="/wp-content/uploads/2020/10/link-green.svg">-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--            </div>-->
<!--        </div>-->
    @component('blocks.blogcard')
    @endcomponent
    </section>
@else
    <p class="alert-danger text-center m-5">There are no sections to display</p>
@endif

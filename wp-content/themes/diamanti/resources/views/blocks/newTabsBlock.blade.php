@if($newTabsBlock)
    @php($hash = uniqid())
    <section class="section newSection">
        {{--<div class="tabsBlock">
            <div class="tabsBlock__container">
                @include('blocks.newSectionHeader', array('data' => $newTabsBlock))
                <div class="tabsBlock__tabsWrapper">
                    <div class="tabsBlock__tabs" data-tabs="true" data-active-tab="0">
                        @foreach($newTabsBlock['tab_list'] as $k => $tab)
                            <div class="tabsBlock__tab" data-tab="{{$k}}">
                                <div class="tabsBlock__tab__preview">
                                    <h3 class="tabsBlock__tab__title">{!! $tab['tab_label']!!}</h3>
                                </div>

                                <div class="tabsBlock__tab__content">
                                    <h3 class="tabsBlock__tab__title-wrapper">
                                        <img class="tabsBlock__tab__icon" src="{{ $tab['card_content']['icon']['url'] }}"/>
                                        <span class="tabsBlock__tab__title">{!! $tab['title'] !!}</span>
                                    </h3>

                                    <h3 class="tabsBlock__tab__subtitle">
                                        {!! $tab['caption'] !!}
                                    </h3>
                                    <div class="tabsBlock__tab__description">
                                        {!! $tab['description']  !!}
                                        <ul>
                                            @foreach(explode("* ", $tab['card_content']['description']) as $li)
                                                @if(!empty(trim($li)))
                                                    <li>{{trim($li)}}</li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>

                                    <a class="tabsBlock__tab__button btn btn-action"
                                        href="{{ $tab['button']['url'] }}"
                                        target="{{ $tab['button']['target'] }}">
                                        {{ $tab['button']['title'] }}
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>--}}
        
    </section>
@else
    <p class="alert-danger text-center m-5">There are no sections to display</p>
@endif


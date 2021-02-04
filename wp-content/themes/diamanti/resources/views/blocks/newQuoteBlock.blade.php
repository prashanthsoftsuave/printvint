@if($newQuoteBlock)
    <section class="section newSection"
             id="{{ $productsInformation["section_id"] }}">
        <div class="quoteBlock">
            <div class="quoteBlock__container">
                @include('blocks.newSectionHeader', array('data' => $newQuoteBlock))
                <div class="quoteBlock__quote">
                    <blockquote>
                        {!! $newQuoteBlock['text'] !!}
                    </blockquote>
                    <p class="quoteBlock__author author_name">{!! $newQuoteBlock['author'] !!}</p>
                    <p class="quoteBlock__author">{!! $newQuoteBlock['company'] !!}</p>
                    @if($newQuoteBlock['logo'])
                    <img
                        class="quoteBlock__logo"
                        src="{{ $newQuoteBlock['logo']['url'] }}"
                        alt="{{ $newQuoteBlock['logo']['alt'] }}"
                    />
                    @endif
                </div>
            </div>
        </div>
    </section>
@else
    <p class="alert-danger text-center m-5">There are no sections to display</p>
@endif

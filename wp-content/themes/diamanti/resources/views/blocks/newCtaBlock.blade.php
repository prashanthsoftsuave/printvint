@if($newCtaBlock)
    <section class="section newSection">
        <div class="
            ctaBlock
            {{ isset($current_template) && $current_template == 'products' ? 'ctaBlock--withSectionOverlap': ''}}
        ">
            <div class="ctaBlock__container">
                <div class="ctaBlock__content">
                    <h2 class="ctaBlock__title">{!! $newCtaBlock['title'] !!} </h2>
                    <a class="ctaBlock__button btn btn-action" href="{{ $newCtaBlock['button']['url'] }}"
                       target="{{ $newCtaBlock['button']['target'] }}">{{ $newCtaBlock['button']['title'] }}</a>
                </div>
            </div>
        </div>
    </section>
@else
    <p class="alert-danger text-center m-5">There are no sections to display</p>
@endif

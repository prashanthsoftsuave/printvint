<div class="useCase__intro">
    <div class="useCase__stats">
        @foreach($newUseCase['item_list'] as $item)
            <div class="useCase__stats__item">
                <h3 class="useCase__stats__value">{!! $item['title'] !!}</h3>
                <p class="useCase__stats__text">{!! $item['caption'] !!}</p>
            </div>
        @endforeach
    </div>
    <a class="ctaBlock__button btn btn-action useCase__cta-btn" href="{!! $newUseCase['button']['url'] !!}" target="{!!
    $newUseCase['button']['target'] !!}">{!!$newUseCase['button']['title'] !!}</a>
</div>

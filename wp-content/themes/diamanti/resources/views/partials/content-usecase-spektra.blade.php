<div class="useCase__content">
    <h2 class="useCase__title">{!! $newUseCase['item_list'][0]['title'] !!}</h2>
    <img src="{!! $newUseCase['item_list'][0]['image']['url'] !!}" alt="{!! $newUseCase['item_list'][0]['image']['alt'] !!}"
         class="useCase__company-img">
    <p class="useCase__description">{!! $newUseCase['item_list'][0]['caption'] !!}</p>
    <a class="ctaBlock__button btn btn-action useCase__cta-btn" href="{!! $newUseCase['button']['url'] !!}" target="{!!
    $newUseCase['button']['target'] !!}">{!!$newUseCase['button']['title'] !!}</a>
</div>

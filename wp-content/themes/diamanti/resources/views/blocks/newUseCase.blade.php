@if($newUseCase)
    <section class="section newSection"
             id="{{ $newUseCase["section_id"] }}">
        <div class="useCase useCase--{{ $newUseCase['type'] }}">
            <div class="useCase__container">
                @include('blocks.newSectionHeader', array('data' => $newUseCase))
                @include('partials.content-usecase-'.$newUseCase['type'])
            </div>
        </div>
    </section>
@endif

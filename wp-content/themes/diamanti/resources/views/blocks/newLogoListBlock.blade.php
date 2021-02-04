@if($newLogoListBlock)
    <section class="section newSection"
             id="{{ $newLogoListBlock["section_id"] }}">
        <div class="logoList">
            <h3 class="logo_list_title">Improving outcomes in the enterprise</h3>
            <div class="logoList__container">
                @include('blocks.newSectionHeader', array('data' => $newLogoListBlock))
                <div class="logoList__columns">
                    @foreach($newLogoListBlock['logo_list'] as $logo)
                        <div class="logoList__column">
                            <div class="logoList__logo">
                                <img class="logoList__logo__image" src="{{ $logo['logo']['url'] }}"
                                     alt="{{ $logo['logo']['alt'] }}"/>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@else
    <p class="alert-danger text-center m-5">There are no sections to display</p>
@endif

@if($benefits)
    <section class="section newSection"
             id="{{ $benefits["section_id"] }}">
        <div class="benefits__content">
            <div class="newSection__header">
                <h2>{!! $benefits['section_title'] !!}</h2>
            </div>
                @foreach($benefits['benefit_list'] as $k => $benefit)
                    <div class="benefit__container benefit__container--{{ $benefit['position'] }}">
                        <img
                            class="benefit__image"
                            src="{{ $benefit['image']['url'] }}"
                            alt="{{ $benefit['image']['alt'] }}"
                        />
                        <div class="benefit__description">
                            <h3 class="benefit__title">{!! $benefit['title'] !!}</h3>
                            <p class="benefit__caption">{!! $benefit['caption'] !!}</p>
                        </div>
                    </div>
                @endforeach
        </div>
    </section>
@endif

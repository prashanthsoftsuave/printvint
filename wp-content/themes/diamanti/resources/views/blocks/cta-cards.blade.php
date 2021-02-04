<div class="cta-cards container mb-5">
  <div class="card-deck">
    @foreach($cta_cards as $cta_card)
      <div class="card">
        <div class="card-img-top text-center">
          <a href="{{ $cta_card['cta_'. $loop->iteration . '_link']['url'] ?? '' }}" target="{{ $cta_card['cta_'. $loop->iteration . '_link']['target'] ?? "" }}">
          <img src="{{ $cta_card['cta_'. $loop->iteration . '_icon']['url'] ?? "" }}" alt="{{ $cta_card['cta_'. $loop->iteration . '_icon']['alt'] ?? ""  }}">
          </a>
        </div>
        <div class="card-body">
          <div class="card-text text-center">
            {!!  $cta_card['cta_'. $loop->iteration . '_description'] ?? "" !!}
          </div>
        </div>
        <div class="card-footer text-center bg-white border-none">
          <a href="{{ $cta_card['cta_'. $loop->iteration . '_link']['url'] ?? "" }}" class="link-arrow" target="{{ $cta_card['cta_'. $loop->iteration . '_link']['target'] ?? "" }}">
            {{ $cta_card['cta_'. $loop->iteration . '_link']['title'] ?? "" }}
          </a>
        </div>
      </div>
    @endforeach
  </div>
</div>

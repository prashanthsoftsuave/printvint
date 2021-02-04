<div class="{{ ($data['staticSearch']) ? 'post-filter__static' : 'post-filter' }}">
    @if(isset($data['event']))
        @if($get_event_types)
            <ul class="post-filter__list">
                <li class="post-filter__item active {{ $data['staticSearch'] ? '' : 'post-filter__tile' }}" data-filter="all">All</li>
                @foreach($get_event_types as $event)
                    <li class="post-filter__tile post-filter__item" data-filter="{{ $event->slug }}">
                        {{ $event->name }}
                    </li>
                @endforeach
            </ul>
        @endif
    @else
        <span class="post-filter__label">Filter by:</span>
        <ul class="post-filter__list">
            @foreach($get_search_filter as $filter)
                <li class="post-filter__item {{ $data['staticSearch'] ? '' : 'post-filter__tile' }}" data-filter="{{ $filter['type'] }}">
                    @if($data['staticSearch'])
                        <a href="{{ get_home_url('/').'/?s='.urlencode(get_search_query()).'&filter='.$filter['type'] }}"
                           class="post-filter__tile">{{ $filter['label'] }}</a>
                    @else
                        {{ $filter['label'] }}
                    @endif
                </li>
            @endforeach
        </ul>
    @endif
</div>

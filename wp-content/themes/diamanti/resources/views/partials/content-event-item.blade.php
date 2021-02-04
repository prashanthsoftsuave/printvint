@if(wp_get_post_terms($post->ID, 'event_type'))
    @php($eventType = wp_get_post_terms($post->ID, 'event_type')[0])
@else
    @php($eventType = (object) array(
      'name' => 'other',
      'slug' => 'other',
    ))
@endif
@php($timeET = new DateTime(get_field('start_date'), new DateTimeZone('America/Los_Angeles')))
@php($timeET->setTimezone(new DateTimeZone('America/New_York')))
<div class="event-page__item event-page__item--{{ $eventType->slug }}">
    <a class="event-page__item__link" href="{{ (isset(get_field('event_link')['url'])) ? get_field('event_link')['url'] : the_permalink() }}">
        <div class="article result-card">
            <div class="card">
                <div class="event-page__item__type event-page__item__type--{{ $eventType->slug }}">{{ $eventType->name }}</div>
                {{ the_post_thumbnail('medium', ['class' => 'event-page__item__img']) }}
                <h3 class="event-page__item__title">{{ the_title() }}</h3>
                <div class="event-page__item__date">{{ date_i18n( "l d F, Y", strtotime( get_field('start_date') )) }}</div>
                <div class="event-page__item__time">
                    <span>{{ date_i18n( "ga", strtotime( get_field('start_date') )) }} PT / {{ $timeET->format('ga') }} ET</span>
                </div>
            </div>
        </div>
    </a>
</div>

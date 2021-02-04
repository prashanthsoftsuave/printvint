import $ from 'jquery';
import { MOBILE_BREAKPOINT } from '../util/constants';

const EVENT_PAGE_FILTERS_SELECTOR = `.event-page .post-filter__item`;
const EVENT_ITEM_SELECTOR = '.event-page__item';
const EVENT_UPCOMING_ITEM_SELECTOR = `.event-page__upcoming ${EVENT_ITEM_SELECTOR}`;
const EVENT_WEBINARS_ITEM_SELECTOR = `.event-page__webinars ${EVENT_ITEM_SELECTOR}`;
const EVENT_WEBINARS_ITEMS_SELECTOR = '.event-page__webinars .event-page__events';
const EVENT_WEBINARS_PAGINATION_SELECTOR = '.event-page__webinars .search-page-pagination';
const EVENT_PREV_PAGE_BTN_SELECTOR = '.search-page-pagination__arrow--prev';
const EVENT_NEXT_PAGE_BTN_SELECTOR = '.search-page-pagination__arrow--next';
const EVENT_PAGINATION_CONTENT_SELECTOR = '.search-page-pagination__content';
const SLIDES_IN_VIEW = 3;

class EventPage {
  constructor() {

    const $filters = $(`${EVENT_PAGE_FILTERS_SELECTOR}`);
    const $prevPageBtn = $(`${EVENT_PREV_PAGE_BTN_SELECTOR}`);
    const $nextPageBtn = $(`${EVENT_NEXT_PAGE_BTN_SELECTOR}`);
    const $webinarsItems = $(`${EVENT_WEBINARS_ITEMS_SELECTOR}`);
    const _self = this;

    $filters.on('click', (e) => {
      const $item = $(e.target);
      const $filter = $item.data('filter');
      $(`${EVENT_PAGE_FILTERS_SELECTOR}.active`).removeClass('active');
      $item.addClass('active');

      if ($filter === 'all') {
        $(`${EVENT_UPCOMING_ITEM_SELECTOR}`).hide().fadeIn();
      } else {
        $(`${EVENT_UPCOMING_ITEM_SELECTOR}`).hide();
        $(`${EVENT_UPCOMING_ITEM_SELECTOR}${EVENT_ITEM_SELECTOR}--${$filter}`).fadeIn();
      }

    });

    $webinarsItems.on('init reInit afterChange', function(event, slick, currentSlide) {

      if (_self.initSlider() && window.innerWidth > MOBILE_BREAKPOINT) {
        $(`${EVENT_WEBINARS_PAGINATION_SELECTOR}`).css('display', 'flex');

        const lastPage = Math.ceil(slick.slideCount/slick.options.slidesToShow);
        const currentPage = (!currentSlide) ? 1 : currentSlide/slick.options.slidesToShow + 1;

        $(`${EVENT_PAGINATION_CONTENT_SELECTOR}`).html('<span class="current">' + currentPage + '</span> of ' + lastPage);

        (currentPage === lastPage) ? $nextPageBtn.hide() : $nextPageBtn.show();
        (currentPage === 1) ? $prevPageBtn.hide() : $prevPageBtn.show();
      }
    });


    if (this.initSlider()) {
      $webinarsItems.slick({
        infinite: false,
        slidesToShow: SLIDES_IN_VIEW,
        slidesToScroll: SLIDES_IN_VIEW,
        draggable: false,
        dots: false,
        prevArrow: $prevPageBtn,
        nextArrow: $nextPageBtn,
        responsive: [
          {
            breakpoint: MOBILE_BREAKPOINT,
            settings: "unslick",
          },
        ],
      });
    }
  }

  initSlider() {
    return $(`${EVENT_WEBINARS_ITEM_SELECTOR}`).length > SLIDES_IN_VIEW;
  }
}

export default () => new EventPage();

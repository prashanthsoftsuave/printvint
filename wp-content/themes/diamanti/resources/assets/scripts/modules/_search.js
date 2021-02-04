import $ from 'jquery';

const SEARCH_PAGE_SELECTOR = '.search-page';
const SEARCH_PAGE_FILTER_ITEM_SELECTOR = `${SEARCH_PAGE_SELECTOR} .post-filter__item`;
export const SEARCH_FORM_PAGE_FIELD_SELECTOR = '.search-form-page__field';
const SEARCH_PAGE_NO_RESULTS_SELECTOR = '.search-form-results__lack';
const SEARCH_PAGE_CANCEL_ICON_SELECTOR = `${SEARCH_PAGE_SELECTOR} .search-form__icon--close`;

class Search {

  constructor() {

    this.$searchPageCancelIcon = $(`${SEARCH_PAGE_CANCEL_ICON_SELECTOR}`);
    this.$searchPageField = $(`${SEARCH_FORM_PAGE_FIELD_SELECTOR}`);

    this.init();

    $(`${SEARCH_PAGE_FILTER_ITEM_SELECTOR}`).on('mouseenter', e => this.setupSearchFilterLink(e));
    this.$searchPageCancelIcon.on('click', () => this.clearSearchInput());
    this.$searchPageField.on('input', e => this.toggleDisplayClearIcon(e));
  }

  init() {
    this.setupNoResultPage();
    this.addActiveClassOnFilters();
    this.showCancelIcon();
  }

  setupNoResultPage() {
    if($(`${SEARCH_PAGE_NO_RESULTS_SELECTOR}`).length) {
      $(`${SEARCH_PAGE_SELECTOR}`).addClass('search-page--no-results');
    }
  }

  addActiveClassOnFilters() {
    const url = new URL(window.location.href);
    const params = new URLSearchParams(url.search.slice(1));
    if (params.get('filter') !== '') {
      $(`${SEARCH_PAGE_FILTER_ITEM_SELECTOR}[data-filter=${params.get('filter')}]`).addClass('active');
    }
  }

  showCancelIcon() {
    if (this.$searchPageField.length && this.$searchPageField.val().length > 0) {
      this.$searchPageCancelIcon.attr( "style", "display: block;" );
    }
  }

  setupSearchFilterLink(e) {
    const $filterItem = $(e.currentTarget);
    const $filterLink = $filterItem.find('a');
    const url = encodeURI($filterLink.attr('href'));
    if (url) {
      const newSearchUrl = url.replace(/(s=)[^\\&]+/, '$1' + encodeURIComponent(this.$searchPageField.val()));

      $filterLink.attr('href', newSearchUrl);

      if($filterItem.hasClass('active')) {
        $filterLink.attr('href', newSearchUrl.replace(/(&filter=)[^\\&]+/, ''));
      }
    }
  }

  clearSearchInput() {
    this.$searchPageField.val('');
    $(`${SEARCH_PAGE_FILTER_ITEM_SELECTOR}.active`).removeClass('active');
    this.$searchPageCancelIcon.hide();
  }

  toggleDisplayClearIcon(e) {
    ($(e.currentTarget).val().trim().length > 0) ? this.$searchPageCancelIcon.show() : this.$searchPageCancelIcon.hide();
  }
}

export default () => new Search;

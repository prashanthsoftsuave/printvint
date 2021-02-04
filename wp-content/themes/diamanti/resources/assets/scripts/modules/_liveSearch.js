import $ from 'jquery';
import debounce from 'lodash/debounce';

// eslint-disable-next-line no-undef
const AJAX_URL = ajax_options.admin_ajax_url;

class LiveSearch {

  constructor() {
    this.$searchResults = $('.search-results');
    this.$searchForm = $('#searchModal');
    const $searchField = $('.search-form .search-field');
    $searchField.on('keyup', debounce(e => {
      if (e.target.value.length > 2) {
        this.pageSearch(e);
      }
    }, 400));
    $searchField.on('keypress', e => { if (e.which == '13') { e.preventDefault(); } });
    this.pageSearch = this.pageSearch.bind(this);
  }

  pageSearch({ target }) {

    this.showSearchSection();
    this.$searchResults.addClass('search-results__loading');
    this.$searchResults.find('.search-results__welcome').addClass('active');

    $.ajax({
      url: AJAX_URL,
      type: 'post',
      data: {
        action: 'data_fetch',
        keyword: target.value,
      },
      success: data => {
        this.$searchResults.removeClass('search-results__loading');
        this.$searchResults.find('.search-results__welcome').removeClass('active');
        this.$searchResults.find('.search-results__output').html( data );
      },
    });
  }

  showSearchSection() {
    $('#menu-primary-navigation').hide();
    $('.secondary-menu').hide();
    this.$searchForm.addClass('active');
    if (!this.$searchResults.hasClass('active')) {
      this.$searchResults.addClass('active');
      this.$searchResults.find('.search-results__welcome').addClass('active');
    }
  }
}

export default () => new LiveSearch;

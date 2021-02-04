import $ from 'jquery';
import throttle from 'lodash/throttle';
import { SEARCH_FORM_PAGE_FIELD_SELECTOR } from './_search';
import { isMobile } from '../util/responsive';
import scrollLock from '../util/scrollLock';
import debounce from 'lodash/debounce';

// eslint-disable-next-line no-undef
const AJAX_URL = ajax_options.admin_ajax_url;
const SEARCH_FORM_SELECTOR = '.search-form';
const SEARCH_ICON_SELECTOR = '.open-search-modal';
const SEARCH_ICON_CLOSE_SELECTOR = '.close-search-modal';
const MOBILE_MENU_ICON_SELECTOR = '.navbar-toggler';
const DYNAMIC_SEARCH_CANCEL_BTN_SELECTOR = '.search-form__cancel';
const SEARCH_LOADING_CLASSNAME = 'search-form-results__loading';
const SEARCH_WELCOME_SELECTOR = '.search-form-results__welcome';
const PREVIEW_SEARCH_ITEM_LINK_SELECTOR = '.search-form-results__item__link';
const PREVIEW_SEARCH_ITEM_SELECTOR = '.search-form-results__item';
const SEARCH_RESULTS_SELECTOR = '.search-form-results';
const DYNAMIC_SEARCH_FILTER_ITEM_SELECTOR = `${SEARCH_RESULTS_SELECTOR} .post-filter__item`;
const ACTIVE_FILTER_SELECTOR = `${DYNAMIC_SEARCH_FILTER_ITEM_SELECTOR}.active`;
const SEARCH_MODAL_SELECTOR = '#searchModal';
const SEARCH_FIELD_SELECTOR = '.search-field';
const SEARCH_RESULTS_OUTPUT_SELECTOR = '.search-form-results__output';
const INPUTS_SELECTOR = 'input, textarea, select, option';

export default class SearchPreview {
  constructor() {

    this.$searchResults = $(`${SEARCH_RESULTS_SELECTOR}`);
    this.$searchForm = $(`${SEARCH_FORM_SELECTOR}`);
    this.$dynamicSearchCloseIcon = $(`${SEARCH_ICON_CLOSE_SELECTOR}`);
    this.$dynamicSearchCancelBtn = $(`${DYNAMIC_SEARCH_CANCEL_BTN_SELECTOR}`);
    this.$mobileMenuButton = $(`${MOBILE_MENU_ICON_SELECTOR}`);
    this.$filters = $(`${DYNAMIC_SEARCH_FILTER_ITEM_SELECTOR}`);
    this.$searchPageField = $(`${SEARCH_FORM_PAGE_FIELD_SELECTOR}`);
    this.$searchModal = $(`${SEARCH_MODAL_SELECTOR}`);
    this.$searchField = this.$searchModal.find(`${SEARCH_FIELD_SELECTOR}`);
    this.currentSearchPhrase = this.$searchField.val();
    this.$searchResultsOutput = $(`${SEARCH_RESULTS_OUTPUT_SELECTOR}`);
    this.allInputs = $(`${INPUTS_SELECTOR}`).filter(':visible');

    this.openModalEvent = new Event('openModalEvent');

    this.$searchField.on('input', debounce(e => this.handleInsertSearchKeyword(e), 400));
    this.$searchField.on('focus', (e) => this.handleSearchInputFocus(e));
    this.$searchField.on('blur', () => this.clearFormElementsAttr());
    this.$searchModal.on('keydown', e => this.handleArrowNavigation(e));
    this.$filters.on('click', e => this.handleClickFilter(e));

    $(window).on('touchstart', (e) => this.removeSearchInputFocus(e));
    $(document).on('headerCollapseEvent', () => this.closeModal());

    $(`${SEARCH_ICON_SELECTOR}`).on( 'click', () => this.openModal() );
    this.$dynamicSearchCloseIcon.on( 'click', () => this.handleClickCloseIcon());
    this.$dynamicSearchCancelBtn.on( 'click', () => this.handleClickCancelBtn());
    this.$mobileMenuButton.on( 'click', () => this.toggleMobileSearch() );
    this.$searchResultsOutput.on('mouseleave', () => this.unsetActiveResultsItem());

    this.changeSearchPlacementThrottle = throttle(() => this.changeSearchPlacement(), 200, {trailing: true, leading: false});
    $(window).on('resize', this.changeSearchPlacementThrottle);
    this.changeSearchPlacement();
    this.isMobile = isMobile();
  }

  changeSearchPlacement() {
    const isMobileAfterResize = isMobile();
    if (isMobileAfterResize === this.isMobile) {
      return;
    }

    this.$searchFormMove = this.$searchForm.detach();

    if (isMobileAfterResize) {
      this.$searchFormMove.insertBefore($('#menu-primary-navigation'));
      this.$searchForm.removeClass('active');
      this.$dynamicSearchCloseIcon.hide();
      (this.$mobileMenuButton.attr('aria-expanded') === 'true') ? scrollLock.enable() : '';
    } else {
      scrollLock.disable();
      this.closeModal();
      this.$dynamicSearchCancelBtn.hide();
      this.$dynamicSearchCloseIcon.show();
      this.$searchFormMove.insertAfter($('.header__container'));
    }
    this.isMobile = isMobileAfterResize;
  }

  openModal() {
    this.$searchForm.addClass('active');
    this.$searchField.focus();
    document.dispatchEvent(this.openModalEvent);
  }

  closeModal() {
    $('#menu-primary-navigation').show();
    $('.secondary-menu').show();
    this.$searchForm.removeClass('active');
    this.$searchResults.removeClass('active');
    this.$searchField.val('');
    this.$searchForm.find('.modal').removeClass('active');
    this.$searchResultsOutput.html('');
    $(`${DYNAMIC_SEARCH_FILTER_ITEM_SELECTOR}.active`).removeClass('active');
    this.currentSearchPhrase = '';
  }

  toggleMobileSearch() {
    this.hideCancelBtn();

    if (this.$searchForm.is(':hidden')) {
      this.$searchField.focus();
      scrollLock.enable();
    } else {
      this.closeModal();
      scrollLock.disable();
    }
  }

  hideCancelBtn() {
    this.$dynamicSearchCancelBtn.hide();
    if(isMobile()) {
      this.$dynamicSearchCloseIcon.hide();
    }
  }

  handleClickCloseIcon() {
    if (isMobile()) {
      this.currentSearchPhrase = '';
      this.$searchField.val('');
      this.$dynamicSearchCloseIcon.hide();
      this.$searchResultsOutput.html( '' );
      this.$filters.removeClass('active');
    } else {
      this.closeModal()
    }
  }

  handleClickCancelBtn() {
    this.hideCancelBtn();
    this.closeModal();
  }

  handleClickFilter(e) {
    const $this = $(e.currentTarget);

    if ($this.hasClass('active')) {
      $this.removeClass('active');
    } else {
      this.$filters.removeClass('active');
      $this.addClass('active');
    }
    this.getDynamicSearchResults();
  }

  handleInsertSearchKeyword(e) {
    const searchPhrase = $(e.currentTarget).val().trim();

    if (isMobile()) {
      (searchPhrase.length > 0) ? this.$dynamicSearchCloseIcon.show() : this.$dynamicSearchCloseIcon.hide();
    }

    if (this.currentSearchPhrase !== searchPhrase && searchPhrase.length >= 1) {
      this.currentSearchPhrase = searchPhrase;
      this.getDynamicSearchResults({ keyword: searchPhrase });
    } else {
      this.currentSearchPhrase = '';
      this.$searchResultsOutput.html('');
    }
  }

  handleSearchInputFocus(e) {
    this.allInputs.not(e.currentTarget).attr('tabindex', -1);

    if(isMobile()) {
      $(`${DYNAMIC_SEARCH_CANCEL_BTN_SELECTOR}`).fadeIn();
      this.showSearchSection();
    }
  }

  handleArrowNavigation(e) {
    const keyPressed = e.which;
    const searchResultItems = $(`${PREVIEW_SEARCH_ITEM_SELECTOR}`);
    const activeResult = this.$searchResultsOutput.find('.active');

    if (keyPressed === 38 || keyPressed === 40) {
      e.preventDefault();

      if (activeResult.length) {
        activeResult.removeClass('active');
        if (keyPressed === 38) {
          activeResult.prev().addClass('active');
        } else {
          activeResult.next().addClass('active');
        }
      } else {
        searchResultItems.first().addClass('active');
      }
    } else if (keyPressed === 13) {
      if (activeResult.length) {
        e.preventDefault();
        window.open(activeResult.find('a').attr('href'), '_self');
      } else {
        this.$searchModal.submit();
      }
    } else if (keyPressed === 9) {
      e.preventDefault();
    } else if (keyPressed === 27) {
      this.handleClickCancelBtn();
    }
  }

  removeSearchInputFocus({ target : { tagName } }) {
    if (tagName === 'INPUT') {
      return;
    }
    if (this.$searchField.is(':focus')) { this.$searchField.blur(); }
    if (this.$searchPageField.is(':focus')) { this.$searchPageField.blur(); }
  }

  getDynamicSearchResults({ keyword = this.$searchField.val() } = {}) {

    this.showSearchSection();
    this.$searchResults.addClass(`${SEARCH_LOADING_CLASSNAME}`);
    this.$searchResults.find(`${SEARCH_WELCOME_SELECTOR}`).addClass('active');

    $.ajax({
      url: AJAX_URL,
      type: 'post',
      data: {
        action: 'data_fetch',
        keyword,
        filter: $(`${ACTIVE_FILTER_SELECTOR}`).length ? $(`${ACTIVE_FILTER_SELECTOR}`).data('filter') : '',
      },
      success: data => {
        this.$searchResults.removeClass(`${SEARCH_LOADING_CLASSNAME}`);
        this.$searchResults.find(`${SEARCH_WELCOME_SELECTOR}`).removeClass('active');
        this.$searchResultsOutput.html( data );
        this.highlightSearchResult(keyword);
        this.searchResultsHover();
      },
    });
  }

  searchResultsHover() {
    $(`${PREVIEW_SEARCH_ITEM_SELECTOR}`).on('mouseenter', (e) => {
      this.unsetActiveResultsItem();
      $(e.currentTarget).addClass('active');
    });
  }

  unsetActiveResultsItem() {
    $(`${SEARCH_RESULTS_OUTPUT_SELECTOR}`).find('.active').removeClass('active');
  }

  highlightSearchResult(highlightTerm) {
    const regExp = new RegExp(highlightTerm, 'gi');

    $(`${PREVIEW_SEARCH_ITEM_LINK_SELECTOR}`).map((i, item) => {
      const updateText = $(item).text().replace(regExp, phrase => `<span class="highlight">${phrase}</span>`);
      $(item).html(updateText);
    });
  }

  showSearchSection() {
    $('#menu-primary-navigation').hide();
    $('.secondary-menu').hide();
    this.$searchModal.addClass('active');
    if (!this.$searchResults.hasClass('active')) {
      this.$searchResults.addClass('active');
      this.$searchResults.find(`${SEARCH_WELCOME_SELECTOR}`).addClass('active');
    }
    this.$searchForm.addClass('active');
  }

  clearFormElementsAttr() {
    this.allInputs.not(this.$searchField).removeAttr('tabindex');
  }
}

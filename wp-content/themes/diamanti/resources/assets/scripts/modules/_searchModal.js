import $ from 'jquery';
import throttle from 'lodash/throttle';
import { SEARCH_RESULTS_SELECTOR, SEARCH_FIELD_SELECTOR, DYNAMIC_SEARCH_FILTER_ITEM_SELECTOR, SEARCH_RESULTS_OUTPUT_SELECTOR } from './_search';
import { isMobile } from '../util/responsive';
import scrollLock from '../util/scrollLock';

const SEARCH_FORM_SELECTOR = '.search-form';
const SEARCH_ICON_SELECTOR = '.open-search-modal';
export const SEARCH_ICON_CLOSE_SELECTOR = '.close-search-modal';
const MOBILE_MENU_ICON_SELECTOR = '.navbar-toggler';
export const DYNAMIC_SEARCH_CANCEL_BTN_SELECTOR = '.search-form__cancel';

export default class SearchModal {
  constructor() {
    this.openModal = this.openModal.bind(this);
    this.closeModal = this.closeModal.bind(this);
    this.toggleMobileSearch = this.toggleMobileSearch.bind(this);

    this.$searchResults = $(`${SEARCH_RESULTS_SELECTOR}`);
    this.$searchForm = $(`${SEARCH_FORM_SELECTOR}`);
    this.$searchField = this.$searchForm.find(`${SEARCH_FIELD_SELECTOR}`);
    this.$dynamicSearchCloseIcon = $(`${SEARCH_ICON_CLOSE_SELECTOR}`);
    this.$dynamicSearchCancelBtn = $(`${DYNAMIC_SEARCH_CANCEL_BTN_SELECTOR}`);
    this.$mobileMenuButton = $(`${MOBILE_MENU_ICON_SELECTOR}`);

    this.openModalEvent = new Event('openModalEvent');
    $(document).on('headerCollapseEvent', () => this.closeModal());

    $(`${SEARCH_ICON_SELECTOR}`).on( "click", this.openModal );

    this.$dynamicSearchCloseIcon.on( "click", () => {
      (isMobile()) ? this.$searchField.val('') : this.closeModal();
    });

    this.$dynamicSearchCancelBtn.on( "click", () => {
      this.hideCancelBtn();
      this.closeModal();
    });

    this.$mobileMenuButton.on( "click", this.toggleMobileSearch );

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
      this.$searchForm.show();
      this.$dynamicSearchCloseIcon.hide();
      (this.$mobileMenuButton.attr('aria-expanded') === 'true') ? scrollLock.enable() : '';
    } else {
      scrollLock.disable();
      this.closeModal();
      this.$dynamicSearchCancelBtn.hide();
      this.$dynamicSearchCloseIcon.show();
      this.$searchForm.hide();
      this.$searchFormMove.insertAfter($('.header__container'));
    }
    this.isMobile = isMobileAfterResize;
  }

  openModal() {
    this.$searchForm.css('display', 'block');
    this.$searchField.focus();
    document.dispatchEvent(this.openModalEvent);
  }

  closeModal() {
    $('#menu-primary-navigation').show();
    $('.secondary-menu').show();
    (isMobile()) ? this.$searchForm.removeClass('active') : this.$searchForm.css('display', 'none') ;
    this.$searchResults.removeClass('active');
    this.$searchField.val('');
    this.$searchForm.find('.modal').removeClass('active');
    this.$searchResults.find(`${SEARCH_RESULTS_OUTPUT_SELECTOR}`).html('');
    $(`${DYNAMIC_SEARCH_FILTER_ITEM_SELECTOR}.active`).removeClass('active');
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
    this.$dynamicSearchCloseIcon.hide();
  }
}

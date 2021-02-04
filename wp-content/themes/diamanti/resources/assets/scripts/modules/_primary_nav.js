import $ from 'jquery';
import throttle from 'lodash/throttle';

import { isMobile } from '../util/responsive';

const MINIMAL_SUBMENU_CLASSNAME = 'products-submenu--minimal';
const MOBILE_BACK_CLASSNAME = 'products-submenu__item__link--mobileBack';
const PLATFORM_DESKTOP = 'desktop';
const PLATFORM_MOBILE = 'mobile';

class PrimaryNav {

  constructor() {
    this.$menuElements = $('[data-submenu-open]');
    this.currentPlatform = '';
    this.$secondaryNavElements = [];

    $('.navbar-toggler').on("click", () => $('.navbar').toggleClass('active'));

    this.changePlatformThrottled = throttle(() => this.changePlatform());
    $(window).on('resize', this.changePlatformThrottled);
    $(document).on('headerCollapseEvent', () => {
      if (!isMobile()) {
        this.closeActiveSubmenu();
      }
    });
    this.changePlatform();
  }

  closeActiveSubmenu() {
    const submenusIds = this.$menuElements.map(function() {
      return $(this).attr('data-submenu-open');
    }).get();

    submenusIds.forEach((submenuId) => {
      const $submenuElement = $(`[data-submenu=${submenuId}]`);
      const $submenuLinks = $submenuElement.find('.products-submenu__item__arrow');

      $submenuLinks.off('click');
      $submenuLinks.removeClass('active');
      $submenuElement.removeClass('active');
      $submenuElement.find('ul, .products-submenu__content').removeClass('active');
    });
    $('.navbar-nav').removeClass('level2-active');
  }

  changePlatform() {
    if (isMobile() && this.currentPlatform !== PLATFORM_MOBILE) {
      this.initMobile();
    } else if (!isMobile() && this.currentPlatform !== PLATFORM_DESKTOP) {
      this.initDesktop();
    }
  }

  initDesktop() {
    this.reset();
    $('.navbar').removeClass('active');

    this.$menuElements.on('mouseenter', (e) => this.openSubmenuDesktop(e));
    this.currentPlatform = PLATFORM_DESKTOP;
  }

  initMobile() {
    this.reset();

    this.$menuElements.siblings().find('.products-submenu__content').removeClass('active');
    this.$menuElements.on('click', (e) => this.openSubmenuMobile(e));

    this.$secondaryNavElements = $('#secondary-navigation-container ul').clone();

    this.$secondaryNavElements.find('li').addClass('secondary-menu__nav-item').find('a').addClass('secondary-menu__nav-link');
    this.$secondaryNavElements.wrap('<li></li>');
    $('#menu-primary-navigation').append(this.$secondaryNavElements);

    this.currentPlatform = PLATFORM_MOBILE;
  }

  reset() {
    this.closeActiveSubmenu();
    this.$menuElements.siblings().find('.products-submenu__content').first().addClass('active');
    this.$menuElements.off("click mouseenter");
    if(this.$secondaryNavElements.length) {
      this.$secondaryNavElements.remove();
    }
  }

  switchProductContent(e) {
    const productResourcesId = $(e.currentTarget).data('product-resources-open');
    const $target = $(`[data-product-resources=${productResourcesId}]`);
    if ($target.length > 0) {
      $('.products-submenu__content').removeClass('active');
      $target.addClass('active');
    }
  }

  openSubmenuDesktop(e) {
    const $el = $(e.currentTarget);
    const $parentEl = $el.parent();

    $el.next().find('.products-submenu__content').removeClass('active');
    $el.next().find('.products-submenu__content').first().addClass('active');

    const $submenuElement = $(`[data-submenu=${$el.data('submenu-open')}]`);
    const $submenuProductsElements = $submenuElement.find('[data-product-resources-open]');

    if ($submenuElement.hasClass(MINIMAL_SUBMENU_CLASSNAME)) {
      const left = $parentEl.offset().left - ($(window).width() - $parentEl.parents('.header__content').width()) / 2;
      $submenuElement.css('left', left);
    }

    $submenuElement.addClass('active');

    $submenuProductsElements.on('mouseenter', this.switchProductContent);
    $submenuElement.on('mouseleave', () => {
      $submenuElement.off('mouseleave');
      $submenuElement.removeClass('active');
      $submenuProductsElements.off('mouseenter');
    });

    $parentEl.on('mouseleave', (e) => {
      const $toElement = $(e.toElement);
      $parentEl.off('mouseleave');
      if ($toElement !== $submenuElement && $toElement.parents($submenuElement.selector).length === 0) {
        $submenuElement.removeClass('active');
      }
    });
  }

  openSubmenuMobile(e) {
    e.preventDefault();

    const $el = $(e.currentTarget);
    const $backEl = $el.siblings().find(`.${MOBILE_BACK_CLASSNAME}`);
    const $submenuElement = $(`[data-submenu=${$el.data('submenu-open')}]`);
    const $submenuLinks = $submenuElement.find('.products-submenu__item__arrow');
    $submenuElement.find('ul, .products-submenu__content').removeClass('active');

    $submenuLinks.on('click', (e) => {
      const $el = $(e.currentTarget);
      const $list = $el.parent().siblings().filter('ul, .products-submenu__content');
      const $title = $list.parent().find('.products-submenu__item__title ');

      $submenuLinks.not($el).removeClass('active');
      $submenuElement.find('ul, .products-submenu__content').not($list).removeClass('active');

      $title.toggleClass('active');
      $el.toggleClass('active');
      $list.toggleClass('active');
    });

    $backEl.on('click', () => {
      $backEl.off('click');
      $submenuLinks.off('click');
      $submenuLinks.removeClass('active');
      $submenuElement.removeClass('active');
      $submenuElement.find('ul, .products-submenu__content').removeClass('active');
      $('.navbar-nav').removeClass('level2-active');
    });

    $submenuElement.addClass('active');
    $('.navbar-nav').addClass('level2-active');
  }
}

export default () => new PrimaryNav();

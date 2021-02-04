import $ from 'jquery';
import throttle from 'lodash/throttle';
import { TimelineLite, Linear } from "gsap/all";
import { isMobile } from '../util/responsive';

const STICKY_SELECTOR = 'data-sticky-element';

const MOBILE_BREAKPOINT = 992;
const ACTIVATE_OFFSET = 40;
const ACTIVATE_OFFSET_MOBILE = 58;
const HEADER_CTA_HEIGHT = 40;
const HEADER_HEIGHT = 70;

class Sticky {
  constructor(element) {
    this.element = element;

    this.$body = $('body');

    this.$element = $(element);
    this.stickyValue = $(element).attr(STICKY_SELECTOR);
    this.headerCollapseEvent = new Event('headerCollapseEvent');

    this.$parent = this.$element.parent();

    this.prevScroll = 0;

    this.checkAnimationStateThrottled = throttle(() => this.checkScrollState());
    $(window).on('scroll', this.checkAnimationStateThrottled);
    this.refreshThrottled = throttle(() => this.refresh());
    $(window).on('resize', this.refreshThrottled);
    $(document).on('openModalEvent', () => this.expandHeader());

    this.refresh();
    this.checkInitialScrollState();
  }

  expandHeader() {
    this.timeline.reverse();
  }

  refresh() {
    this.windowWidth = $(window).width();

    if (this.windowWidth > MOBILE_BREAKPOINT) {
      this.initialStickyOffset = ACTIVATE_OFFSET;

      if (this.$body.hasClass('front-page-data') && !this.$body.hasClass('no-header-cta')) {
        this.initialStickyOffset += HEADER_CTA_HEIGHT;
      }

      if (this.$body.hasClass('page-template-template-products') || this.$body.hasClass('page-template-template-product-single')) {
        this.initialStickyOffset += HEADER_HEIGHT;
      }
    } else {
      this.initialStickyOffset = 0;

      if (this.$body.hasClass('page-template-template-products') || this.$body.hasClass('page-template-template-product-single')) {
        this.initialStickyOffset += ACTIVATE_OFFSET_MOBILE;
      }
    }

    this.timeline = new TimelineLite({ paused: true });
    this.timeline.fromTo(this.$element, 0.35, { y: 0 }, { y: -this.initialStickyOffset, ease: Linear.easeInOut });
  }

  checkScrollState() {
    if (isMobile()) {
      return;
    }

    const scroll = $(window).scrollTop();

    if (scroll > 1.5 * this.initialStickyOffset) {
      if (scroll < this.prevScroll) {
        this.timeline.reverse();
      } else {
        document.dispatchEvent(this.headerCollapseEvent);
        this.timeline.play();
      }
    }

    this.prevScroll = scroll;
  }


  checkInitialScrollState() {
    const scroll = $(window).scrollTop();

    if (scroll > 1.5 * this.initialStickyOffset) {
      this.timeline.seek(1);
    }
  }
}

export default () => $(`[${STICKY_SELECTOR}]`).each((index, element) => new Sticky(element));


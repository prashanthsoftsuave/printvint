'use strict';
import $ from "jquery";
import { TimelineLite, Linear } from "gsap/all";
import throttle from 'lodash/throttle';

const DIAGRAM_ELEMENT_CLASSNAME = 'productDiagram';
const PRODUCT_ELEMENT_SPEKTRA_CLASSNAME = 'productDiagram__child--spektra';
const PRODUCT_ELEMENT_ULTIMA_CLASSNAME = 'productDiagram__child--ultima';
const DIAGRAM_SHADOW_ULTIMA_CLASSNAME = 'productDiagram__child__shadow--ultima';
const DIAGRAM_SHADOW_D20_CLASSNAME = 'productDiagram__child__shadow--d20';
const OFFSET_SCROLL_MAX = 650;
const OFFSET_SCROLL_IDLE = 200;


export default class ProductDiagram {

  constructor() {
    this.$diagram = $(`.${DIAGRAM_ELEMENT_CLASSNAME}`);
    this.$parentSection = this.$diagram.parents('section');

    if (!this.$diagram.length) {
      return;
    }

    this.$productSpektra = $(`.${PRODUCT_ELEMENT_SPEKTRA_CLASSNAME}`);
    this.$productUltima = $(`.${PRODUCT_ELEMENT_ULTIMA_CLASSNAME}`);
    this.$shadowUltima = this.$diagram.find(`.${DIAGRAM_SHADOW_ULTIMA_CLASSNAME}`);
    this.$shadowD20 = this.$diagram.find(`.${DIAGRAM_SHADOW_D20_CLASSNAME}`);
    this.createTimeline();

    this.onResizeThrottled = throttle(() => this.onResize(), 100);
    $(window).on('resize', this.onResizeThrottled);
    this.onResize();
    $(window).on('scroll', this.onScroll.bind(this));
    this.onScroll();

  }

  onResize(e) {
    const windowHeight = $(window).height();
    const windowWidth = $(window).width();

    this.startOffset = windowWidth > 992 ? 0 : this.$diagram.offset().top - windowHeight / 2;
    this.sectionHeight = this.$parentSection.height() > windowHeight ? this.$parentSection.height() : windowHeight;
  }

  onScroll(e) {
    const scroll = $(window).scrollTop();
    const maxScroll = this.$diagram.offset().top + OFFSET_SCROLL_IDLE;

    if (scroll >= this.startOffset && scroll <= maxScroll) {
      const value = ((scroll - this.startOffset) / (maxScroll - this.startOffset)).toFixed(2);
      this.seekTimeline(value);
    } else if (scroll < this.startOffset) {
      this.seekTimeline(0);
    }else if (scroll > this.sectionHeight + this.startOffset) {
      this.seekTimeline(1);
    }

  }

  createTimeline() {
    this.timeline = new TimelineLite({ paused: true });
    this.timeline.addLabel('part1', 0);
    this.timeline.addLabel('part2', 1.5);
    this.timeline.to(this.$productSpektra, 1.5, { y: '+=95%', ease: Linear.easeOut }, 'part1');
    this.timeline.to(this.$shadowUltima, 1.5, { scale: 1.7, ease: Linear.easeOut }, 'part1');
    // this.timeline.to(this.$productSpektra, 1.5, { y: '+=50%', ease: Linear.easeOut }, 'part2');
    this.timeline.to(this.$productUltima, 1.5, { y: '+=50%', ease: Linear.easeOut }, 'part1');
    this.timeline.to(this.$shadowD20, 1.5, { scale: 1.7, ease: Linear.easeOut }, 'part1')
  }


  playTimeline() {
    this.timeline.play();
  }

  seekTimeline(progress = 0) {
    this.timeline.progress(progress);
  }

}
import $ from 'jquery';

const LINK_WITH_HASH_SELECTOR = 'a[href*=#]:not([href=#])';

class ScrollToSection {
  constructor() {
    $(window).on('load', () => this.scrollOnPageLoad());
    $(`${LINK_WITH_HASH_SELECTOR}`).on('click', (e) => this.handleClickHashLink(e));
  }

  scrollOnPageLoad() {
    if (window.location.hash) {
      this.scrollToSection(window.location.hash);
    }
  }

  handleClickHashLink(e) {
    const link = e.currentTarget;

    if (location.pathname.replace(/^\//, "") === link.pathname.replace(/^\//, "")) {

      const section = $(link.hash).length ? link.hash : $(`[name=${link.hash.slice(1)}]`);

      if (section.length) {
        this.scrollToSection(section);
        e.preventDefault();
      }
    }
  }

  scrollToSection(section) {
    $('html, body').animate({
      scrollTop: $(section).offset().top - $('header').height(),
    }, 500);

    window.location.hash = section;
  }
}

export default ScrollToSection;

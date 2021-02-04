import $ from 'jquery';

export default class ProductsMenu {
  constructor() {
    this.handlePageScroll = this.handlePageScroll.bind(this);

    this.sections = $('.productsMenu__item a').map((_, link) => ({
      link,
      section: link.hash && $(link.hash)[0],
    }));

    $(document).on('scroll', this.handlePageScroll);
  }

  isInViewport(el, offset = 0) {
    const windowYstart = $(window).scrollTop();
    const windowYend = windowYstart + $(window).height();
    const elYstart = $(el).offset().top;
    const elYend = $(el).height() + elYstart;

    return (elYend - offset) > windowYstart && (elYstart + offset) < windowYend;
  }

  handlePageScroll() {
    this.sections.each((_, { section, link }) => {
      if(section && this.isInViewport(section, 200)) {
        $(link).parent().addClass('active');
      }
      if(section && !this.isInViewport(section, 200)) {
        $(link).parent().removeClass('active');
      }
    });
  }

}

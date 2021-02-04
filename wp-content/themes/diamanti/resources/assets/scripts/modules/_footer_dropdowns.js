import $ from 'jquery';

class FooterDropdowns {
  constructor() {
    $('.site-footer .menu-item-has-children').each((_, el) => {
      $('a', el)
        .first()
        .after("<span class='chevron' />");

      $('span.chevron', el).on('click', this.toggleDropdownMenu);
    })


    $('.site-footer .footer-widgets section > h5:first-of-type').each((_, el) => {
      $(el).append("<span class='chevron' />");

      $(el).on('click', this.toggleDropdownHeader);
    })
  }

  toggleDropdownMenu({ target }) {
    $(target)
      .parent()
      .toggleClass('active');
  }

  toggleDropdownHeader({ target }) {
    $(target)
      .closest('section')
      .toggleClass('active');
  }
}

export default () => new FooterDropdowns();

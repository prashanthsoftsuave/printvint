import $ from 'jquery';

class TabsContent {

  constructor() {
    this.$tabsContainer = $('[data-tabs]');
    this.$tabs = $('[data-tab]');
    this.$tabs.first().addClass('active');

    this.$tabs.on('mouseenter', this.changeTab.bind(this));
    this.$tabs.on('click', this.changeTab.bind(this));
  }

  changeTab(e) {
    const targetTab = $(e.currentTarget);
    const tabIndex = targetTab.data('tab');
    this.$tabsContainer.attr('data-active-tab', tabIndex);

    this.$tabs.removeClass('active');
    targetTab.addClass('active');
  }
}

export default () => new TabsContent();

import $ from "jquery";
import throttle from "lodash/throttle";

const NOTIFICATION_BAR_SELECTOR = '.notification-bar';
const NOTIFICATION_BAR_CLOSE_SELECTOR = '.notification-bar__close';
const NOTIFICATION_BAR_HEADER_SELECTOR = '.notification-bar__header';

export default class NotificationBar {

  constructor() {

    this.$notificationBar = $(`${NOTIFICATION_BAR_SELECTOR}`);
    this.focusableElements = this.$notificationBar.find('button, a');

    if ($('body').hasClass('home') && this.$notificationBar.length) {
      $(window).on('scroll', throttle(() => {
        this.$notificationBar.removeClass('active');
        this.preventElementsFocusable();
      }, 100));
    }

    $(`${NOTIFICATION_BAR_HEADER_SELECTOR}`).on('click', () => this.toggleViewBar());

    $(`${NOTIFICATION_BAR_CLOSE_SELECTOR}`).on('click', () => this.toggleViewBar())
  }

  toggleViewBar() {
    this.$notificationBar.toggleClass('active');

    this.$notificationBar.hasClass('active') ? this.focusableElements.removeAttr('tabindex') : this.preventElementsFocusable();
  }

  preventElementsFocusable() {
    this.focusableElements.attr('tabindex', -1);
  }

}

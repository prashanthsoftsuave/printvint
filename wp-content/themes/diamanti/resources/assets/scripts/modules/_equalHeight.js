'use strict';

import $ from 'jquery';
import 'jquery-match-height';

import { MOBILE_BREAKPOINT } from '../util/constants';

const EQUAL_HEIGHT_ATTRIBUTE = 'data-eh';
const EQUAL_HEIGHT_ATTRIBUTE_SELECTOR = '[data-eh]';

class EqualHeight {
  constructor() {
    this.initialized = false;
    this.groups = {};
    this.handleBeforeUpdate = this.handleBeforeUpdate.bind(this);

    $.fn.matchHeight._beforeUpdate = this.handleBeforeUpdate;
  }

  initialize() {
    this.initialized = true;
    this.getGroups();
    this.updateMatchHeight({
      byRow: false,
    });
  }

  getGroups() {
    const _self = this;
    $(EQUAL_HEIGHT_ATTRIBUTE_SELECTOR).each(function() {
      const element = $(this);
      const groupId = element.attr(EQUAL_HEIGHT_ATTRIBUTE);

      if (groupId in _self.groups) {
        _self.groups[groupId] = _self.groups[groupId].add(element);
      } else {
        _self.groups[groupId] = element;
      }
    });
  }

  updateMatchHeight(options) {
    $.each(this.groups, function() {
      this.matchHeight(options);
    });
  }

  handleBeforeUpdate() {
    const windowWidth = $(window).width();

    if ((windowWidth > MOBILE_BREAKPOINT) && this.initialized) {
      this.updateMatchHeight({
        remove: true,
      });
      this.initialized = false;
    } else if(!this.initialized) {
      this.initialize();
    }
  }
}

export default () => new EqualHeight();

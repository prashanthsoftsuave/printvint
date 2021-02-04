// import external dependencies
import 'jquery';

// Import everything from autoload
import './autoload/**/*'

import 'slick-carousel/slick/slick.min';
import 'featherlight/src/featherlight';

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';
import PrimaryNav from './modules/_primary_nav';
import ProductDiagram from './modules/_productDiagram';
import TabsContent from './modules/_tabsContent';
import setupMeshBackgrounds from './modules/_meshBackground/index';
import './modules/scrollmagiccus';

import FooterDropdowns from './modules/_footer_dropdowns';
import ProductsMenu from './modules/_productsMenu';
import StickyHeader from './modules/_stickyHeader';
import EqualHeight from './modules/_equalHeight';
import Search from './modules/_search';
import SearchPreview from './modules/_searchPreview';
import EventPage from './modules/_eventPage';
import NotificationBar from './modules/_notificationBar';
import ScrollToSection from './modules/_scrollToSection';


/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  aboutUs,
});

// Load Events
jQuery(document).ready(() => {
  routes.loadEvents();
  FooterDropdowns();
  PrimaryNav();
  new ProductDiagram();
  new TabsContent();
  new ProductsMenu();
  new StickyHeader();
  new EqualHeight();
  setupMeshBackgrounds();
  Search();
  new SearchPreview();
  new EventPage();
  new NotificationBar();
  new ScrollToSection();
  new printMe();
});

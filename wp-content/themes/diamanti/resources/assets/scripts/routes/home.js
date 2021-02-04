export default {
  init() {
    // JavaScript to be fired on the home page
  },
  finalize() {
    $(".homeHeroSlides").slick({
      autoplay: true,
      autoplaySpeed: 5000,
    });
    // JavaScript to be fired on the home page, after the init JS
  },
};

$(function () {

  $('.owl-carousel--gallery').owlCarousel({
    loop: true,
    nav: true,
    dot: false,
    autoplay: false,
    margin: 16,

    responsive : {

      0 : {
        items : 1,
      },

      640 : {
        items : 1,
      },

      1024 : {
        items : 1,
      }
    }
  });

});

$(document).ready(function() {
  var owl = $('#slider-produit');
  owl.owlCarousel({
      items: 4,
      loop: false,
      margin: 20,
      autoplay: true,
      pagination: true,
      autoplayTimeout: 2000,
      autoplayHoverPause: true,
      responsiveClass: true,
      responsive: {
          0: {
              items: 1,
              nav: true
          },
          600: {
              items: 2,
              nav: true
          },
          1000: {
              items: 4,
              nav: true,
          }
      }
  });
  var owl2 = $('#slider-produit-2');
  owl2.owlCarousel({
      items: 4,
      loop: true,
      margin: 20,
      autoplay: true,
      pagination: true,
      autoplayTimeout: 2000,
      autoplayHoverPause: true,
      responsiveClass: true,
      responsive: {
          0: {
              items: 1,
              nav: true
          },
          600: {
              items: 2,
              nav: true
          },
          1000: {
              items: 4,
              nav: true,
          }
      }
  });
});

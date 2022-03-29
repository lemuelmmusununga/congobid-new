$(document).ready(function() {
    // slide Teams
    var owl = $("#slider-carousel");
    owl.owlCarousel({
      items: 4,
      itemsDesktop: [1000, 1],
      itemsDesktopSmall: [900, 1],
      itemsTablet: [600, 1],
      itemsMobile: false,
      pagination: true,
      autoplay: true
    });

});

  jQuery(document).ready(function () {
    jQuery( ".story h2" ).animate({ "top": "-=20px" }, "slow" );
  });

//   jQuery(document).ready(function () {
//     jQuery('.fadein').fadeIn(1000).removeClass('hidden');
// });

// jQuery(document).ready(function () {
// jQuery('.hidden').css('display', 'none');
// jQuery('hidden').fadeIn(500);
// });

// jQuery( window ).on( "load", function() {
//     jQuery('.fadeIn').fadeIn(500);
//  });

var swiper = new Swiper(".other-characters", {
  effect: "coverflow",
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: "auto",
  coverflowEffect: {
    rotate: 50,
    stretch: 0,
    depth: 100,
    modifier: 1,
    slideShadows: true,
  },
  pagination: {
    el: ".swiper-pagination",
  },
});
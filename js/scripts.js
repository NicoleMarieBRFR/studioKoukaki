var swiper = new Swiper(".mySwiper", {
  effect: "coverflow",
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: "auto",
  maxRatio: 3,
  coverflowEffect: {
    rotate: 0,
    stretch: 0,
    depth: 100,
    modifier: 1,
    slideShadows: false,
  },
  pagination: {
    el: ".swiper-pagination",
  },
});

let text = document.getElementById('parallax');
window.addEventListener('scroll' , function(){
  let value = window.scrollY;
  text.style.marginBottom = value * 2 + 'px';
}) 

let hauteurSection = document.getElementById('place').offsetHeight
let nuages = document.getElementById('nuages');
window.addEventListener('scroll' , function(){
  let value = nuages.getBoundingClientRect().y;
  let ratio = value / hauteurSection;
  if (ratio > 0 && ratio < 1) {
    nuages.style.left = ratio * -1 * 300 + 'px';    
  }
})


// find how to put 300px

function jsMenu() {
  jQuery('.menu-toggle input').on('click', function(){
      if (jQuery('#menu').hasClass('open')) {
          jQuery('#menu').removeClass('open');
      }
      else {
          jQuery('#menu').addClass('open');
      }
  })
}
jsMenu();

function jsCloseMenu() {
  jQuery('.closeMenu').on('click', function(){
      jQuery('#menu').removeClass('open');
  })
}

jsCloseMenu();

jQuery('.closeMenu').click(function() {
  if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
    var target = jQuery(this.hash);
    target = target.length ? target : jQuery('[name=' + this.hash.slice(1) +']');
  if (target.length) {
    jQuery('html, body').animate({
        scrollTop: target.offset().top-50
      }, 2000);  // delay da animacao
      return false;
      }
   }
});

jQuery(function() {
  jQuery('#menu__content ul li a').on('click', function(event) {
    jQuery('#menu__btn--check').prop('checked', false);
  });
});

//swiper
const swiper = new Swiper('.swiper', {
  // Optional parameters
  loop: true,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },


  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  effect: 'fade' ,
});


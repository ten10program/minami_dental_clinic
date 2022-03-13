
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

// ===============================================
// to-top
// ===============================================
jQuery(window).on('scroll', function(){
  if(100 < jQuery(this).scrollTop()) {
    jQuery('.to-top').addClass('is-show');
  } else{
    jQuery('.to-top').removeClass('is-show');
  }
})


jQuery(function() {
  jQuery('#menu__content ul li a').on('click', function(event) {
    jQuery('#menu__btn--check').prop('checked', false);
  });
});


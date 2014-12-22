jQuery(document).ready(function($) {
  prettyPrint();

  //search activation
  var $form = $('.nav-search form');

  $('.nav-search a').click(function(e) {
    if($form.hasClass('active')) {
      $form.removeClass('active');
    } else {
      $form.addClass('active');
    }

    e.preventDefault();
  });

});

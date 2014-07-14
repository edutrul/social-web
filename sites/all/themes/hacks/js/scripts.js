(function($) {
  $('.filter-act').change(function() {
    console.log(this);
    $('.activities').isotope({
      filter: '.' + $(this).val()
    });
  });
  
  $('.flyup').bind('inview', function(e){
    $(this).addClass('animated fadeInUp');
  });

  $('.flyleft').bind('inview', function(e){
    $(this).addClass('animated fadeInLeft');
  });

  $('.superflyleft').bind('inview', function(e){
    $(this).addClass('animated slideInLeft');
  });

  $('.appears').bind('inview', function(e){
    $(this).addClass('animated fadeIn');
  });

  $('.activities').isotope({
    itemSelector: '.activity',
    layoutMode: 'fitRows'
  });

})(jQuery);
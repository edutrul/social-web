(function($) {
  $('.filter-item').click(function() {
    $('.filter-item').removeClass('active');
    $(this).addClass('active');
    $('.activities').isotope({
      filter: '.peru'
    });
    return false;
    
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
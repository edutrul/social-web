/**
 * @file
 * A JavaScript file for the theme.
 *
 * In order for this JavaScript to be loaded on pages, see the instructions in
 * the README.txt next to this file.
 */

// JavaScript should be made compatible with libraries other than jQuery by
// wrapping it with an "anonymous closure". See:
// - https://drupal.org/node/1446420
// - http://www.adequatelygood.com/2010/3/JavaScript-Module-Pattern-In-Depth
(function ($, Drupal, window, document, undefined) {


// To understand behaviors, see https://drupal.org/node/756722#behaviors
Drupal.behaviors.hacks = {
  attach: function(context, settings) {

    $('.filter-act').change(function() {
      val = $(this).val();
      if(val !== '') {
        $('.activities').isotope({
          filter: '.' + val
        });
      }
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

    $('.image-container img').addClass('zoom');
    $('.image-container span a').addClass('cat');
  }
};


})(jQuery, Drupal, this, this.document);

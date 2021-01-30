// _animate-burger.js

// A $( document ).ready() block.
jQuery( document ).ready(function() {

  // console.log( "ready!" );

  jQuery('.js-hamburger').click(function(){
    jQuery(this).toggleClass("is-active");
  });

});


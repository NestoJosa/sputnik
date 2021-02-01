// _append-span.js
// made with help from: https://css-tricks.com/working-with-javascript-media-queries/

jQuery( document ).ready(function() {

  // Create a condition that targets viewports at least 768px wide
  const mediaQuery = window.matchMedia('(min-width: 768px)');

  // Create a variable we can use to determine if the element has been set or not
  let elementIsSet = false;

  function handleChange(e) {
    
    // if element is set and window is less than 768 px
    if ( elementIsSet && !e.matches ) {
      // console.log('removing element...');
      // remove the element
      jQuery('.AnimatedLine').remove();
      elementIsSet = false;
    }

    // if element is NOT set and window is more than 768 px
    if ( !elementIsSet && e.matches ) {
      // console.log('adding element...');
      // add the element
      jQuery('.menu-item:not(:last-child) .nav-link').append("<span class='AnimatedLine'></span>");
      elementIsSet = true;
    } 

  };

  // Register event listener
  mediaQuery.addListener(handleChange);

  // Initial check
  handleChange(mediaQuery);

}); 
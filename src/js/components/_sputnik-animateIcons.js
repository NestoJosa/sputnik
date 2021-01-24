// _sputnik-animateIcons.js

/* 

  Animation Script

  src:
  - How to animate on scroll?
  https://medium.com/@ryanfinni/the-intersection-observer-api-practical-examples-7844dfa429e9

*/

const Bowser = require("bowser");

const browser = Bowser.getParser(window.navigator.userAgent);

const isDesktop = ( browser.parsedResult.platform.type === 'desktop' ) ? true : false;

const isFirefox = ( browser.getBrowserName() === 'Firefox' ) ? true : false; 

/* dev-logs */
/* 
  console.log('--- dev ---')

  console.log('isDesktop = ' + isDesktop);

  console.log('isFirefox = ' + isFirefox);

  console.log('browser.getBrowserName() = ' + browser.getBrowserName());

  console.log('--- /dev ---')
 */
/* /dev-logs */

/* 

  We do NOT want to run the icon-animations on mobile/ipad on firefox - for now.

  So, we need to make sure that the icon-animations are only run, 
  if: isDesktop is false AND browser-name is NOT Firefox

  This should make sure that the animations only ron on everyting but firefox on mobile/tablet

*/


if ( !isDesktop && isFirefox ) {
  // do nothing - because we are most likely on an phone/table using firefox
} else {
  
  // animate

  // get a list of all of the icons that have the js-hook class
  const icons = document.querySelectorAll('.js-AboutCard__icon');

  // custom CB for the IntersectionObserver
  function handleIntersection(entries) {
    entries.map((entry) => {
      if (entry.isIntersecting) {
        // if an element with the icon class is in the viewport
        // add a class to the element, which will trigger the
        // animation made with css (see style.css)
        entry.target.classList.add('AboutCard__icon--animate');
        // remove the observer
        observer.unobserve(entry.target);
      }
    });
  } 

  // create an instance of the observer with our custom CB
  const observer = new IntersectionObserver(handleIntersection);

  // add the observer to each of our icons 
  icons.forEach(icon => observer.observe(icon));
  
}




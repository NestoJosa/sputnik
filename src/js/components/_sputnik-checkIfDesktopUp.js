/* 

  load scripts for desktop-sized screens upwards based on a media query
  src: https://www.encode8.com/js/how-to-conditionally-load-javascript-files/

*/

if (window.matchMedia("only screen and (min-width: 1024px)").matches) {

  // create script element
  var script = document.createElement("script");
  script.type = "text/javascript";  
  script.src = "http://localhost:8888/dev-atb/wp-content/themes/sputnik/js/atb-desktopUpScript.js";
  
  // add newly created script element to the end of body
  document.body.appendChild(script);
};


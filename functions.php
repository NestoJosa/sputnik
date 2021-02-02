<?php 



// Load Stylesheets
function load_css() {
  
  wp_register_style('adobe-fonts', 'https://use.typekit.net/kbs0hyb.css', array(), null, 'all' );
  wp_enqueue_style('adobe-fonts');
      
  wp_register_style('bootstrap-styles', get_template_directory_uri() . '/dist/css/bundle.css', array(), '1.2', 'all' );
  wp_enqueue_style('bootstrap-styles'); 
  
}
add_action('wp_enqueue_scripts', 'load_css');



// Load Javascript
function load_js() {
      
  wp_register_script('bootstrap-scripts', get_template_directory_uri() . '/dist/bootstrap-4.0.0/dist/js/bootstrap.bundle.min.js', array('jquery'), null, true );
  wp_enqueue_script('bootstrap-scripts');
  
  wp_enqueue_script( 'bundle', get_template_directory_uri() . '/dist/js/bundle.js', array(), null, true );
  
  /* wp_register_script('cookie-scripts', '//cdn.cookie-script.com/s/94803146c0751e7d78183f5afa6c45f2.js', array(), null, true );
  wp_enqueue_script('cookie-scripts'); */
   
}
add_action('wp_enqueue_scripts', 'load_js');



// Load Google Analytics
function sputnik_add_google_analytics() { 
  ?>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-LQ68LX0CXL"></script>
    <script>
      //console.log('google analytics loading...')
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-LQ68LX0CXL');
    </script>
	<?php
}

add_action( 'wp_head', 'sputnik_add_google_analytics', 20 );

/* 

  Theme Setup

*/
function sputnik_theme_setup() {

  // Adds <title> tag support
  add_theme_support( 'title-tag' );

  // This theme uses post thumbnails
  add_theme_support( 'post-thumbnails' );

  // Add Menus
  add_theme_support( 'menus' );

}
add_action( 'after_setup_theme', 'sputnik_theme_setup');

/* 

  Register Menus

*/
// Menus
register_nav_menus(

  array(
    'top-nav' => 'Top Nav Location',
  )

);

/**
 * Register Custom Navigation Walker - required to change the default nav markup so that we can use bootstraps navbar
 */
function register_navwalker(){
  require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );



?>
<?php 


function load_css() 
{
  wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), null, 'all' );
  wp_enqueue_style('bootstrap');

  wp_register_style('adobe-fonts', 'https://use.typekit.net/kbs0hyb.css', array(), null, 'all' );
  wp_enqueue_style('adobe-fonts');

  wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), '1', 'all' );
  wp_enqueue_style('main');
}
add_action('wp_enqueue_scripts', 'load_css');


function load_js() 
{
  wp_enqueue_script('jquery');

  wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', null, true );
  wp_enqueue_script('bootstrap');

  wp_enqueue_script( 'atb-checkIfDesktopUp', get_template_directory_uri() . '/js/atb-checkIfDesktopUp.js', array(), null, true );
}
add_action('wp_enqueue_scripts', 'load_js');


?>
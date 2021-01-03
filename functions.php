<?php 


  function load_css() {
    wp_register_style('adobe-fonts', 'https://use.typekit.net/kbs0hyb.css', array(), null, 'all' );
    wp_enqueue_style('adobe-fonts');

    /* Note: bootstrap styles are inside the following bundle */
    wp_register_style('bundle', get_template_directory_uri() . '/dist/css/bundle.css', array(), '1', 'all' );
    wp_enqueue_style('bundle');
  }

  add_action('wp_enqueue_scripts', 'load_css');


  function load_js() {
    wp_enqueue_script('jquery');

    wp_register_script('bootstrap', get_template_directory_uri() . '/dist/bootstrap/dist/js/bootstrap.min.js', 'jquery', null, true );
    wp_enqueue_script('bootstrap');

    wp_enqueue_script( 'bundle', get_template_directory_uri() . '/dist/js/bundle.js', array(), null, true );
  }

  add_action('wp_enqueue_scripts', 'load_js');

?>
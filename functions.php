<?php 

  // Load Stylesheets
  function load_css() {
    wp_register_style('adobe-fonts', 'https://use.typekit.net/kbs0hyb.css', array(), null, 'all' );
    wp_enqueue_style('adobe-fonts');

    /* Note: bootstrap styles are inside the following bundle */
    wp_register_style('bundle', get_template_directory_uri() . '/dist/css/bundle.css', array(), '1', 'all' );
    wp_enqueue_style('bundle');
  }

  add_action('wp_enqueue_scripts', 'load_css');

  // Load Javascript
  function load_js() {
    wp_enqueue_script('jquery');

    wp_register_script('bootstrap', get_template_directory_uri() . '/dist/bootstrap/dist/js/bootstrap.min.js', 'jquery', false, true );
    wp_enqueue_script('bootstrap');

    wp_enqueue_script( 'bundle', get_template_directory_uri() . '/dist/js/bundle.js', array(), null, true );
  }

  add_action('wp_enqueue_scripts', 'load_js');

  
  // Theme Options

  // This theme uses post thumbnails
  add_theme_support( 'post-thumbnails' );

  // Add Menus
  add_theme_support( 'menus' );

  // Menus
  register_nav_menus(
    
    array(
      'top-menu' => 'Top Menu Location',
      'mobile-menu' => 'Mobile Menu Location',
    )

  );

  /**
   * Register Custom Navigation Walker
   */
  function register_navwalker(){
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
  }
  add_action( 'after_setup_theme', 'register_navwalker' );

?>
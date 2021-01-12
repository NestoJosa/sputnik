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

    
    wp_register_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.6.0/umd/popper.min.js"', false, '2.6.0', true);
    wp_enqueue_script('popper');    
    
    wp_register_script('bootstrap', get_template_directory_uri() . '/dist/bootstrap/dist/js/bootstrap.min.js', array('jquery'), null, true );
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

  
  function my_init() {  
    if (!is_admin()) {  
      wp_deregister_script('jquery');  
      wp_deregister_script('jquery-migrate');  

      // Load a copy of jQuery from the Google API CDN  
      // The last parameter set to TRUE states that it should be loaded  
      // in the footer.  
      wp_register_script('jquery', 'https://code.jquery.com/jquery-3.5.1.min.js', false, '3.5.1', true);  
      wp_register_script('jquery-migrate', 'https://code.jquery.com/jquery-migrate-3.3.2.min.js"', false, '3.3.2', true);  

      wp_enqueue_script('jquery');  
      wp_enqueue_script('jquery-migrate');  
    }  
  }  
  add_action('init', 'my_init');  

?>
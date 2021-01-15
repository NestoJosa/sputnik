<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta name="format-detection" content="telephone=no">

  <title>Document</title>

  <?php wp_head(); ?>

</head>
<body>

<header>
  <div class="TopNavWrapper container-fluid px-0">
    <div class="container px-0">
      <nav class="navbar navbar-expand-md navbar-light" role="navigation">

          <a class="navbar-brand" href="<?php echo get_home_url(); ?>">autobahn</a>

          <!-- Brand and toggle get grouped for better mobile display -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
              <span class="navbar-toggler-icon"></span>
          </button>
          
          

            <?php
              wp_nav_menu( 
                array(
                  'theme_location'    => 'top-nav',
                  'depth'             => 2,
                  'container'         => 'div',
                  'container_class'   => 'collapse navbar-collapse',
                  'container_id'      => 'bs-example-navbar-collapse-1',
                  'menu_class'        => 'nav navbar-nav',
                  'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                  'walker'            => new WP_Bootstrap_Navwalker(),
                ) 
              );
            ?>
      </nav>
    </div>
  </div>
</header>

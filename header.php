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
  <div class="NavBarWrapper container-fluid px-0">
    <div class="container px-0">
      <nav class="navbar navbar-expand-md navbar-light" role="navigation">

          <a class="navbar-brand" href="<?php echo get_home_url(); ?>">
           <svg xmlns="http://www.w3.org/2000/svg" width="104" height="18" viewBox="0 0 104 18">
              <g fill="none" fill-rule="evenodd">
                  <g fill="#3B012D" fill-rule="nonzero">
                      <g>
                          <path d="M4.152 17.371c1.68 0 3.048-.623 3.96-1.92h.048c0 .6.048 1.129.168 1.632h3.024c-.216-.815-.336-1.8-.336-3.335V9.334c0-3.192-1.776-4.823-5.232-4.823-3.48 0-5.16 1.871-5.28 4.199h3.264c.048-1.152.768-1.848 2.016-1.848 1.176 0 1.992.624 1.992 2.16v.431c-.768.048-2.136.192-3.048.336C1.2 10.341 0 11.685 0 13.676c0 2.112 1.56 3.695 4.152 3.695zm1.008-2.399c-1.176 0-1.8-.624-1.8-1.536 0-.983.576-1.44 1.968-1.68.72-.12 1.728-.215 2.448-.263v.456c0 1.104-.12 1.751-.696 2.327-.48.48-1.224.696-1.92.696zm13.056 2.4c1.56 0 2.784-.744 3.576-1.824h.048v1.535h3.144V4.895h-3.36v6.526c0 2.207-1.008 3.311-2.4 3.311-1.32 0-2.136-.84-2.136-2.687v-7.15h-3.36v7.486c0 3.31 1.752 4.99 4.488 4.99zm14.592-.12c.576 0 1.32-.097 1.776-.24v-2.568c-.216.072-.552.12-.864.12-1.152 0-1.584-.528-1.584-1.871V7.39h2.328V4.895h-2.328V1.728h-3.36v3.167h-1.968V7.39h1.968v5.902c0 2.832 1.224 3.96 4.032 3.96zm9.12.215c3.816 0 6.24-2.519 6.24-6.478 0-3.959-2.424-6.478-6.24-6.478-3.816 0-6.24 2.52-6.24 6.478 0 3.959 2.424 6.478 6.24 6.478zm0-2.591c-1.656 0-2.712-1.512-2.712-3.887s1.056-3.887 2.712-3.887c1.656 0 2.712 1.512 2.712 3.887s-1.056 3.887-2.712 3.887zm15.528 2.52c3.072 0 5.064-2.52 5.064-6.407s-1.968-6.406-5.016-6.406c-1.392 0-2.712.624-3.456 1.775H54V0h-3.36v17.083h3.264v-1.607h.048c.744 1.248 2.088 1.92 3.504 1.92zm-1.08-2.568c-1.512 0-2.544-1.416-2.544-3.839s1.032-3.839 2.544-3.839c1.608 0 2.64 1.512 2.64 3.84 0 2.326-1.032 3.838-2.64 3.838zm11.76 2.543c1.68 0 3.048-.623 3.96-1.92h.048c0 .6.048 1.129.168 1.632h3.024c-.216-.815-.336-1.8-.336-3.335V9.334c0-3.192-1.776-4.823-5.232-4.823-3.48 0-5.16 1.871-5.28 4.199h3.264c.048-1.152.768-1.848 2.016-1.848 1.176 0 1.992.624 1.992 2.16v.431c-.768.048-2.136.192-3.048.336-3.528.552-4.728 1.896-4.728 3.887 0 2.112 1.56 3.695 4.152 3.695zm1.008-2.399c-1.176 0-1.8-.624-1.8-1.536 0-.983.576-1.44 1.968-1.68.72-.12 1.728-.215 2.448-.263v.456c0 1.104-.12 1.751-.696 2.327-.48.48-1.224.696-1.92.696zm12.336 2.111v-6.526c0-2.231 1.008-3.31 2.4-3.31 1.32 0 2.136.839 2.136 2.686v7.15h3.36V9.597c0-3.31-1.752-4.99-4.488-4.99-1.296 0-2.496.528-3.36 1.631h-.048V0h-3.36v17.083h3.36zm14.4 0v-6.526c0-2.207 1.008-3.31 2.4-3.31 1.32 0 2.136.839 2.136 2.686v7.15h3.36V9.597c0-3.31-1.752-4.99-4.488-4.99-1.56 0-2.784.744-3.576 1.823h-.048V4.895H92.52v12.188h3.36z" transform="translate(-48 -37) translate(48 37)"/>
                      </g>
                  </g>
              </g>
            </svg>
          </a>

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

<!-- PagerWrapper -->
<div class="PageWrapper">

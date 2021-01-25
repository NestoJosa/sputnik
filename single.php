<?php get_header(); ?>

<?php if( have_posts() ): while( have_posts() ): the_post();   ?>

  <div class="PageWrapper">
    <div class="container">

      <!-- title -->
      <div class="row justify-content-center">
        <div class="col-md-8">
          <?php the_title(); ?>
        </div>
      </div>
    
      <!-- thumbnail -->
      <div class="row justify-content-center">
        <div class="col-md-10">
          <?php the_post_thumbnail(); ?>
        </div>
      </div>

      <!-- avatar -->
      <div class="row justify-content-center">
        <div class="col-md-8 p-x-32">
          <div class="">
            <!-- get_avatar returns an image -->
            <?php  echo get_avatar( get_the_author_meta('user_email'), '40', 'avatar_default', 'Avatar of author'); ?>
            <span class=""><?php echo get_the_author_meta('display_name'); ?></span>
            <span><?php echo get_the_author_meta('user_email'); ?></span>
          </div>
        </div>
      </div>

      <!-- body -->
      <div class="row justify-content-center">
        <div class="col-md-8 p-x-32">
          <?php the_content(); ?>  
        </div>
      </div>

    </div><!-- /container -->
  </div><!-- /PageWrapper -->

<?php endwhile; else: endif; ?>    

<?php get_footer(); ?>
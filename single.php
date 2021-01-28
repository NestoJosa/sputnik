<?php get_header(); ?>

<?php if( have_posts() ): while( have_posts() ): the_post();   ?>

  <div class="container SinglePost">

    <!-- title -->
    <div class="row justify-content-center">
      <div class="col-md-8">
        <h1 class="SinglePost__title"><?php the_title(); ?></h1>
      </div>
    </div>
  
    <!-- thumbnail -->
    <div class="row justify-content-center">
      <div class="col-md-10">
        <?php the_post_thumbnail('', array( 'class' => 'SinglePost__featuredImage' )); ?>
      </div>
    </div>

    <!-- avatar -->
    <div class="row justify-content-center">
      <div class="col-md-8 p-x-32">
        <div class="SinglePost__avatarWrapper">
          <!-- get_avatar returns an image -->
          <?php  echo get_avatar( get_the_author_meta('user_email'), '40', 'avatar_default', 'Avatar of author' ); ?>
          <div>
            <div class="SinglePost__authorName"><?php echo get_the_author_meta('display_name'); ?></div>
            <div class="SinglePost__authorEmail"><?php echo get_the_author_meta('user_email'); ?></div>
          </div>
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

<?php endwhile; else: endif; ?>    

<?php get_footer(); ?>
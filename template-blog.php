<?php

/*

  Template Name:  Blog Template

*/

?>

<?php get_header(); ?>

<!-- HeadingBlock -->
  <?php 
  
    $args = array(
      'heading' => 'Viden og Indsigt',
      'subHeading' => 'Free directories - directories are perfect for customers that are searching for a particular topic. What’s great about them is that you only have to post once and they are good for long periods of time.'
    );
  
    get_template_part('includes/section', 'HeadingBlock', $args); 

  ?>
<!-- /HeadingBlock -->
    
<!-- BlogPostCards -->
  <div class="container">
    <div class="row">

      <!-- Start Query -->
        <?php
          // the query
          $wpb_all_query = new WP_Query(
            array(
              'post_type'=>'post', 
              'post_status'=>'publish', 
              'posts_per_page'=>-1
            )
          ); 
        ?>

        <?php if ( $wpb_all_query -> have_posts() ) : ?>
          
          <!-- the loop -->
          <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>

            <?php get_template_part('includes/section', 'BlogPostCard'); ?>

          <?php endwhile; ?>
          <!-- end of the loop -->
      
      
        <?php wp_reset_postdata(); ?>
        
        <?php else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
      <!-- End Query -->

    </div><!-- /row -->
  </div><!-- /container -->
<!-- /BlogPostCards -->

<?php get_footer(); ?>
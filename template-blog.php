<?php

/*

  Template Name:  Blog Template

*/

?>

<?php get_header(); ?>

<!-- PageWrapper -->
<div class="PageWrapper">

  <!-- HeadingBlock -->
    <div class="container">
      <div class="row">
        <div class="col">
          <h1>Hello?</h1>
        </div>
      </div>
    </div>
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
          
          <ul>
          
              <!-- the loop -->
              <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>

                  <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

              <?php endwhile; ?>
              <!-- end of the loop -->
          
          </ul>
          
              <?php wp_reset_postdata(); ?>
          
          <?php else : ?>
              <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
          <?php endif; ?>
        <!-- End Query -->

      </div>
    </div>
  <!-- /BlogPostCards -->

</div>
<!-- /PageWrapper -->

<?php get_footer(); ?>
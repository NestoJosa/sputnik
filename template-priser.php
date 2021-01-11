<?php

/*
Template Name:  Priser Template
*/

?>

<?php get_header(); ?>

<div class="container">

  <h1><?php the_title(); ?></h1>

  <!-- Include section-content -->
  <?php get_template_part('includes/section', 'content');  ?>
  <!-- /Include section-content -->

</div>



<?php get_footer(); ?>
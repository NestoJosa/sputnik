<?php get_header(); ?>

<!-- MiniPageWrapper -->
<div class="MiniPageWrapper">

  <!-- HeadingBlock -->
  <?php 

  $args = array(
    'preHeading' => 'Fejl 404',
    'heading' => 'Siden findes ikke',
  );

  get_template_part('includes/section', 'HeadingBlock', $args); 

  ?>
  <!-- /HeadingBlock -->
  
</div>
<!-- /MiniPageWrapper -->

<?php get_footer(); ?>
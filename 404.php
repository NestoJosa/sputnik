<?php get_header(); ?>


<!-- HeadingBlock -->
<?php 

$args = array(
  'preHeading' => 'Fejl 404',
  'heading' => 'Siden findes ikke',
);

get_template_part('includes/section', 'HeadingBlock', $args); 

?>
<!-- /HeadingBlock -->

<?php get_footer(); ?>
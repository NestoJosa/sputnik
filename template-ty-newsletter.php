<?php

/* 

  Template Name: TY Newsletter Signup

*/

?>

<?php get_header(); ?>

<!-- MiniPageWrapper -->
<div class="MiniPageWrapper">

  <!-- HeadingBlock -->
    <?php 
  
    $args = array(
      'preHeading' => 'preHeading',
      'heading' => 'Tak for din tilmelding!',
      'subHeading' => 'Ligula praesent egestas. Convallis conubia faucibus porta tempor bibendum magna justo eros placerat pretium lobortis feugiat tincidunt nam accumsan convallis amet pellentesque potenti habitasse eleifend.
      ',
    );
  
    get_template_part('includes/section', 'HeadingBlock', $args); 
  
    ?>
  <!-- /HeadingBlock -->

</div>
<!-- /MiniPageWrapper -->

<?php get_footer(); ?>

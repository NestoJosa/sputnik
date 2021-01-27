<!-- section-HeadingBlock.php -->

<?php

  $preHeading = isset($args['preHeading'])  ? $args['preHeading'] : '';
  $heading = isset($args['heading']) ? $args['heading'] : '';
  $subHeading = isset($args['subHeading']) ? $args['subHeading'] : '';

?>

<div class="container-fluid HeadingBlockWrapper">
  <div class="container HeadingBlock">
    <div class="row justify-content-center">

      <div class="col-md-8">
        <p class="HeadingBlock__preHeading"><?php echo $preHeading ?></p>
        <h2 class="HeadingBlock__heading"><?php echo $heading ?></h2>
        <p  class="HeadingBlock__subHeading"><?php echo $subHeading ?></p>
      </div>

    </div>   
  </div>
</div>

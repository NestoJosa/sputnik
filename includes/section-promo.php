<?php 
  
  $attachment_id = isset($args['attachment_id']) ? $args['attachment_id'] : '';

  $preHeading = isset($args['preHeading']) ? $args['preHeading'] : 'preHeading';
  $heading = isset($args['heading']) ? $args['heading'] : 'heading';
  $subHeading = isset($args['subHeading']) ? $args['subHeading'] : 'subHeading';

  $buttonText = isset($args['buttonText']) ? $args['buttonText'] : 'buttonText';
  $pageTitleToLinkTo = isset($args['pageTitleToLinkTo']) ? get_permalink( get_page_by_title( $args['pageTitleToLinkTo'] )) : 'pageTitleToLinkTo';

?>

<div class="PromoWrapper container-fluid p-0">
  <div class="container">

    <div class="row justify-content-end">
      <div class="Dots Dots--right col-md-3"></div>
    </div>

    <div class="row justify-content-center no-gutters">
      <div class="Promo col-md-10">
        <div class="row align-items-center">
          <div class="col-md-6">
            <?php 
              echo wp_get_attachment_image( $attachment_id, $size = 'large', $icon = false, $attr = 
                array( 
                  'sizes' => '(min-width: 768px) 450px, 100vw',
                  'class' => 'Promo__image'
                ) 
              );
            ?>
          </div>
          <div class="col-md-6">
            <p class="Promo__preHeading"><?php echo $preHeading; ?></p>
            <h2 class="Promo__heading"><?php echo $heading; ?></h2>
            <p class="Promo__subHeading"><?php echo $subHeading; ?></p>
            <a class="ButtonLarge" href="<?php echo $pageTitleToLinkTo; ?>">
              <?php echo $buttonText; ?>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="row justify-content-start">
      <div class="Dots Dots--left col-md-3"></div>
    </div>

  </div><!-- /container -->
</div><!-- /PromoWrapper container-fluid p-0 -->
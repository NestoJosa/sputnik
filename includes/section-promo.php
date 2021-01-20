<?php 


  $imgPath = ($args['imgPath']) ? get_template_directory_uri() . $args['imgPath'] : 'imgPath';
  $imgAltText = ($args['imgAltText']) ? $args['imgAltText'] : 'imgAltText';

  $preHeading = ($args['preHeading']) ? $args['preHeading'] : 'preHeading';
  $heading = ($args['heading']) ? $args['heading'] : 'heading';
  $subHeading = ($args['subHeading']) ? $args['subHeading'] : 'subHeading';

  $buttonText = ($args['buttonText']) ? $args['buttonText'] : 'buttonText';

  $pageToLinkTo = ($args['pageToLinkTo']) ? get_permalink( get_page_by_title( $args['pageToLinkTo'] )) : 'pageToLinkTo';


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
            <img class="Promo__image" src="<?php echo $imgPath; ?>" alt="<?php echo $imgAltText; ?>">
          </div>
          <div class="col-md-6">
            <p class="Promo__preHeading"><?php echo $preHeading; ?></p>
            <h2 class="Promo__heading"><?php echo $heading; ?></h2>
            <p class="Promo__subHeading"><?php echo $subHeading; ?></p>

            <a href="<?php echo $pageToLinkTo; ?>">
              <button class="ButtonSolid--large" type="button">
                <?php echo $buttonText; ?>
              </button>  
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
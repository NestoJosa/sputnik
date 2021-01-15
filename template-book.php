<?php

/*
Template Name:  Book Template
*/

?>

<?php get_header(); ?>

<!-- Hero -->
<div class="Hero Hero--onPricePage container-fluid p-0">
    <div class="container">
      <div class="row align-items-center">
        <div class="Hero__image col-md-6 order-md-2">
          <img src="<?php echo get_template_directory_uri();?>/dist/img/man-with-computer-circle-bg--large.png" alt="Man using computer">
        </div>
        <div class="col-md-6 order-md-1">
          <h1 class="Hero__heading">Marketing Automation på abonnement</h1>
          <p class="Hero__subHeading">Vi tilbyder Marketing Automation på abonnement så du kan få alle fordelen til en fast lav månedlig pris. Du slipper for alt besværet - og sparer samtidig penge.</p>
        </div>
      </div>
    </div>
  </div>
<!-- /Hero -->

<!-- ContactForm -->
  <div class="ContactFormWrapper container-fluid p-0">
    <div class="container">
      <div class="ContactForm row justify-content-between">
        <div class="col-md-6 order-md-2">
          <h2 class="ContactForm__heading">Udfyld formularen. Så kontakter vi dig!</h2>
          <p class="ContactForm__subHeading">Free directories: directories are perfect for customers that are searching for a particular topic. What’s great about them is that you only have to post once and they are good for long periods of time.</p>
          <p class="ContactForm__phoneNumberAndEmail">31 70 01 01<br>hello@autobahncph.dk</p>
        </div>
        <div class="col-md-5 order-md-1">
          Marketo Form Here
        </div>
      </div>
    </div>
  </div>
<!-- /ContactForm -->

<?php get_footer(); ?>
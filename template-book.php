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
          <img src="<?php echo get_template_directory_uri();?>/dist/img/man-and-woman-on-phone--large.png" alt="Man using computer">
        </div>
        <div class="col-md-6 order-md-1">
          <h1 class="Hero__heading">Book et møde</h1>
          <p class="Hero__subHeading">Er du nysgerrig efter at høre, hvor hurtigt DU kan være i gang med at automatisere? Vi lytter til dine behov og hjælper dig rigtigt i gang.</p>
        </div>
      </div>
    </div>
  </div>
<!-- /Hero -->

<!-- ContactForm -->
  <div class="ContactFormWrapper container-fluid p-0">
    <div class="container">
      <div class="ContactForm row justify-content-between">
        <div class="col-md-6">
          <h2 class="ContactForm__heading">Send os en mail eller ring</h2>
          <p class="ContactForm__subHeading">... så tager vi fat i dig og finder et tidspunkt til et møde. Vi kan klare alt virtuelt og uden behov for personlig kontakt.</p>
          <p class="ContactForm__phoneNumberAndEmail">
            <a class="PhoneToLink PhoneToLink--inFooter PhoneToLink--inPrivacyPage" href="tel:004551514784">51 51 47 84</a>
            <br>
            <a class="MailTo MailTo--inFooter MailTo MailTo--inPrivacyPage" href="mailto:hello@autobahncph.dk">hello@autobahncph.dk</a></p>
        </div>
        <!-- <div class="col-md-5 order-md-1">
          Marketo Form Here
        </div> -->
      </div>
    </div>
  </div>
<!-- /ContactForm -->

<?php get_footer(); ?>
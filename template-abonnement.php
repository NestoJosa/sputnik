<?php

/*
Template Name:  Abonnement Template
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

<!-- HeadingBlock -->
<div class="HeadingBlock container">
    <div class="row justify-content-center">

      <div class="col-md-8">
        <p class="HeadingBlock__preHeading">Fordele</p>
        <h2 class="HeadingBlock__heading">Alle fordelene. Uden alt besværet!</h2>
        <p class="HeadingBlock__subHeading">Free directories: directories are perfect for customers that are searching for a particular topic. What’s great about them is that you only have to post once and they are good for long periods of time. When you don’t have to resubmit your information every week or every month.</p>
      </div>

    </div>   
  </div>
<!-- /HeadingBlock -->

<!-- About -->
  <div class="About container">
    <div class="row">
      <div class="col-md-4">
        <!-- the animation is triggered when the icon is visible on the screen, via the js-hook -->
        <div class="AboutCard__iconWrapper">
          
          <img src="<?php echo get_template_directory_uri();?>/dist/img/icon-number-one.png" alt="Number one icon">

        </div>
        <h3 class="AboutCard__heading">Strategi & rådgivning</h3>
        <p class="AboutCard__subHeading">Har du brug for at få lagt den rigtige plan? Eller bare få ført den du har ud i livet? Vi kan hjælpe.</p>
      </div>
      <div class="col-md-4">
      <div class="AboutCard__iconWrapper">
          
          <img src="<?php echo get_template_directory_uri();?>/dist/img/icon-number-two.png" alt="Number two icon">

        </div>
        <h3 class="AboutCard__heading">Design & brugeroplevelse</h3>
        <p class="AboutCard__subHeading">Vi designer den digitale kunderejse, der giver dig det rigtige aftryk i markedet og som kan mærkes på bundlinjen</p>
      </div>
      <div class="col-md-4">
      <div class="AboutCard__iconWrapper">
          
          <img src="<?php echo get_template_directory_uri();?>/dist/img/icon-number-three.png" alt="Number three icon">

        </div>
        <h3 class="AboutCard__heading">Martech</h3>
        <p class="AboutCard__subHeading">Få en Martech løsning der sikrer at i får mest muligt ud af Jeres kundedata, og kan fungere som omdrejningspunkt for Jeres kommunikation</p>
      </div>
    </div>
  </div>
<!-- /About -->

<?php get_footer(); ?>
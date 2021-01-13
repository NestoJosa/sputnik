<?php

/*
Template Name:  Priser Template
*/

?>

<?php get_header(); ?>

<!-- Hero -->
<div class="Hero container-fluid p-0">
    <div class="container">
      <div class="row align-items-center">
        <div class="Hero__image col-md-6 order-md-2">
          <img src="<?php echo get_template_directory_uri();?>/dist/img/man-with-computer--large.png" alt="Man using computer">
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
        <h2 class="HeadingBlock__heading">Alle fordelene. Uden alt besværet!</h2>
        <p  class="HeadingBlock__subHeading">Free directories: directories are perfect for customers that are searching for a particular topic. What’s great about them is that you only have to post once and they are good for long periods of time. When you don’t have to resubmit your information every week or every month.</p>
      </div>

    </div>   
  </div>
<!-- /HeadingBlock -->

<!-- SubCards -->
  <div class="container">

    <!-- table -->
    <div class="row">
      <div class="col">
        <div class="SubTable">

            <div class="SubTable__labels">Contacts</div>
            <div class="SubTable__labels">Lead score</div>
            <div class="SubTable__labels">Lead stages</div>
            <div class="SubTable__labels">Content Automations/ Blasts</div>
            <div class="SubTable__labels">Reports</div>
            <div class="SubTable__labels">Sales notifications</div>
            <div class="SubTable__labels">Webinar support</div>
            <div class="SubTable__labels">Multi language</div>
            <div class="SubTable__labels">Channel tracking</div>
            <div class="SubTable__labels">Customer engagement</div>
            <div class="SubTable__labels">Customer score</div>
            <div class="SubTable__labels">Customer onboarding flow</div>

            

        </div>
      </div>
    </div>
    <!-- /table -->

    <div class="row justify-content-center">
      <div class="col-auto">
        All prices is pr. month (invoiced yearly)
      </div>
    </div>

  </div>


<!-- /SubCards -->




<?php get_footer(); ?>
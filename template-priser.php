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

<!-- table -->
  <?php 

    // icons for the table

    $icon_check_box = '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"> <g fill="none" fill-rule="evenodd"> <g> <g> <g transform="translate(-564 -1381) translate(160 1369) translate(404 12)"> <rect width="20" height="20" x="2" y="2" fill="#FF582D" rx="6"/> <g fill="#FBF9F0" transform="rotate(-45 18.45 1.672)"> <rect width="13" height="2" x=".793" y="4.55" rx="1"/> <rect width="2" height="6" x=".636" y=".464" rx="1"/> </g> </g> </g> </g> </g> </svg>';
    
    $icon_dash = '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"> <g fill="none" fill-rule="evenodd"> <g fill="#FF582D"> <g> <g transform="translate(-564 -1429) translate(160 1417) translate(404 12)"> <rect width="8" height="2" x="8" y="11" rx="1"/> </g> </g> </g> </g></svg>';

  ?>

  <div class="container">
    <div class="row">
      <div class="col">

        <div class="SubTable">

            <!-- Lines -->
            <div class="SubTable__lines"></div>
            <div class="SubTable__lines"></div>
            <div class="SubTable__lines"></div>
            <div class="SubTable__lines"></div>
            <div class="SubTable__lines"></div>
            <div class="SubTable__lines"></div>
            <div class="SubTable__lines"></div>
            <div class="SubTable__lines"></div>
            <div class="SubTable__lines"></div>
            <div class="SubTable__lines"></div>
            <div class="SubTable__lines"></div>
            <div class="SubTable__lines"></div>
            <!-- /Lines -->

            <!-- Labels -->
            <span class="SubTable__labels SubTable__labels-1">Contacts</span>
            <span class="SubTable__labels SubTable__labels-2">Lead score</span>
            <span class="SubTable__labels SubTable__labels-3">Lead stages</span>
            <span class="SubTable__labels SubTable__labels-4">Content Automations/ Blasts</span>
            <span class="SubTable__labels SubTable__labels-5">Reports</span>
            <span class="SubTable__labels SubTable__labels-6">Sales notifications</span>
            <span class="SubTable__labels SubTable__labels-7">Webinar support</span>
            <span class="SubTable__labels SubTable__labels-8">Multi language</span>
            <span class="SubTable__labels SubTable__labels-9">Channel tracking</span>
            <span class="SubTable__labels SubTable__labels-10">Customer engagement</span>
            <span class="SubTable__labels SubTable__labels-11">Customer score</span>
            <span class="SubTable__labels SubTable__labels-12">Customer onboarding flow</span>
            <!-- /Labels -->

            <!-- Most Popular -->
            <span class="SubTable__mostPopular">Most popular</span>
            <!-- /Most Popular -->

            <!-- Growth Header -->
            <div class="SubTable__header SubTable__header--growth">
              <p class="SubTable__subName">Growth</p>        
              <p class="SubTable__subNameDesc">Simple Lead Journey</p>        
            </div>
            <!-- /Growth Header -->

            <!-- Growth Data -->
            <span class="SubTable__growthData SubTable__growthData-1">2000</span>
            <span class="SubTable__growthData SubTable__growthData-2">Simple</span>
            <span class="SubTable__growthData SubTable__growthData-3">2</span>
            <span class="SubTable__growthData SubTable__growthData-4">15</span>
            <span class="SubTable__growthData SubTable__growthData-5">Simple</span>
            <span class="SubTable__growthData SubTable__growthData-6"><?php echo $icon_check_box ?></span>
            <span class="SubTable__growthData SubTable__growthData-7"><?php echo $icon_dash ?></span>
            <span class="SubTable__growthData SubTable__growthData-8"><?php echo $icon_dash ?></span>
            <span class="SubTable__growthData SubTable__growthData-9"><?php echo $icon_dash ?></span>
            <span class="SubTable__growthData SubTable__growthData-10"><?php echo $icon_dash ?></span>
            <span class="SubTable__growthData SubTable__growthData-11"><?php echo $icon_dash ?></span>
            <span class="SubTable__growthData SubTable__growthData-12"><?php echo $icon_dash ?></span>
            <!-- /Growth Data -->

            <!-- Growth Foot -->
            <div class="SubTable__footer SubTable__footer--growth">
              <p class="SubTable__priceFrom">Price from</p>        
              <p class="SubTable__price">DKK 3.900,-</p>        
            </div>
            <!-- Growth Foot -->

            <!-- Scale Header -->
            <div class="SubTable__header SubTable__header--scale">
              <p class="SubTable__subName">Scale</p>        
              <p class="SubTable__subNameDesc">Advanced Lead Journey</p>        
            </div>
            <!-- /Scale Header -->

            <!-- Scale Data -->
            <span class="SubTable__scaleData SubTable__scaleData-1">5000</span>
            <span class="SubTable__scaleData SubTable__scaleData-2">Advanced</span>
            <span class="SubTable__scaleData SubTable__scaleData-3">5</span>
            <span class="SubTable__scaleData SubTable__scaleData-4">25</span>
            <span class="SubTable__scaleData SubTable__scaleData-5">Advanced</span>
            <span class="SubTable__scaleData SubTable__scaleData-6"><?php echo $icon_check_box ?></span>
            <span class="SubTable__scaleData SubTable__scaleData-7"><?php echo $icon_check_box ?></span>
            <span class="SubTable__scaleData SubTable__scaleData-8"><?php echo $icon_check_box ?></span>
            <span class="SubTable__scaleData SubTable__scaleData-9"><?php echo $icon_check_box ?></span>
            <span class="SubTable__scaleData SubTable__scaleData-10"><?php echo $icon_dash ?></span>
            <span class="SubTable__scaleData SubTable__scaleData-11"><?php echo $icon_dash ?></span>
            <span class="SubTable__scaleData SubTable__scaleData-12"><?php echo $icon_dash ?></span>
            <!-- /Scale Data -->

            <!-- Scale Foot -->
            <div class="SubTable__footer SubTable__footer--scale">
              <p class="SubTable__priceFrom">Price from</p>        
              <p class="SubTable__price">DKK 3.900,-</p>        
            </div>
            <!-- Scale Foot -->

            <!-- Enterprise Header -->
            <div class="SubTable__header SubTable__header--enterprise">
              <p class="SubTable__subName">Enterprise</p>        
              <p class="SubTable__subNameDesc">Customer Journey</p>        
            </div>
            <!-- /Enterprise Header -->

            <!-- Enterprise Data -->
            <span class="SubTable__enterpriseData SubTable__enterpriseData-1">10.000</span>
            <span class="SubTable__enterpriseData SubTable__enterpriseData-2">Advanced</span>
            <span class="SubTable__enterpriseData SubTable__enterpriseData-3">10</span>
            <span class="SubTable__enterpriseData SubTable__enterpriseData-4">50</span>
            <span class="SubTable__enterpriseData SubTable__enterpriseData-5">Advanced</span>
            <span class="SubTable__enterpriseData SubTable__enterpriseData-6"><?php echo $icon_check_box ?></span>
            <span class="SubTable__enterpriseData SubTable__enterpriseData-7"><?php echo $icon_check_box ?></span>
            <span class="SubTable__enterpriseData SubTable__enterpriseData-8"><?php echo $icon_check_box ?></span>
            <span class="SubTable__enterpriseData SubTable__enterpriseData-9"><?php echo $icon_check_box ?></span>
            <span class="SubTable__enterpriseData SubTable__enterpriseData-10"><?php echo $icon_check_box ?></span>
            <span class="SubTable__enterpriseData SubTable__enterpriseData-11"><?php echo $icon_check_box ?></span>
            <span class="SubTable__enterpriseData SubTable__enterpriseData-12"><?php echo $icon_check_box ?></span>
            <!-- /Enterprise Data -->

            <!-- Enterprise Foot -->
            <div class="SubTable__footer SubTable__footer--enterprise">
              <p class="SubTable__priceFrom">Price from</p>        
              <p class="SubTable__price">DKK 3.900,-</p>        
            </div>
            <!-- Enterprise Foot -->

        </div><!-- /SubTable -->

      </div><!-- /col -->
    </div><!-- /row -->

    <div class="FinePrint row justify-content-center">
      <div class="col-auto">
        All prices is pr. month (invoiced yearly)
      </div>
    </div>

  </div><!-- /container -->


<!-- /table -->




<?php get_footer(); ?>
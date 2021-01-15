<?php

/*
Template Name:  Priser Template
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
          <h1 class="Hero__heading">Priser og pakker til alle størrelser virksomheder</h1>
          <p class="Hero__subHeading">Hos Autobahn laver vi både tilpassede løsninger og færdige pakker hvor alle kan være med. Se priser på være abonnementsløsning og find den der passer dig.</p>
        </div>
      </div>
    </div>
  </div>
<!-- /Hero -->

<!-- HeadingBlock -->
  <div class="HeadingBlock container">
    <div class="row justify-content-center">

      <div class="col-md-8">
        <p class="HeadingBlock__preHeading"></p>
        <h2 class="HeadingBlock__heading">Alle fordelene. Uden alt besværet!</h2>
        <p class="HeadingBlock__subHeading">Vores Lead Automation på abonnement, er den letteste og billigste måde at arbejde med Lead Automation, der virker. Vi tager os af alt teknikken, så du kan fokusere på forretningen. Det der før var unikt for dem med store budgetter, kan du nu få til en fast lav månedlig pris.</p>
      </div>

    </div>   
  </div>
<!-- /HeadingBlock -->

<?php 

  /* 
  
    icons

  */

  $icon_check_box = '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"> <g fill="none" fill-rule="evenodd"> <g> <g> <g transform="translate(-564 -1381) translate(160 1369) translate(404 12)"> <rect width="20" height="20" x="2" y="2" fill="#FF582D" rx="6"/> <g fill="#FBF9F0" transform="rotate(-45 18.45 1.672)"> <rect width="13" height="2" x=".793" y="4.55" rx="1"/> <rect width="2" height="6" x=".636" y=".464" rx="1"/> </g> </g> </g> </g> </g> </svg>';
  
  $icon_dash = '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"> <g fill="none" fill-rule="evenodd"> <g fill="#FF582D"> <g> <g transform="translate(-564 -1429) translate(160 1417) translate(404 12)"> <rect width="8" height="2" x="8" y="11" rx="1"/> </g> </g> </g> </g></svg>';

?>

<!-- SubCards -->
  <div class="SubCardsWrapper container">

    <!-- Growth Card -->
    <div class="row">
      <div class="col">
        <div class="SubCard">
          <div class="SubCard__promote">
          </div>
          <div class="SubCard__header">
            <span class="SubCard__name">Growth</span>
            <span class="SubCard__description">Simple Lead Journey</span>
          </div>
          <div class="SubCard__data">
            <span class="SubCard__label">Antal Leads</span>
            <span class="SubCard__value">2000</span>
          </div>
          <div class="SubCard__data">
            <span class="SubCard__label">Lead score</span>
            <span class="SubCard__value">Simpel</span>
          </div>
          <div class="SubCard__data">
            <span class="SubCard__label">Leadfaser</span>
            <span class="SubCard__value">2</span>
          </div>
          <div class="SubCard__data">
            <span class="SubCard__label">Stykker indhold</span>
            <span class="SubCard__value">15</span>
          </div>
          <div class="SubCard__data">
            <span class="SubCard__label">Rapporter</span>
            <span class="SubCard__value">Simpel</span>
          </div>
          <div class="SubCard__data">
            <span class="SubCard__label">Salgs Notifikationer</span>
            <span class="SubCard__value"><?php echo $icon_check_box ?></span>
          </div>
          <div class="SubCard__footer">
            <span class="SubCard__priceFrom">Price from</span>
            <span class="SubCard__price">DKK 3.900,-</span>
          </div>
        </div>
      </div>
    </div>
    <!-- /Growth Card -->

    <!-- Scale Card -->
    <div class="row">
      <div class="col">
        <div class="SubCard SubCard--scale">
          <div class="SubCard__promote SubCard__promote--scale">
            Most Popular
          </div>
          <div class="SubCard__header SubCard__header--scale">
            <span class="SubCard__name">Scale</span>
            <span class="SubCard__description">Advanced Lead Journey</span>
          </div>
          <div class="SubCard__data">
            <span class="SubCard__label">Antal Leads</span>
            <span class="SubCard__value">5000</span>
          </div>
          <div class="SubCard__data">
            <span class="SubCard__label">Lead score</span>
            <span class="SubCard__value">Avanceret</span>
          </div>
          <div class="SubCard__data">
            <span class="SubCard__label">Leadfaser</span>
            <span class="SubCard__value">5</span>
          </div>
          <div class="SubCard__data">
            <span class="SubCard__label">Stykker indhold</span>
            <span class="SubCard__value">25</span>
          </div>
          <div class="SubCard__data">
            <span class="SubCard__label">Rapporter</span>
            <span class="SubCard__value">Avanceret</span>
          </div>
          <div class="SubCard__data">
            <span class="SubCard__label">Salgs Notifikationer</span>
            <span class="SubCard__value"><?php echo $icon_check_box ?></span>
          </div>
          <div class="SubCard__data">
            <span class="SubCard__label">Webinarer</span>
            <span class="SubCard__value"><?php echo $icon_check_box ?></span>
          </div>
          <div class="SubCard__data">
            <span class="SubCard__label">Flere sprog</span>
            <span class="SubCard__value"><?php echo $icon_check_box ?></span>
          </div>
          <div class="SubCard__data">
            <span class="SubCard__label">Tracking af kanaler</span>
            <span class="SubCard__value"><?php echo $icon_check_box ?></span>
          </div>
          <div class="SubCard__footer">
            <span class="SubCard__priceFrom">Price from</span>
            <span class="SubCard__price">DKK 6.500,-</span>
          </div>
        </div>
      </div>
    </div>
    <!-- /Scale Card -->

    <!-- Enterprise Card -->
    <div class="row">
      <div class="col">
        <div class="SubCard">
          <div class="SubCard__promote">
          </div>
          <div class="SubCard__header">
            <span class="SubCard__name">Enterprise</span>
            <span class="SubCard__description">Customer Journey</span>
          </div>
          <div class="SubCard__data">
            <span class="SubCard__label">Antal Leads</span>
            <span class="SubCard__value">10.000</span>
          </div>
          <div class="SubCard__data">
            <span class="SubCard__label">Lead score</span>
            <span class="SubCard__value">Avanceret</span>
          </div>
          <div class="SubCard__data">
            <span class="SubCard__label">Leadfaser</span>
            <span class="SubCard__value">10</span>
          </div>
          <div class="SubCard__data">
            <span class="SubCard__label">Stykker indhold</span>
            <span class="SubCard__value">50</span>
          </div>
          <div class="SubCard__data">
            <span class="SubCard__label">Rapporter</span>
            <span class="SubCard__value">Avanceret</span>
          </div>
          <div class="SubCard__data">
            <span class="SubCard__label">Salgs Notifikationer</span>
            <span class="SubCard__value"><?php echo $icon_check_box ?></span>
          </div>
          <div class="SubCard__data">
            <span class="SubCard__label">Webinarer</span>
            <span class="SubCard__value"><?php echo $icon_check_box ?></span>
          </div>
          <div class="SubCard__data">
            <span class="SubCard__label">Flere sprog</span>
            <span class="SubCard__value"><?php echo $icon_check_box ?></span>
          </div>
          <div class="SubCard__data">
            <span class="SubCard__label">Tracking af kanaler</span>
            <span class="SubCard__value"><?php echo $icon_check_box ?></span>
          </div>
          <div class="SubCard__data">
            <span class="SubCard__label">NPS måling</span>
            <span class="SubCard__value"><?php echo $icon_check_box ?></span>
          </div>
          <div class="SubCard__data">
            <span class="SubCard__label">Kryds-/ mersalg score</span>
            <span class="SubCard__value"><?php echo $icon_check_box ?></span>
          </div>
          <div class="SubCard__data">
            <span class="SubCard__label">Velkomstprogram</span>
            <span class="SubCard__value"><?php echo $icon_check_box ?></span>
          </div>
          <div class="SubCard__footer">
            <span class="SubCard__priceFrom">Price from</span>
            <span class="SubCard__price">DKK 10.000,-</span>
          </div>
        </div>
      </div>
    </div>
    <!-- /Enterprise Card -->

  </div>
<!-- /SubCards -->


<!-- SubTable and FinePrint -->
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
            <span class="SubTable__labels SubTable__labels-1">Antal Leads</span>
            <span class="SubTable__labels SubTable__labels-2">Lead score</span>
            <span class="SubTable__labels SubTable__labels-3">Leadfaser</span>
            <span class="SubTable__labels SubTable__labels-4">Stykker indhold</span>
            <span class="SubTable__labels SubTable__labels-5">Rapporter</span>
            <span class="SubTable__labels SubTable__labels-6">Salgs Notifikationer</span>
            <span class="SubTable__labels SubTable__labels-7">Webinarer</span>
            <span class="SubTable__labels SubTable__labels-8">Flere sprog</span>
            <span class="SubTable__labels SubTable__labels-9">Tracking af kanaler</span>
            <span class="SubTable__labels SubTable__labels-10">NPS måling</span>
            <span class="SubTable__labels SubTable__labels-11">Kryds-/ mersalg score</span>
            <span class="SubTable__labels SubTable__labels-12">Velkomstprogram</span>
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
            <span class="SubTable__growthData SubTable__growthData-2">Simpel</span>
            <span class="SubTable__growthData SubTable__growthData-3">2</span>
            <span class="SubTable__growthData SubTable__growthData-4">15</span>
            <span class="SubTable__growthData SubTable__growthData-5">Simpel</span>
            <span class="SubTable__growthData SubTable__growthData-6"><?php echo $icon_check_box ?></span>
            <span class="SubTable__growthData SubTable__growthData-7"><?php echo $icon_dash ?></span>
            <span class="SubTable__growthData SubTable__growthData-8"><?php echo $icon_dash ?></span>
            <span class="SubTable__growthData SubTable__growthData-9"><?php echo $icon_dash ?></span>
            <span class="SubTable__growthData SubTable__growthData-10"><?php echo $icon_dash ?></span>
            <span class="SubTable__growthData SubTable__growthData-11"><?php echo $icon_dash ?></span>
            <span class="SubTable__growthData SubTable__growthData-12"><?php echo $icon_dash ?></span>
            <!-- /Growth Data -->

            <!-- Growth Footer -->
            <div class="SubTable__footer SubTable__footer--growth">
              <p class="SubTable__priceFrom">Price from</p>        
              <p class="SubTable__price">DKK 3.900,-</p>        
            </div>
            <!-- Growth Footer -->

            <!-- Scale Header -->
            <div class="SubTable__header SubTable__header--scale">
              <p class="SubTable__subName">Scale</p>        
              <p class="SubTable__subNameDesc">Advanced Lead Journey</p>        
            </div>
            <!-- /Scale Header -->

            <!-- Scale Data -->
            <span class="SubTable__scaleData SubTable__scaleData-1">5000</span>
            <span class="SubTable__scaleData SubTable__scaleData-2">Avanceret</span>
            <span class="SubTable__scaleData SubTable__scaleData-3">5</span>
            <span class="SubTable__scaleData SubTable__scaleData-4">25</span>
            <span class="SubTable__scaleData SubTable__scaleData-5">Avanceret</span>
            <span class="SubTable__scaleData SubTable__scaleData-6"><?php echo $icon_check_box ?></span>
            <span class="SubTable__scaleData SubTable__scaleData-7"><?php echo $icon_check_box ?></span>
            <span class="SubTable__scaleData SubTable__scaleData-8"><?php echo $icon_check_box ?></span>
            <span class="SubTable__scaleData SubTable__scaleData-9"><?php echo $icon_check_box ?></span>
            <span class="SubTable__scaleData SubTable__scaleData-10"><?php echo $icon_dash ?></span>
            <span class="SubTable__scaleData SubTable__scaleData-11"><?php echo $icon_dash ?></span>
            <span class="SubTable__scaleData SubTable__scaleData-12"><?php echo $icon_dash ?></span>
            <!-- /Scale Data -->

            <!-- Scale Footer -->
            <div class="SubTable__footer SubTable__footer--scale">
              <p class="SubTable__priceFrom">Price from</p>        
              <p class="SubTable__price">DKK 6.500,-</p>        
            </div>
            <!-- Scale Footer -->

            <!-- Enterprise Header -->
            <div class="SubTable__header SubTable__header--enterprise">
              <p class="SubTable__subName">Enterprise</p>        
              <p class="SubTable__subNameDesc">Customer Journey</p>        
            </div>
            <!-- /Enterprise Header -->

            <!-- Enterprise Data -->
            <span class="SubTable__enterpriseData SubTable__enterpriseData-1">10.000</span>
            <span class="SubTable__enterpriseData SubTable__enterpriseData-2">Avanceret</span>
            <span class="SubTable__enterpriseData SubTable__enterpriseData-3">10</span>
            <span class="SubTable__enterpriseData SubTable__enterpriseData-4">50</span>
            <span class="SubTable__enterpriseData SubTable__enterpriseData-5">Avanceret</span>
            <span class="SubTable__enterpriseData SubTable__enterpriseData-6"><?php echo $icon_check_box ?></span>
            <span class="SubTable__enterpriseData SubTable__enterpriseData-7"><?php echo $icon_check_box ?></span>
            <span class="SubTable__enterpriseData SubTable__enterpriseData-8"><?php echo $icon_check_box ?></span>
            <span class="SubTable__enterpriseData SubTable__enterpriseData-9"><?php echo $icon_check_box ?></span>
            <span class="SubTable__enterpriseData SubTable__enterpriseData-10"><?php echo $icon_check_box ?></span>
            <span class="SubTable__enterpriseData SubTable__enterpriseData-11"><?php echo $icon_check_box ?></span>
            <span class="SubTable__enterpriseData SubTable__enterpriseData-12"><?php echo $icon_check_box ?></span>
            <!-- /Enterprise Data -->

            <!-- Enterprise Footer -->
            <div class="SubTable__footer SubTable__footer--enterprise">
              <p class="SubTable__priceFrom">Price from</p>        
              <p class="SubTable__price">DKK 10.000,-</p>        
            </div>
            <!-- Enterprise Footer -->

        </div><!-- /SubTable -->

      </div><!-- /col -->
    </div><!-- /row -->

    <div class="FinePrint row justify-content-center">
      <div class="col-auto">
        All prices are pr. month (invoiced yearly)
      </div>
    </div>

  </div><!-- /container -->
<!-- /SubTable and FinePrint -->

<?php get_template_part('includes/section', 'promo');  ?>


<?php get_footer(); ?>
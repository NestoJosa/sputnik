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
          <?php 
            echo wp_get_attachment_image( $attachment_id = 226, $size = 'large', $icon = false, 
              $attr = array( 
                'sizes' => '(min-width: 768px) 600px, 100vw',
                'loading' => false
              ) 
            );
          ?>
        </div>
        <div class="col-md-6 order-md-1">
          <h1 class="Hero__heading">Få flere leads til en lav månedlig pris - uden alt besværet</h1>
          <p class="Hero__subHeading">Lead Automation på abonnement, er den letteste og billigste måde at få flere leads og mere salg.</p>
        </div>
      </div>
    </div>
  </div>
<!-- /Hero -->

<!-- HeadingBlock -->
  <div class="HeadingBlockWrapper HeadingBlockWrapper--onLeadAutomationPage container-fluid">
    <div class="HeadingBlock container">
      <div class="row justify-content-center">

        <div class="col-md-8">
          <p class="HeadingBlock__preHeading">En smartere løsning</p>
          <h2 class="HeadingBlock__heading">Vi digitaliserer, og skaber sammenhæng imellem salg og marketing</h2>
          <p class="HeadingBlock__subHeading"></p>
        </div>

      </div>   
    </div>
  </div>
<!-- /HeadingBlock -->

<!-- ImageAndTextBoxes -->
  <div class="ImageAndTextBoxesWrapper container-fluid">
    <div class="ImageAndTextBoxes container">

      <div class="row align-items-center">

        <div class="col-md-6">
          <?php 
            echo wp_get_attachment_image( $attachment_id = 229, $size = 'large', $icon = false, 
              $attr = array( 
                'sizes' => '(min-width: 768px) 550px, 100vw',
                'class' => 'ImageAndTextBoxes__image'
              ) 
            );
          ?>
        </div>

        <div class="ImageAndTextBoxes__box col-md-6">
          <div class="ImageAndTextBoxes__heading">Fra manuel marketing til en automatiseret lead maskine</div>
          <p class="ImageAndTextBoxes__body">Vi automatiserer kommunikation gennem hele lead rejsen. Det gør, at der bliver fulgt op på leads fra første kontakt til en sælger tager over.</p>
        </div>

      </div><!-- /row -->

      <div class="row align-items-center">

        <div class="col-md-6 order-md-2">
          <?php 
            echo wp_get_attachment_image( $attachment_id = 230, $size = 'large', $icon = false, 
              $attr = array( 
                'sizes' => '(min-width: 768px) 550px, 100vw',
                'class' => 'ImageAndTextBoxes__image'
              ) 
            );
          ?>
        </div>

        <div class="ImageAndTextBoxes__box col-md-6 order-md-1">
          <div class="ImageAndTextBoxes__heading">Drop kold kanvas! Ring til varme leads.</div>
          <p class="ImageAndTextBoxes__body">Vi kvalificerer automatisk dine leads ud fra deres digitale adfærd. Vi giver besked, når Jeres leads viser købssignaler og notificerer en sælger.</p>
        </div>

      </div><!-- /row -->

    </div><!-- /container -->
  </div><!-- /container-fluid -->
<!-- /ImageAndTextBoxes -->

<!-- HeadingBlock -->
<div class="HeadingBlockWrapper HeadingBlockWrapper--whiteCreamBg container-fluid">
    <div class="HeadingBlock container">
      <div class="row justify-content-center">

        <div class="col-md-8">
          <p class="HeadingBlock__preHeading">En smartere løsning</p>
          <h2 class="HeadingBlock__heading">Det får du - og meget mere …</h2>
          <p class="HeadingBlock__subHeading"></p>
        </div>

      </div>   
    </div>
  </div>
<!-- /HeadingBlock -->

<!-- ImageAndCards -->
  <div class="ImageAndCardsWrapper container-fluid">
    <div class="ImageAndCards container">
      <div class="row">
        
        <div class="col-md-6">
          <?php 
            echo wp_get_attachment_image( $attachment_id = 231, $size = 'large', $icon = false, 
              $attr = array( 
                'sizes' => '(min-width: 768px) 550px, 100vw',
                'class' => 'ImageAndCards__image'
              ) 
            );
          ?>
        </div>
        
        <div class="col-md-6">
        
          <div class="ImageAndCards__firstCardsRow row">

            <div class="col-md-6">
              <!-- the animation is triggered when the icon is visible on the screen, via the js-hook -->
              <div class="AboutCard__iconWrapper">
                <svg xmlns="http://www.w3.org/2000/svg" class="AboutCard__icon js-AboutCard__icon" viewBox="0 0 80 81">
                  <g fill="none" fill-rule="evenodd">
                      <g>
                          <g>
                              <g>
                                  <g fill="#FBF9F0" stroke="#3B012D" stroke-opacity=".04" stroke-width="2">
                                      <path d="M50 1c8.008 0 15.258 3.246 20.506 8.494C75.754 14.742 79 21.992 79 30h0v20c0 8.008-3.246 15.258-8.494 20.506C65.258 75.754 58.008 79 50 79h0-20c-8.008 0-15.258-3.246-20.506-8.494C4.246 65.258 1 58.008 1 50h0V30c0-8.008 3.246-15.258 8.494-20.506C14.742 4.246 21.992 1 30 1h0z" transform="translate(-736 -2093) translate(736 2092.257) translate(0 .956)"/>
                                  </g>
                                  <g>
                                      <path class="utils-fill" d="M50.008 41v-6h-14v6h14zm4 16h-22V31h22v26z" transform="translate(-736 -2093) translate(736 2092.257) translate(0 .956) translate(8 8)"/>
                                      <path class="utils-stroke" d="M28 43H10c-1.105 0-2-.895-2-2V13c0-1.105.895-2 2-2h38c1.105 0 2 .895 2 2v15" transform="translate(-736 -2093) translate(736 2092.257) translate(0 .956) translate(8 8)"/>
                                      <path class="utils-stroke" d="M12 32l3.6-3.586c.781-.78 2.047-.78 2.828 0l.172.172c.781.78 2.047.78 2.828 0l8.172-8.172c.781-.78 2.047-.78 2.828 0l2.052 2.058c.394.394.934.607 1.491.585.557-.021 1.08-.274 1.443-.697L42 17" transform="translate(-736 -2093) translate(736 2092.257) translate(0 .956) translate(8 8)"/>
                                      <path class="utils-stroke" d="M36.008 17L42.008 17 42.008 23M38 45.5c.276 0 .5.224.5.5s-.224.5-.5.5-.5-.224-.5-.5.224-.5.5-.5M38 50.52c.276 0 .5.224.5.5s-.224.5-.5.5-.5-.224-.5-.5.224-.5.5-.5M43 45.48c.276 0 .5.224.5.5s-.224.5-.5.5-.5-.224-.5-.5.224-.5.5-.5M48 45.48c.276 0 .5.224.5.5s-.224.5-.5.5-.5-.224-.5-.5.224-.5.5-.5M43 50.5c.276 0 .5.224.5.5s-.224.5-.5.5-.5-.224-.5-.5.224-.5.5-.5M48 50.5c.276 0 .5.224.5.5s-.224.5-.5.5-.5-.224-.5-.5.224-.5.5-.5M50 40c.019.27-.08.536-.273.727-.191.192-.457.292-.727.273H37c-.275.011-.541-.096-.732-.294-.191-.198-.289-.468-.268-.742V36c-.02-.27.08-.536.272-.728.192-.192.457-.291.728-.272h12c.27-.019.536.08.727.273.192.191.292.457.273.727v4z" transform="translate(-736 -2093) translate(736 2092.257) translate(0 .956) translate(8 8)"/>
                                      <path class="utils-stroke" d="M32.008 31L54.008 31 54.008 57 32.008 57z" transform="translate(-736 -2093) translate(736 2092.257) translate(0 .956) translate(8 8)"/>
                                  </g>
                              </g>
                          </g>
                      </g>
                  </g>
                </svg>
              </div>
              <h3 class="AboutCard__heading">Lead Score</h3>
              <p class="AboutCard__subHeading">Vi holder styr på dine leads digitale adfærd, og giver alle leads en score så du ved hvem, der er mest tilbøjelige til at købe.</p>
            </div><!-- /col-md-6 -->

            <div class="col-md-6">
              <div class="AboutCard__iconWrapper">
               <!-- the animation is triggered when the icon is visible on the screen, via the js-hook -->
               <svg xmlns="http://www.w3.org/2000/svg" class="AboutCard__icon js-AboutCard__icon" viewBox="0 0 80 81">
                  <g fill="none" fill-rule="evenodd">
                      <g>
                          <g>
                              <g>
                                  <g fill="#FBF9F0" stroke="#3B012D" stroke-opacity=".04" stroke-width="2">
                                      <path d="M50 1c8.008 0 15.258 3.246 20.506 8.494C75.754 14.742 79 21.992 79 30h0v20c0 8.008-3.246 15.258-8.494 20.506C65.258 75.754 58.008 79 50 79h0-20c-8.008 0-15.258-3.246-20.506-8.494C4.246 65.258 1 58.008 1 50h0V30c0-8.008 3.246-15.258 8.494-20.506C14.742 4.246 21.992 1 30 1h0z" transform="translate(-1024 -2093) translate(736 2092.257) translate(288 .956)"/>
                                  </g>
                                  <g>
                                      <path class="utils-fill" d="M39 21.906c-2.4 1.6-3.648 4.538 0 7 2 5 5.72 3.654 7.922 1.334 2.507-3.602 3.148-8.182 1.726-12.334-3.516 2.65-6.648 2-9.648 4zM32.042 14.848C34.63 17.896 36 21.906 29.826 24.6c-2.826 6.308-7.124 3.972-9.982.6-2.858-3.372-3.954-12.382-1.444-17.144 4.652 3.93 10.4 2.98 13.642 6.792z" transform="translate(-1024 -2093) translate(736 2092.257) translate(288 .956) translate(8 8)"/>
                                      <path class="utils-stroke" d="M39 21.906c-2.4 1.6-3.648 4.538 0 7 2 5 5.72 3.654 7.922 1.334 2.507-3.602 3.148-8.182 1.726-12.334-3.516 2.65-6.648 2-9.648 4zM32.042 14.848C34.63 17.896 36 21.906 29.826 24.6c-2.826 6.308-7.124 3.972-9.982.6-2.858-3.372-3.954-12.382-1.444-17.144 4.652 3.93 10.4 2.98 13.642 6.792z" transform="translate(-1024 -2093) translate(736 2092.257) translate(288 .956) translate(8 8)"/>
                                      <path class="utils-stroke" d="M44 24.906c-6 3-9 11-9 11-2.112-7.961-6.46-15.151-12.528-20.72M9 36.056L17 36.056 17 52.056 9 52.056zM17 49.056c21.456 7.154 13.544 7.228 38-5-1.383-1.858-3.779-2.656-6-2L40.132 45" transform="translate(-1024 -2093) translate(736 2092.257) translate(288 .956) translate(8 8)"/>
                                      <path class="utils-stroke" d="M17 38.056h6c3.404.12 6.63 1.554 9 4h6c.8-.144 1.608.203 2.056.882.447.678.447 1.558 0 2.236-.448.679-1.256 1.026-2.056.882H27" transform="translate(-1024 -2093) translate(736 2092.257) translate(288 .956) translate(8 8)"/>
                                  </g>
                              </g>
                          </g>
                      </g>
                  </g>
               </svg>
              </div>
              <h3 class="AboutCard__heading">Lead Nurturing</h3>
              <p class="AboutCard__subHeading">Vi engagerer automatisk din målgruppe med relevante budskaber, der engagerer og flytter dem fra kolde til varme leads.</p>
            </div><!-- /col-md-6 -->

          </div><!-- /row -->

          <div class="row">

            <div class="col-md-6">
              <div class="AboutCard__iconWrapper">          
                <svg class="AboutCard__icon js-AboutCard__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80">
                  <g fill="none" fill-rule="evenodd">
                    <g>
                      <g>
                        <g>
                          <g fill="#FBF9F0" stroke="#3B012D" stroke-opacity=".04" stroke-width="2">
                            <path d="M50 1c8.008 0 15.258 3.246 20.506 8.494C75.754 14.742 79 21.992 79 30h0v20c0 8.008-3.246 15.258-8.494 20.506C65.258 75.754 58.008 79 50 79h0-20c-8.008 0-15.258-3.246-20.506-8.494C4.246 65.258 1 58.008 1 50h0V30c0-8.008 3.246-15.258 8.494-20.506C14.742 4.246 21.992 1 30 1h0z" transform="translate(-16 -2877) translate(0 1983) translate(16 894)"/>
                          </g>
                          <g>
                            <g>
                              <path class="utils-fill" fill-rule="nonzero" d="M19.608 25.87L44.372 2.875l-7.05 33.491c-.055.254-.235.469-.48.569l-.106.035c-.216.054-.448.016-.637-.108L19.608 25.87z" transform="translate(-16 -2877) translate(0 1983) translate(16 894) translate(8 7) translate(4 14)"/>
                              <path class="utils-stroke" d="M46 0L.862 18.646c-.547.23-.889.782-.853 1.375.036.592.442 1.098 1.013 1.261L18 26 46 0z" transform="translate(-16 -2877) translate(0 1983) translate(16 894) translate(8 7) translate(4 14)"/>
                              <path class="utils-stroke" d="M46 0l-7.7 36.572c-.125.581-.529 1.064-1.08 1.288-.55.225-1.176.164-1.672-.164L18 26 46 0z" transform="translate(-16 -2877) translate(0 1983) translate(16 894) translate(8 7) translate(4 14)"/>
                              <path class="utils-stroke" d="M18 26v12.96c0 .468.315.878.768 1 .452.122.93-.074 1.166-.478l5.122-8.78" transform="translate(-16 -2877) translate(0 1983) translate(16 894) translate(8 7) translate(4 14)"/>
                            </g>
                          </g>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
              </div>
              <h3 class="AboutCard__heading">Salgsnotifikationer</h3>
              <p class="AboutCard__subHeading">Når dine leads er varme giver vi besked, så en sælger kan følge op - med indsigter, der gør det let at lukke ordren.</p>
            </div>

            <div class="col-md-6">
              <div class="AboutCard__iconWrapper">          
                <svg xmlns="http://www.w3.org/2000/svg" class="AboutCard__icon js-AboutCard__icon" viewBox="0 0 80 81">
                  <g fill="none" fill-rule="evenodd">
                    <g>
                        <g>
                            <g>
                                <g fill="#FBF9F0" stroke="#3B012D" stroke-opacity=".04" stroke-width="2">
                                    <path d="M50 1c8.008 0 15.258 3.246 20.506 8.494C75.754 14.742 79 21.992 79 30h0v20c0 8.008-3.246 15.258-8.494 20.506C65.258 75.754 58.008 79 50 79h0-20c-8.008 0-15.258-3.246-20.506-8.494C4.246 65.258 1 58.008 1 50h0V30c0-8.008 3.246-15.258 8.494-20.506C14.742 4.246 21.992 1 30 1h0z" transform="translate(-1024 -2413) translate(736 2092.257) translate(288 320.956)"/>
                                </g>
                                <g>
                                    <path class="utils-fill" d="M15 27c0 3.866 3.134 7 7 7s7-3.134 7-7-3.134-7-7-7-7 3.134-7 7zM9 41H55V47H9z" transform="translate(-1024 -2413) translate(736 2092.257) translate(288 320.956) translate(8 8)"/>
                                    <path class="utils-stroke" d="M15 27c0 3.866 3.134 7 7 7s7-3.134 7-7-3.134-7-7-7-7 3.134-7 7z" transform="translate(-1024 -2413) translate(736 2092.257) translate(288 320.956) translate(8 8)"/>
                                    <path class="utils-stroke" d="M15 27c0 3.866 3.134 7 7 7s7-3.134 7-7-3.134-7-7-7-7 3.134-7 7z" transform="translate(-1024 -2413) translate(736 2092.257) translate(288 320.956) translate(8 8)"/>
                                    <path class="utils-stroke" d="M22 20L22 27 29 27M26 55c1.812-2.288 2.86-5.085 3-8M38 55c-1.812-2.288-2.86-5.085-3-8M22.998 55L40.998 55M9 41L55 41" transform="translate(-1024 -2413) translate(736 2092.257) translate(288 320.956) translate(8 8)"/>
                                    <path class="utils-stroke" d="M9 13L55 13 55 47 9 47z" transform="translate(-1024 -2413) translate(736 2092.257) translate(288 320.956) translate(8 8)"/>
                                    <path class="utils-stroke" d="M35 24L38 20 44 25 49 19M47 35L47 32M43 35L43 31M39 35L39 29M35 35L35 32" transform="translate(-1024 -2413) translate(736 2092.257) translate(288 320.956) translate(8 8)"/>
                                </g>
                            </g>
                        </g>
                    </g>
                  </g>
                </svg> 
              </div>
              <h3 class="AboutCard__heading">Rapportering</h3>
              <p class="AboutCard__subHeading">Med datadrevet marketing og salg får i tilgang til rapporter, så i hele tiden kan udvikle processen og resultaterne.</p>
            </div>

          </div><!-- /row -->
        
        </div><!-- /col-md-6 -->

      </div><!-- /row -->
    </div><!-- /container -->
  </div><!-- /container-fluid -->
<!-- /ImageAndCards -->

<!-- HeadingBlock -->
  <div class="HeadingBlock container">
    <div class="row justify-content-center">

      <div class="col-md-8">
        <p class="HeadingBlock__preHeading">Abonnementsløsning</p>
        <h2 class="HeadingBlock__heading">Alle fordelene. Uden alt besværet!</h2>
        <p class="HeadingBlock__subHeading">Vores abonnementsløsning er den letteste og billigste måde at arbejde med Lead Automation der virker. Vi tager os af alt teknikken, så du kan fokusere på forretningen. Det der før var unikt for dem med store budgetter, kan du nu få til en fast lav månedlig pris.</p>
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
          
        <svg xmlns="http://www.w3.org/2000/svg" class="AboutCard__icon js-AboutCard__icon" viewBox="0 0 80 81">
          <g fill="none" fill-rule="evenodd">
              <g>
                  <g>
                      <g fill="#FBF9F0" stroke="#3B012D" stroke-opacity=".04" stroke-width="2">
                          <path d="M50 1c8.008 0 15.258 3.246 20.506 8.494C75.754 14.742 79 21.992 79 30h0v20c0 8.008-3.246 15.258-8.494 20.506C65.258 75.754 58.008 79 50 79h0-20c-8.008 0-15.258-3.246-20.506-8.494C4.246 65.258 1 58.008 1 50h0V30c0-8.008 3.246-15.258 8.494-20.506C14.742 4.246 21.992 1 30 1h0z" transform="translate(-160 -3149) translate(160 3149.214)"/>
                      </g>
                      <g fill-rule="nonzero">
                          <path class="utils-fill" d="M36.64 48V21.04h-3.12c-.52 3.28-2.36 4.52-6.56 4.52v2.8H33V48h3.64z" transform="translate(-160 -3149) translate(160 3149.214) translate(8 7)"/>
                          <path fill="#3B012D" d="M34.64 46V19.04h-3.12c-.52 3.28-2.36 4.52-6.56 4.52v2.8H31V46h3.64z" transform="translate(-160 -3149) translate(160 3149.214) translate(8 7)"/>
                      </g>
                  </g>
              </g>
          </g>
         </svg>


        </div>
        <h3 class="AboutCard__heading">Du laver indhold</h3>
        <p class="AboutCard__subHeading">Du laver indhold, der engagerer og oplyser din målgruppe og skaffer nye navne i lead databasen.</p>
      </div>
      <div class="col-md-4">
      <div class="AboutCard__iconWrapper">
          
        <svg xmlns="http://www.w3.org/2000/svg" class="AboutCard__icon js-AboutCard__icon" viewBox="0 0 80 81">
          <g fill="none" fill-rule="evenodd">
              <g>
                  <g>
                      <g fill="#FBF9F0" stroke="#3B012D" stroke-opacity=".04" stroke-width="2">
                          <path d="M50 1c8.008 0 15.258 3.246 20.506 8.494C75.754 14.742 79 21.992 79 30h0v20c0 8.008-3.246 15.258-8.494 20.506C65.258 75.754 58.008 79 50 79h0-20c-8.008 0-15.258-3.246-20.506-8.494C4.246 65.258 1 58.008 1 50h0V30c0-8.008 3.246-15.258 8.494-20.506C14.742 4.246 21.992 1 30 1h0z" transform="translate(-544 -3149) translate(544 3149.214)"/>
                      </g>
                      <g fill-rule="nonzero">
                          <path class="utils-fill" d="M43.24 48v-3.16H28.68c.04-2.52 1.12-4.28 6.52-7.4 4.32-2.52 7.4-4.72 7.4-9.44 0-4.52-3.44-7.52-8.6-7.52-5.36 0-8.84 3.12-9.04 8.48h3.76c.2-3.32 1.8-5.28 5.24-5.28 2.96 0 4.8 1.8 4.8 4.4 0 3.32-2.12 4.8-6.2 7.2-6.68 3.88-7.96 6.8-7.96 11.92 0 .2 0 .52.04.8h18.6z" transform="translate(-544 -3149) translate(544 3149.214) translate(8 7)"/>
                          <path fill="#3B012D" d="M41.24 46v-3.16H26.68c.04-2.52 1.12-4.28 6.52-7.4 4.32-2.52 7.4-4.72 7.4-9.44 0-4.52-3.44-7.52-8.6-7.52-5.36 0-8.84 3.12-9.04 8.48h3.76c.2-3.32 1.8-5.28 5.24-5.28 2.96 0 4.8 1.8 4.8 4.4 0 3.32-2.12 4.8-6.2 7.2-6.68 3.88-7.96 6.8-7.96 11.92 0 .2 0 .52.04.8h18.6z" transform="translate(-544 -3149) translate(544 3149.214) translate(8 7)"/>
                      </g>
                  </g>
              </g>
          </g>
        </svg>

        </div>
        <h3 class="AboutCard__heading">Vi automatiserer kommunikationen</h3>
        <p class="AboutCard__subHeading">Vi sørger for at dine leads får det rigtige budskab på det rigtige tidspunkt. På den måde får du det meste ud af din kommunikation.</p>
      </div>
      <div class="col-md-4">
      <div class="AboutCard__iconWrapper">
          
        <svg xmlns="http://www.w3.org/2000/svg" class="AboutCard__icon js-AboutCard__icon" viewBox="0 0 80 81">
          <g fill="none" fill-rule="evenodd">
              <g>
                  <g>
                      <g fill="#FBF9F0" stroke="#3B012D" stroke-opacity=".04" stroke-width="2">
                          <path d="M50 1c8.008 0 15.258 3.246 20.506 8.494C75.754 14.742 79 21.992 79 30h0v20c0 8.008-3.246 15.258-8.494 20.506C65.258 75.754 58.008 79 50 79h0-20c-8.008 0-15.258-3.246-20.506-8.494C4.246 65.258 1 58.008 1 50h0V30c0-8.008 3.246-15.258 8.494-20.506C14.742 4.246 21.992 1 30 1h0z" transform="translate(-928 -3149) translate(928 3149.214)"/>
                      </g>
                      <g fill-rule="nonzero">
                          <path class="utils-fill" d="M33.88 48.56c5.48 0 9.24-3.08 9.24-7.64 0-3.48-1.64-5.56-5.12-6.72v-.08c3.16-1.16 4.68-3.08 4.68-6.28 0-4.44-3.4-7.36-8.84-7.36-5.56 0-9.04 3.16-9.04 8.52h3.72c0-3.6 1.88-5.36 5.16-5.36 3.2 0 5.28 1.8 5.28 4.52 0 2.84-2.28 4.68-6 4.68h-1.08v3.08h1.08c4.16 0 6.4 1.72 6.4 4.88 0 2.72-2.2 4.6-5.48 4.6-3.64 0-5.6-1.92-5.6-5.52h-3.72c0 5.44 3.36 8.68 9.32 8.68z" transform="translate(-928 -3149) translate(928 3149.214) translate(8 7)"/>
                          <path fill="#3B012D" d="M31.88 46.56c5.48 0 9.24-3.08 9.24-7.64 0-3.48-1.64-5.56-5.12-6.72v-.08c3.16-1.16 4.68-3.08 4.68-6.28 0-4.44-3.4-7.36-8.84-7.36-5.56 0-9.04 3.16-9.04 8.52h3.72c0-3.6 1.88-5.36 5.16-5.36 3.2 0 5.28 1.8 5.28 4.52 0 2.84-2.28 4.68-6 4.68h-1.08v3.08h1.08c4.16 0 6.4 1.72 6.4 4.88 0 2.72-2.2 4.6-5.48 4.6-3.64 0-5.6-1.92-5.6-5.52h-3.72c0 5.44 3.36 8.68 9.32 8.68z" transform="translate(-928 -3149) translate(928 3149.214) translate(8 7)"/>
                      </g>
                  </g>
              </g>
          </g>
        </svg>  

        </div>
        <h3 class="AboutCard__heading">Vi sender varme leads til salgsafdelingen</h3>
        <p class="AboutCard__subHeading">Fokuserer du nu bare på forretningen. Vi giver besked, når dine leads er varme og parate til at få kontakt med en sælger.</p>
      </div>
    </div>
  </div>
<!-- /About -->

<!-- Promo -->
  <?php 
    
    $args = array(
      'attachment_id' => 225,
      'preHeading' => 'Se vores priser',
      'heading' => 'Priser og pakker hvor alle kan være med',
      'subHeading' => 'Vi har sat Lead Automation på abonnement, så alle kan være med. Se vores priser og pakker og se hvilken løsning, der passer til dig og din virksomhed.',
      'buttonText' => 'Se priser og pakker',
      'pageTitleToLinkTo' => 'Priser',
    );

    get_template_part( 'includes/section', 'Promo', $args );
    
  ?>
<!-- /Promo -->

<?php get_footer(); ?>
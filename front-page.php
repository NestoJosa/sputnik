<?php get_header(); ?>

<!-- Hero -->
  <div class="Hero container-fluid p-0">
    <div class="container">
      <div class="row align-items-center">
        <div class="Hero__image col-md-6 order-md-2">
          <img src="<?php echo get_template_directory_uri();?>/dist/img/man-on-rocket--small.png" alt="Rocket Man">
        </div>
        <div class="col-md-6 order-md-1">
          <h1 class="Hero__heading">Marketing Automation forvandler data til bedre resultater</h1>
          <p class="Hero__subHeading">Vi hjælper virksomheder rigtigt i gang med Marketing Automation - eller med at få mere ud af den eksisterende løsning.</p>
          <button class="Hero__button ButtonSolid--large" type="button">Se vores løsninger</button>  
        </div>
      </div>
    </div>
  </div>
<!-- /Hero -->

<!-- ClientLogos -->
  <div class="ClientLogos container-fluid p-0">
    <div class="container">
      <div class="ClientLogos__outerRow row align-items-center">

        <div class="col-md-4">
          <div class="row">
            <div class="col">
              <img src="<?php echo get_template_directory_uri();?>/dist/img/logo-oticon@3x.png" alt="Oticon Logo">
            </div>
            <div class="col">
              <img src="<?php echo get_template_directory_uri();?>/dist/img/logo-gjensidige@3x.png" alt="Gjensidige Logo">
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="row">
            <div class="col">
              <img src="<?php echo get_template_directory_uri();?>/dist/img/logo-nordea@3x.png" alt="Nordea Logo">
            </div>
            <div class="col">
              <img src="<?php echo get_template_directory_uri();?>/dist/img/logo-3-shape@3x.png" alt="3Shape Logo">
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="row">
            <div class="col">
              <img src="<?php echo get_template_directory_uri();?>/dist/img/logo-express@3x.png" alt="Express Logo">
            </div>
            <div class="col">
              <img src="<?php echo get_template_directory_uri();?>/dist/img/logo-3-disc@3x.png" alt="3DISC Logo">
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
<!-- /ClientLogos -->

<!-- About -->
  <div class="About container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <h2 class="About__heading">Om Autobahn</h2>
        <p  class="About__subHeading">Free directories: directories are perfect for customers that are searching for a particular topic. What’s great about them is that you only have to post once and they are good for long periods of time. When you don’t have to resubmit your information every week or every month.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <!-- the animation is triggered when the icon is visible on the screen, via the js -hook -->
        <div class="AboutCard__iconWrapper">
          <svg class="AboutCard__icon js-AboutCard__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
            <g>
              <path class="utils-fill" d="M37.35,17.2a2.69,2.69,0,0,1-.51,1.47l-6.17,8.5a19.46,19.46,0,0,1,6.66,13.5h4a19.46,19.46,0,0,0-6.66-13.5l6.17-8.5a2.69,2.69,0,0,0,.51-1.47c.11-3.06.55-5.59-5.35-8.53C33.33,7.33,28,4.5,28,4.5V6.61c1.42.74,2.92,1.52,4,2.06C37.9,11.61,37.46,14.14,37.35,17.2Z"></path>
              <path class="utils-fill" d="M45,47.4l-1-5.07C43.64,41.25,42.48,41,41.33,41h-4c1.15,0,2.31.25,2.67,1.33l1,5.07A1.32,1.32,0,0,1,40,49a1.09,1.09,0,0,1-.26,0h4A1.09,1.09,0,0,0,44,49,1.32,1.32,0,0,0,45,47.4Z"></path>
              <path class="utils-stroke" d="M14,41H10.25a2.69,2.69,0,0,0-2.39,1.47L2.1,54H61.9L56.14,42.47A2.69,2.69,0,0,0,53.75,41H48"></path>
              <path class="utils-stroke" d="M1.33,53.67,2.16,57a2.67,2.67,0,0,0,2.59,2h54.5a2.67,2.67,0,0,0,2.59-2l.83-3.31"></path>
              <path class="utils-stroke" d="M22.67,40.67a23.65,23.65,0,0,1,4-14.67,45.76,45.76,0,0,1,4-4H20c-1.79,0-2.11-1-2.67-2.67a2.7,2.7,0,0,1,1.34-2.66L28,10V4.5s5.33,2.83,8,4.17c5.9,2.94,5.46,5.47,5.35,8.53a2.69,2.69,0,0,1-.51,1.47l-6.17,8.5a19.46,19.46,0,0,1,6.66,13.5"></path>
              <path class="utils-stroke" d="M45,47.4A1.32,1.32,0,0,1,44,49a1.09,1.09,0,0,1-.26,0H20.29A1.34,1.34,0,0,1,19,47.67a1.24,1.24,0,0,1,0-.27l1-5.07c.36-1.08,1.52-1.33,2.67-1.33H41.33c1.15,0,2.31.25,2.67,1.33Z"></path>
              <path class="utils-stroke" d="M52.67,46.08h0a.67.67,0,0,1,.66.67h0a.67.67,0,0,1-.66.67h0a.67.67,0,0,1-.67-.67h0a.67.67,0,0,1,.67-.67"></path>
            </g>
          </svg>
        </div>
        <h3 class="AboutCard__heading">Strategi & rådgivning</h3>
        <p class="AboutCard__subHeading">Har du brug for at få lagt den rigtige plan? Eller bare få ført den du har ud i livet? Vi kan hjælpe.</p>
      </div>
      <div class="col-md-4">
        <div class="AboutCard__iconWrapper">
          <svg class="AboutCard__icon  js-AboutCard__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
            <g>
              <path class="utils-fill" d="M57.73,5a1.07,1.07,0,0,0-.25,0l-1.68.36c-.72,3.38-2.14,8.94-4,10.78L22.65,45.31l.93.93,1.58,1.57L35.54,37.42,54.83,18.15c2-2,3.5-8.44,4.15-11.65A1.4,1.4,0,0,0,59,6a1.29,1.29,0,0,0-1.25-1"></path>
              <path class="utils-stroke" d="M16.21,38.87S44,11,45.84,9.16c2-2,8.43-3.51,11.64-4.15A1.25,1.25,0,0,1,59,6a1.06,1.06,0,0,1,0,.5c-.64,3.21-2.15,9.65-4.14,11.65L25.16,47.81Z"></path>
              <path class="utils-stroke" d="M19.79,35.24l9,9"></path>
              <path class="utils-stroke" d="M38.64,34.33A55.31,55.31,0,0,1,37.75,46a17.24,17.24,0,0,1-3.61,5.39l-6.4,6.39a1.27,1.27,0,0,1-2.16-1.05l1.24-10.61"></path>
              <path class="utils-stroke" d="M29.65,25.34a55.82,55.82,0,0,0-11.76.81,17.32,17.32,0,0,0-5.32,3.68L6.19,36.21a1.27,1.27,0,0,0,0,1.8,1.29,1.29,0,0,0,1,.36l10.68-1.31"></path>
              <path class="utils-stroke" d="M19.76,47.81c1.8,1.8,1,4.35-.89,6.3S10.13,58,6.59,59A1.28,1.28,0,0,1,5,58.07a1.38,1.38,0,0,1,0-.64c1-3.55,3-10.48,4.83-12.3,2-2,4.5-2.7,6.3-.9"></path>
            </g>
          </svg> 
        </div>
        <h3 class="AboutCard__heading">Design & brugeroplevelse</h3>
        <p class="AboutCard__subHeading">Vi designer den digitale kunderejse, der giver dig det rigtige aftryk i markedet og som kan mærkes på bundlinjen</p>
      </div>
      <div class="col-md-4">
        <div class="AboutCard__iconWrapper">
          <!-- the animation is triggered when the icon is visible on the screen, via the js-hook -->
          <svg class="AboutCard__icon  js-AboutCard__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
            <g>
              <path class="utils-fill" d="M52.79,16.2a9.77,9.77,0,0,1-2,6A7.74,7.74,0,0,1,55,23.86,9.73,9.73,0,0,0,49.26,8.77,9.69,9.69,0,0,1,52.79,16.2Z"></path>
              <path class="utils-fill" d="M54.74,39.77a7.79,7.79,0,0,0,.81-15.45,7.8,7.8,0,0,1-4.81,13.45A9.73,9.73,0,0,1,43,53.48l-.33,0-.52,0a5.21,5.21,0,0,1-3.62,6.36,4,4,0,0,1-.59.1A5.21,5.21,0,0,0,41.67,62a5.31,5.31,0,0,0,.87-.16,5.21,5.21,0,0,0,3.6-6.44c.29,0,.57.08.87.08h.15s0,0,0-.08c.18,0,.36,0,.54.06a9.73,9.73,0,0,0,7.06-15.69Z"></path>
              <path class="utils-stroke" d="M24.53,12.13a5.22,5.22,0,1,0-6.88-4.92,5.09,5.09,0,0,0,.21,1.39A8.27,8.27,0,0,0,17,8.51,9.74,9.74,0,0,0,9.26,24.23a7.79,7.79,0,0,0,0,15.54A9.73,9.73,0,0,0,17,55.48c.3,0,.58-.06.87-.08a5.22,5.22,0,1,0,6.67-3.53"></path>
              <path class="utils-stroke" d="M39.47,12.13a5.22,5.22,0,1,1,6.88-4.92,5.09,5.09,0,0,1-.21,1.39A8.27,8.27,0,0,1,47,8.51a9.74,9.74,0,0,1,7.73,15.72,7.79,7.79,0,0,1,0,15.54A9.73,9.73,0,0,1,47,55.48c-.3,0-.58-.06-.87-.08a5.22,5.22,0,1,1-6.67-3.53"></path>
              <path class="utils-stroke" d="M28.09,6.94a7.85,7.85,0,0,1,7.82,0"></path>
              <path class="utils-stroke" d="M35.91,57.05a7.81,7.81,0,0,1-7.82,0"></path>
              <path class="utils-stroke" d="M22,21H43V42H22Z"></path>
              <path class="utils-stroke" d="M27,16v5"></path>
              <path class="utils-stroke" d="M37,16v5"></path>
              <path class="utils-stroke" d="M16,37h5"></path>
              <path class="utils-stroke" d="M16,27h5"></path>
              <path class="utils-stroke" d="M37,48V43"></path>
              <path class="utils-stroke" d="M27,48V43"></path>
              <path class="utils-stroke" d="M48,27H43"></path>
              <path class="utils-stroke" d="M48,37H43"></path>
            </g>
          </svg>    
        </div>
        <h3 class="AboutCard__heading">Martech</h3>
        <p class="AboutCard__subHeading">Få en Martech løsning der sikrer at i får mest muligt ud af Jeres kundedata, og kan fungere som omdrejningspunkt for Jeres kommunikation</p>
      </div>
    </div>
  </div>
<!-- /About -->

<!-- SubPromo -->
  <div class="SubPromoWrapper container-fluid p-0">
    <div class="container">
      <div class="row justify-content-end">
        <div class="Dots Dots--right col-md-3"></div>
      </div>
      <div class="row justify-content-center no-gutters">
        
        <div class="SubPromo col-md-10">
          <div class="row">

            <div class="col-md-6">
              <img class="SubPromo__image" src="<?php echo get_template_directory_uri();?>/dist/img/man-with-computer--small.png" alt="Man using computer">
            </div>
            <div class="col-md-6">
              <p class="SubPromo__news">Nyhed</p>
              <h2 class="SubPromo__heading">Marketing Automation som abbonnementsløsning</h2>
              <p class="SubPromo__subHeading">Find ud af hvilke muligheder Marketing Automation kan give din virksomhed, ud af hvilke muligheder Marketing Automation kan give din virksomhed</p>
              <button class="ButtonSolid--large" type="button">Se vores abonnementer</button>  
            </div>

          </div>
        </div>
      </div>
      <div class="row justify-content-start">
        <div class="Dots Dots--left col-md-3"></div>
      </div>
    </div><!-- /container -->
  </div><!-- /SubPromoWrapper container-fluid p-0 -->
<!-- /SubPromo -->

<!-- Quote -->
<div class="Quote container-fluid p-0">
  <div class="container">
    <div class="row justify-content-between align-items-center">

      <div class="col-md-6 order-md-2">
        <div class="Quote__icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="52" height="48" viewBox="0 0 52 48">
            <g fill="none" fill-rule="evenodd">
              <g fill="#FF571E" fill-rule="nonzero">
                <g>
                  <g>
                    <path d="M21.507 48V24.333h-7.223L22 0H10.343L0 24.333V48h21.507zm30 0V24.333h-7.223L52 0H40.343L30 24.333V48h21.507z" transform="translate(-736 -2259) translate(0 1911) translate(736 348)"/>
                  </g>
                </g>
              </g>
            </g>
          </svg>
        </div>
        <div class="Quote__text">
          Hos mange blev vi mødt af store indledende omkostninger og lange processer, inden vi kunne se de første resultater. Autobahn tilbød os en løsning, hvor vi inden for de første to måneder havde en business case på plads og kunne gå live med de første aktiviteter.
        </div>
        <div class="Quote__imageAndTextWrapper">
          <img src="<?php echo get_template_directory_uri();?>/dist/img/Silva-Lill.jpg" alt="Portrait of Silva Lill" class="Quote__image">
          <p class="Quote__nameAndTitle">
            <span class="Quote__name">Silva Lill</span><br>Marketing Manager, PLM Group</p>
        </div>
      </div>

      <div class="col-md-5 order-md-1">
        <div class="Quote__stats">
          <div class="Quote__statsText">We helped PLM Group achieve</div>
          <div class="Quote__statsNumber">219%</div>
          <div class="Quote__statsText">højere konverteringsrate</div>
        </div>
      </div>

    </div>
  </div>
</div>
<!-- /Quote -->

<?php get_footer(); ?>
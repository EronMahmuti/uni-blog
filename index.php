
<?php

    get_header();
    ?>
    
    <div class="page-banner">
      <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/flamurii.jpg') ?>)"></div>
      <div class="page-banner__content container t-center c-white">
        <h1 class="headline headline--large">Mirësevini</h1>
        <h2 class="headline headline--medium">  LOBI EURO-ATLANTIK SHQIPTAR </h2>
        <h3 class="headline headline--small"> Atë që dëshironi ta bëni të vetëm, ejani ju lutëm që ta bëjmë sëbashku  </h3>
        <a href="<?php echo site_url('/kryesia') ?>" class="btn btn--large btn--blue">LEASH</a>
      </div>
    </div>

    <div class="full-width-split group">
      <div class="full-width-split__one">
        <div class="full-width-split__inner">
          <h2 class="headline headline--small-plus t-center">Takimet e ardhshme</h2>

          <div class="event-summary">
            <a class="event-summary__date t-center" href="#">
              <span class="event-summary__month">Mar</span>
              <span class="event-summary__day">25</span>
            </a>
            <div class="event-summary__content">
              <h5 class="event-summary__title headline headline--tiny">Takim ne Gjermani</h5>
            </div>
          </div>
          <div class="event-summary">
            <a class="event-summary__date t-center" href="#">
              <span class="event-summary__month">Apr</span>
              <span class="event-summary__day">02</span>
            </a>
            <div class="event-summary__content">
              <h5 class="event-summary__title headline headline--tiny">Takim ne Zvicer</h5>
            </div>
          </div>

        </div>
      </div>
      <div class="full-width-split__two">
        <div class="full-width-split__inner">
          <h2 class="headline headline--small-plus t-center">Takimet e fundit</h2>
          <div class="event-summary">
            <a class="event-summary__date event-summary__date--beige t-center" href="#">
              <span class="event-summary__month">Jan</span>
              <span class="event-summary__day">20</span>
            </a>
            <div class="event-summary__content">
              <h5 class="event-summary__title headline headline--tiny">Takimet me zyrtare te larte</h5>
            </div>
          </div>
          <div class="event-summary">
            <a class="event-summary__date event-summary__date--beige t-center" href="#">
              <span class="event-summary__month">Feb</span>
              <span class="event-summary__day">04</span>
            </a>
            <div class="event-summary__content">
              <h5 class="event-summary__title headline headline--tiny">Takimet me perfaqsues te miqesis Shqiptaro-Gjermane</h5>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="hero-slider">
      <div data-glide-el="track" class="glide__track">
        <div class="glide__slides">
          <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/saranda.png') ?>)">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">Reth Lobit</h2>
                <p class="t-center">Platformë mbarë kombëtare për një Mërgatë Shqiptare të fuqishme e të bashkuar.</p>
                <p class="t-center no-margin"><a href="<?php echo site_url('/rreth-nesh') ?>" class="btn btn--blue">Lexo më shumë</a></p>
              </div>
            </div>
          </div>
          <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/kquezi.jpg') ?>)">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">Kryesia e Lobit</h2>
                <p class="t-center">Lobi Shqiptar ka kryetaret e saj ne çdo Shtet.</p>
                <p class="t-center no-margin"><a href=" <?php echo site_url('/kryesia') ?> " class="btn btn--blue">Lexo më shumë</a></p>
              </div>
            </div>
          </div>
          <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/lobb.jpg') ?>)">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">Qellimet e Lobit</h2>
                <p class="t-center">Lobi ka per qellim ndihmen dhe afrimin e gjithe Shqiptareve anembane.</p>
                <p class="t-center no-margin"><a href="<?php echo site_url('/takimet') ?>" class="btn btn--blue">Lexo më shumë</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="slider__bullets glide__bullets" data-glide-el="controls[nav]"></div>
      </div>
    </div>
    <div class="under-slider">
            <h5> në fokus </h5>
            <div class="containeri">
            <?php 
                  if(have_posts()){
                    $x = 1;
                      while(have_posts() && $x <= 6){
                        get_template_part('/content','article');
                        $x++;
                      }
                  }
                ?>

            </div>
    </div>
<?php

get_footer();

?>



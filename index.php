
<?php

    get_header();
    ?>
    
    <div class="page-banner">
      <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/flamurii.jpg') ?>)"></div>
      <div class="page-banner__content container t-center c-white">
        <h1 class="headline headline--large">Miresevini!</h1>
        <h2 class="headline headline--medium">Vendtakimi i Shqiptareve</h2>
        <h3 class="headline headline--small">Atë që dëshironi ta bëni të vetëm, ejani ju lutëm që ta bëjmë sëbashku</h3>
        <a href="#" class="btn btn--large btn--blue">Shiko Takimet</a>
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
              <h5 class="event-summary__title headline headline--tiny"><a href="#">Takim ne Gjermani</a></h5>
              <p>Bring poems you&rsquo;ve wrote to the 100 building this Tuesday for an open mic and snacks. </p>
            </div>
          </div>
          <div class="event-summary">
            <a class="event-summary__date t-center" href="#">
              <span class="event-summary__month">Apr</span>
              <span class="event-summary__day">02</span>
            </a>
            <div class="event-summary__content">
              <h5 class="event-summary__title headline headline--tiny"><a href="#">Takim ne Zvicer</a></h5>
              <p>Live music, a taco truck and more can found in our third annual quad picnic day. </p>
            </div>
          </div>

        </div>
      </div>
      <div class="full-width-split__two">
        <div class="full-width-split__inner">
          <h2 class="headline headline--small-plus t-center">Postimet e fundit</h2>

          <div class="event-summary">
            <a class="event-summary__date event-summary__date--beige t-center" href="#">
              <span class="event-summary__month">Jan</span>
              <span class="event-summary__day">20</span>
            </a>
            <div class="event-summary__content">
              <h5 class="event-summary__title headline headline--tiny"><a href="#">We Were Voted Best School</a></h5>
              <p>For the 100th year in a row we are voted #1. <a href="#" class="nu gray">Read more</a></p>
            </div>
          </div>
          <div class="event-summary">
            <a class="event-summary__date event-summary__date--beige t-center" href="#">
              <span class="event-summary__month">Feb</span>
              <span class="event-summary__day">04</span>
            </a>
            <div class="event-summary__content">
              <h5 class="event-summary__title headline headline--tiny"><a href="#">Professors in the National Spotlight</a></h5>
              <p>Two of our professors have been in national news lately. <a href="#" class="nu gray">Read more</a></p>
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
                <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
              </div>
            </div>
          </div>
          <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/kquezi.jpg') ?>)">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">Kryesia e Lobit</h2>
                <p class="t-center">Lobi Shqiptar ka kryetaret e saj ne çdo Shtet.</p>
                <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
              </div>
            </div>
          </div>
          <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/lobb.jpg') ?>)">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">Qellimet e Lobit</h2>
                <p class="t-center">Lobi ka per qellim ndihmen dhe afrimin e gjithe Shqiptareve anembane.</p>
                <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="slider__bullets glide__bullets" data-glide-el="controls[nav]"></div>
      </div>
    </div>

    <?php

    get_footer();

?>

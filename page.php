

<?php
    get_header();

    
    while(have_posts()){
        the_post(); ?>

<div class="page-banner">
      <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/albo.jpg'); ?>)"></div>
      <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title"> <?php the_title(); ?> </h1>
        <div class="page-banner__intro">
        </div>
      </div>
    </div>

    <div class="container container--narrow page-section">
      <div class="metabox metabox--position-up metabox--with-home-link">
        <p>
          <a class="metabox__blog-home-link" href="/"><i class="fa fa-home" aria-hidden="true"></i> Kthehu te Ballina</a> <span class="metabox__main">
            <?php the_title(); ?>
          </span>
        </p>
      </div>

      <div class="under-slider">
            <h5> në fokus </h5>
            <div class="containeri">
            <?php 
                  if(have_posts()){
                      while(have_posts()){
                        get_template_part( '/content');
                      }
                  }
                ?>

            </div>
    </div>

      <!-- <div class="page-links">
        <h2 class="page-links__title"><a href="#">About Us</a></h2>
        <ul class="min-list">
          <li class="current_page_item"><a href="#">Our History</a></li>
          <li><a href="#">Our Goals</a></li>
        </ul>
      </div> -->

      <div class="generic-content">
          <?php  the_content(); ?>
      </div>
    </div>

    
        <?php }

get_footer();
?>
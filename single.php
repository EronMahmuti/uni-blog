

<?php

get_header();

    while(have_posts()){
        the_post(); ?>
        <div class="page-banner">
          <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg'); ?>)"></div>
            <div class="page-banner__content container container--narrow">
              <h1 class="page-banner__title"> Lobi  </h1>
            <div class="page-banner__intro">
            <p> <?php the_title(); ?> </p>
          </div>
        </div>
    </div>

    <div class="post-content">
    <h2> <?php the_title(); ?> </h2>
        <hr>
       <?php the_content(); ?> 
    </div>
    
    
        
        <?php 
      
        //post page
}
get_footer();
?>
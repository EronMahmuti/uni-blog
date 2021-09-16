

<?php

get_header();

    while(have_posts()){
        the_post(); ?>
        <div class="page-banner">
          <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/albo.jpg'); ?>)"></div>
            <div class="page-banner__content container container--narrow">
              <h1 class="page-banner__title"> Lobi Euro-Atlantik  </h1>
            <div class="page-banner__intro">
            <p> <?php the_title(); ?> </p>
          </div>
        </div>
    </div>

    <div class="post-content">
      <h2 class="post-h2"> <?php the_title(); ?> </h2>
      <div class="post-items">
        <h6 class="post-para">  <?php echo get_the_content(); ?> </h6>
        <img class="post-image" src="<?php  the_post_thumbnail_url('thumbnail');?>" alt="image-post" >
      </div>
    </div>
    <div class="under-slider">
            <h5> në fokus </h5>
    <div class="containeri">
    <?php
    $recent_posts = wp_get_recent_posts(array(
        'numberposts' => 4, // Number of recent posts thumbnails to display
        'post_status' => 'publish' // Show only the published posts
    ));
    foreach( $recent_posts as $post_item ) : ?>
        <div class="grid-main">
            <a href="<?php echo get_permalink($post_item['ID']) ?>">
                <div class="grid-sec">
                    <?php echo get_the_post_thumbnail($post_item['ID'], 'full'); ?>
                </div> 
              </a>
              <a href="<?php echo get_permalink($post_item['ID']) ?>"> <h6 class="postTitle" ><?php echo $post_item['post_title'] ?></h6></a>
          </div>
    <?php endforeach; ?>
    </div>
    </div>
    
        
        <?php 
      

      
        //post page
}
get_footer();
?>
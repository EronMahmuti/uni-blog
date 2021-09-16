

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

      

     

      <!-- <div class="page-links">
        <h2 class="page-links__title"><a href="#">About Us</a></h2>
        <ul class="min-list">
          <li class="current_page_item"><a href="#">Our History</a></li>
          <li><a href="#">Our Goals</a></li>
        </ul>
      </div> -->

      <div class="generic-content">
          <?php  the_content(); 
            
          ?>
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
    
        <?php }

get_footer();
?>
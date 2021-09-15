

<div class="grid-main"  style="" >

    <img class="" src="<?php  the_post_thumbnail_url('thumbnail');  ?>" alt="image" >
    <div class="grid-sec" >
        <h6 class="postTitle" >
            <a href=" <?php the_permalink(); ?>" > 
        <?php  
            the_post();
            the_title();
        ?>      
            </a>
        </h5>
        <p> <?php echo get_the_date(); ?></p>
    </div>
</div>



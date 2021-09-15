

<div class="grid-main"  style="" >

        <?php  
            the_post();
        ?> 

<a href=" <?php the_permalink(); ?>" >  <img class="" src="<?php  the_post_thumbnail_url('thumbnail');  ?>" alt="image" > </a>
    <div class="grid-sec">
        <h6 class="postTitle" >
            <a href=" <?php the_permalink(); ?>" > 
        <?php  
            the_title();
        ?>      
            </a>
        </h5>
        <p> <?php echo get_the_date(); ?></p>
    </div>
</div>



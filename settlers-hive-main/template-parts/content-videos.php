<div class="video-card" data-video="<?php the_field('video_id');?>">
    <div class="image-container"
        style="background-image:url(https://i.ytimg.com/vi/<?php the_field('video_id')?>/default.jpg)">
        <!-- <img src="<?php the_post_thumbnail_url(); ?>" alt=""> -->
        <h5><?php the_title();?></h5>
    </div>
</div>
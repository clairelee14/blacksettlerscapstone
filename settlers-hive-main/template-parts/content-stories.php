<!-- Stories -->
<div class="gather-around-wrapper">
    <div class="gather-around-image">
        <!-- TODO: Add image -->
        <img src="<?php the_field('story_image'); ?>" alt="">
    </div>
    <div class="gather-around-text-wrapper">
        
        <h5><?php the_field('story_title'); ?></h5>
        <div class="gather-around-text">
            <?php the_excerpt(); ?>
        </div>
        <a href="<?php echo get_site_url() . '/' . urlencode(get_post_field('post_name', get_post())); ?>"
            class="button-home gather-btn">Read more stories</a>

    </div>
</div>
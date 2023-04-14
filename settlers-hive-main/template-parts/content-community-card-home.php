

    <!-- Community cards -->
    <div class="community-card">
        <div class="community-card-img">
            <!-- TODO: Add image -->
            <img src="<?php the_field('community_banner_image'); ?>" alt="">
        </div>
        <div class="community-card-text">
            <h4 class="community-card-h4">
                <?php the_field('community_name'); ?>
            </h4>
            <p class="community-card-p">
                <?php the_excerpt(); ?>
            </p>
            <a class="button-home button-community" href="<?php echo get_site_url() . '/' .  urlencode( 'communities' ); ?>">More on <?php the_title(); ?></a>
        </div>
        
    </div> 



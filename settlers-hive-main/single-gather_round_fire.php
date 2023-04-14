<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package blacksettlers
 */

get_header();
?>

    <article <?php post_class();?> id="post-<?php the_ID();?>" >
        <!-- Poem -->
        <div class="gather-around-wrapper">
            <div class="gather-around-image">
                <!-- TODO: Add image -->
                <img src="<?php the_field('around-fire-image'); ?>" alt="">
                

            </div>
            <div class="gather-around-text-wrapper">
                <h3 class="gather-around-heading"></h3>
                    <?php the_field('gather-around-title'); ?>
                </h3>
                <p class="gather-around-text">
                    <?php the_field('gather-around-description'); ?>
                </p>      
                
            </div>    
        </div>

    </article>

<?php
get_footer();
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
    <h1>This is a single community</h1>
     <!-- Community cards -->
     <div class="community-card">
        <?php
            while ( have_posts() ) :
                the_post();

                get_template_part( 'template-parts/content', get_post_type() );

                the_post_navigation(
                    array(
                        'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'blacksettlers' ) . '</span> <span class="nav-title">%title</span>',
                        'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'blacksettlers' ) . '</span> <span class="nav-title">%title</span>',
                    )
                );


            endwhile; // End of the loop.
        ?>
        <div class="community-card-img">
            <!-- TODO: Add image -->
            <img src="<?php the_field('community-img'); ?>" alt="">
            

        </div>
        <div class="community-card-text">
            <h5 class="community-card-h5">
                <?php the_field('title'); ?>
                
            </h5>
            <p class="community-card-p">
                <?php the_field('description'); ?>
            </p>
        </div>
    </div> <!-- community-card end -->

</article>

<?php
get_footer();

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
    <h1>our-first-single</h1>
     <!-- our first -->
     <div class="our-first">
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
        
                
        <!-- First -->
        <div class="our-first">
                <div class="first-image">
                    <!-- TODO: Add image -->
                    <img src="<?php the_field('first-image'); ?>" alt="">
                    

                </div>
                <div class="first-text-wrapper">
                    <h3 class="first-heading">
                        <?php the_field('first-title'); ?>

                    </h3>
                    <p class="poem-author">
                        <?php the_field('first-description'); ?>
                    </p>
                </div>
                    
            </div>

</article>

<?php
get_footer();

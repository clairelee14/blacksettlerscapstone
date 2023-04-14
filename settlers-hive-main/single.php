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


<main id="primary" class="site-main">
    <h1>
        This is a single.php
    </h1>
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

</main><!-- #main -->

<?php
get_footer();
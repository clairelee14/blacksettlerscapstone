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
<h1>Peom single</h1>
     <!-- Community cards -->
     <div class="community-card">
        <!-- Poem -->
        <?php
            $args = array(
                'post_type' => 'poem'
            );
            $loop = new WP_Query($args);


            while ( $loop->have_posts() ) {

                $loop->the_post();

                get_template_part( 'template-parts/content', 'poem' );


            }

		?>

</article>

<?php
get_footer();

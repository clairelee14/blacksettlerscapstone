<?php
/**
 * The template for displaying all "all things breton" single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package blacksettlers
 */

get_header();
?>
<main class="all-things-single-page">
    <div class="container">
        <a href="<?php echo get_permalink(get_page_by_title('Breton')) ?>" class="back-arrow">Back To Breton</a>
    </div>
    <div class="container">
        <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
            <div class="all-things-grid-container">
                <div class="content-container">
                    <h2>
                        <?php the_field('all_things_title_breton'); ?>
                    </h2>
                    <div class="all-things-image-container mobile">
                        <div
                            style="background-image:url(<?php echo get_template_directory_uri() ?>/assets/images/texture-light.png)">
                            <img src="<?php the_field('all_things_image_breton'); ?>">

                        </div>
                    </div>
                    <div class="copy-background">
                        <p>
                            <?php the_field('all_things_content_breton'); ?>
                        </p>
                    </div>
                </div>
                <div class="all-things-image-container desktop">
                    <div
                        style="background-image:url(<?php echo get_template_directory_uri() ?>/assets/images/texture-light.png)">
                        <img src="<?php the_field('all_things_image_breton'); ?>">
                    </div>
                </div>
            </div>
        </article>
    </div>
    <div class=" footer-home">
        <?php get_footer(); ?>
    </div>
</main>
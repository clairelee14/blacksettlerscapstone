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
<main class="the-latest-single-page">
    <div class="container">
        <a href="<?php echo get_permalink(get_page_by_title('The Latest')) ?>" class="back-arrow">Back To The
            Latest</a>
    </div>
    <div class="container grid-container">
        <div class="content-container">
            <h2>
                <?php the_title(); ?>
            </h2>
            <div class="image-container mobile">
                <div
                    style="background-image:url(<?php echo get_template_directory_uri() ?>/assets/images/texture-light.png)">
                    <img src="<?php the_field('blog_post_image'); ?>">
                </div>
            </div>
            <div class="copy-background">
                <p>
                    <?php the_field("blog_content") ?>
                </p>
            </div>
        </div>
        <div class="image-container desktop">
            <div
                style="background-image:url(<?php echo get_template_directory_uri() ?>/assets/images/texture-light.png)">
                <img src="<?php the_field('blog_post_image'); ?>">
            </div>
        </div>
    </div>
    <div class="footer-home">
        <?php get_footer(); ?>
    </div>
</main>
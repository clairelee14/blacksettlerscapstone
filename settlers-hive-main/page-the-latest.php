<?php
/**
 * Template Name: The Latest
 *
 * @link 
 *
 * @package blacksettlers
 */
?>

<?php get_header(); ?>


<main class="the-latest-page">
    <div class="container">
        <h2>The Latest</h2>

        <h4>Most Recent Posts</h4>

        <div class="latest-grid-container">
            <?php
            $args = array(
                'post_type' => 'the_latest',
                'posts_per_page' => 6
            );
            $loop = new WP_Query($args);
            while ($loop->have_posts()) {
                $loop->the_post();
                ?>
                <div class="the-latest-card">
                    <img src="<?php the_field('blog_post_image'); ?>">
                    <div class="copy-container"
                        style="background-image:url(<?php echo get_template_directory_uri() ?>/assets/images/texture.png)">
                        <div class="coral-container">
                            <h3>
                                <?php the_title(); ?>
                            </h3>
                            <?php the_excerpt(); ?>
                            <div class="button-container">
                                <a class="button-home" href="<?php the_permalink(); ?>">Read More</a>
                            </div>

                        </div>
                    </div>
                </div>

                <?php
            }
            ?>
        </div>
    </div>
    <div class="footer-home">
        <?php get_footer(); ?>
    </div>
</main>
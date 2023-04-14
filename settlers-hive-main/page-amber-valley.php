<?php
/** Amber Valley page
 *
 * @link 
 *
 * @package blacksettlers
 */
?>
<?php get_header(); ?>

<main class="indi-comm-main">
    <div class="container">
        <h2>Amber Valley</h2>
        <?php
        $post_id = 254;
        $image = get_field('community_banner_image', $post_id);
        $origins = get_field('origins', $post_id);
        ?>

        <img src="<?php echo $image; ?>">
        <section class="origins">
            <div class="background-timeline-container"
                style="background-image:url(<?php echo get_template_directory_uri() ?>/assets/images/texture.png)">
                <h3>Origins</h3>
                <div class="origins-blurb">
                    <?php echo $origins; ?>
                </div>
            </div>
        </section>
        <section class="photo-albums-section">
            <h3>Settler & Family Names</h3>
            <div class="photo-card-group photo-grid-container">
                <?php
                $args = array(
                    'post_type' => 'photo_album_amber',
                    'post_status' => 'publish',
                    'posts_per_page' => 10,
                );
                $loop = new WP_Query($args);
                while ($loop->have_posts()):
                    // copy start
                    $loop->the_post();
                    ?>
                    <div class="photo-card">
                        <a href="#" class="modal-link" data-photo="<?php the_field('photo') ?>"
                            data-title="<?php the_field('photo_title') ?>"
                            data-description="<?php the_field('photo_description') ?>">
                            <img src="<?php the_field('photo') ?>" />
                        </a>
                        <p>
                            <?php the_field('photo_title') ?>
                        </p>
                    </div>
                    <?php
                endwhile;
                ?>
            </div>

            <!-- The Modal -->
            <div id="myModal" class="modal">
                <span class="close">&times;</span>
                <div class="modal-content">
                    <div>
                        <img id="img01">
                        <div>
                            <h3 id="title"></h3>
                            <div id="caption"></div>
                        </div>
                    </div>
                </div>

                <a class="prev" id="prev">&#10094;</a>
                <a class="next" id="next">&#10095;</a>
            </div>


            <!-- copy end -->
        </section>
        <section class="all-things-section">
            <h3>All Things Amber Valley</h3>
            <div class="all-things-card-group">
                <?php
                $args2 = array(
                    'post_type' => 'all_things_amber_val',
                    'post_status' => 'publish',
                    'posts_per_page' => 9,
                );
                $loop2 = new WP_Query($args2);
                while ($loop2->have_posts()):
                    $loop2->the_post();
                    ?>
                    <div class="all-things-card">
                        <div>
                            <img src="<?php the_field('all_things_image_amber_valley') ?>" />
                        </div>
                        <div class="all-things-card-content">
                            <a href="<?php the_permalink(); ?>">
                                <h5>
                                    <?php the_field('all_things_title_amber_valley') ?>
                                </h5>
                            </a>
                            <div class="all-things-excerpt">
                                <?php the_excerpt(); ?>
                            </div>
                        </div>
                    </div>
                    <?php
                endwhile;
                ?>
            </div>
        </section>
    </div>
    <!-- copy this -->
    <script src="<?php echo get_template_directory_uri() ?>/js/image-gallery"></script>
    <div class="footer-home">
        <?php get_footer(); ?>
    </div>
</main>
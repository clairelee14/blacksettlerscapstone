<?php
/**
 * The template for displaying all "photo album amber valley" single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package blacksettlers
 */

get_header();
?>
<main class="site-main">
    <div class="arrow"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"><path d="m16.67 0 2.83 2.829-9.339 9.175 9.339 9.167L16.67 24 4.5 12.004z"/></svg></div><a href="http://blacksettlersa.web.dmitcapstone.ca/amber-valley/">back to Amber Valley</a>
    <article <?php post_class();?> id="post-<?php the_ID();?>" >
        <div>
            <div class="arrow"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"><path d="m16.67 0 2.83 2.829-9.339 9.175 9.339 9.167L16.67 24 4.5 12.004z"/></svg></div>
            <div class="single-photo-album-container">
                <div class="single-photo-album-image">
                    <img src="<?php the_field('photo'); ?>" alt="">
                </div>
                <div class="single-all-things-content">
                    <h3 class="single-photo-title">
                        <?php the_field('photo_title'); ?>
                    </h3>
                    <p class="single-photo-album-description">
                        <?php the_field('photo_description'); ?>
                    </p>
                </div>
            </div>
            <div class="arrow"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"><path d="M7.33 24 4.5 21.171l9.339-9.175L4.5 2.829 7.33 0 19.5 11.996z"/></svg></div>
        </div>

    </article>

</main>

<?php
get_footer();
?>
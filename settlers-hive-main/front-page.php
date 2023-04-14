<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package blacksettlers
 */

get_header();
?>

	<main id="primary" class="site-main home-page-site-main">
		<div class="main-section site-main-home">
            <section class="banner-video">
                <div class="entro-video section-snap">
                    <div class="down-arrow">
                        <a href="#section-about-us" class="section-link">
                            <svg fill="#000000" height="800px" width="800px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                                viewBox="0 0 330 330" xml:space="preserve">
                            <g id="XMLID_169_">
                                <path id="XMLID_197_" d="M304.394,139.394l-139.39,139.393L25.607,139.393c-5.857-5.857-15.355-5.858-21.213,0.001
                                    c-5.858,5.858-5.858,15.355,0,21.213l150.004,150c2.813,2.813,6.628,4.393,10.606,4.393s7.794-1.581,10.606-4.394l149.996-150
                                    c5.858-5.858,5.858-15.355,0-21.213C319.749,133.536,310.251,133.535,304.394,139.394z"/>
                                <path id="XMLID_221_" d="M154.398,190.607c2.813,2.813,6.628,4.393,10.606,4.393s7.794-1.581,10.606-4.394l149.996-150
                                    c5.858-5.858,5.858-15.355,0-21.213c-5.857-5.858-15.355-5.858-21.213,0l-139.39,139.393L25.607,19.393
                                    c-5.857-5.858-15.355-5.858-21.213,0c-5.858,5.858-5.858,15.355,0,21.213L154.398,190.607z"/>
                            </g>
                            </svg>
                        </a>
                    </div>
    
                    <video width="100%" height="100%" autoplay loop muted>
                        <source src="<?php echo esc_url( get_template_directory_uri() . '/assets/videos/video-page-banner.mp4' ); ?>" type="video/mp4">
                    </video>
                </div> 
            </section><!-- Banner-video ends -->

            <!-- About us section  -->
            <section class="about-us section-snap scroll-section" id="section-about-us">
                <div class="about-us-content-wrapper">
                    <h2 class="about-us-h2">About Us</h2>
                    <div class="about-us-content">
                        <div class="about-us-img">
                            <!-- TODO: ADD IMAGE -->
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/about-us-img.png' ); ?>"
                                alt="nice lady sitting outside">
                        </div>
                        <div class="about-us-text">
                            <p class="about-us-p1">
                                The Black Settlers of Alberta and Saskatchewan Historical Society or (BSAS) research,
                                compile, coordinate and centralize the history of Black Settlers in Alberta and Saskatchewan
                                over the last century....
                            </p>

                        </div>
                        <a href="<?php echo get_site_url() . '/' .  'about-us'; ?>" class="button-home">Learn More About
                            Us</a>
                    </div>
                </div>
            </section> <!-- about-us end -->
            <!-- Poem section -->
            <section class="poem-home section-snap">
                <!-- TODO: add poem -->
                <?php
                        $args = array(
                            'post_type' => 'poem',
                            'orderby'   => 'rand',
                            'posts_per_page' => 1,
                        );
                        $loop = new WP_Query($args);


                        while ( $loop->have_posts() ) {

                            $loop->the_post();

                            get_template_part( 'template-parts/content', 'poem' );

                        }

                    ?>
            </section> <!-- poem-home end -->

            <!--Communities section  -->
            <section class="communities-home section-snap">
                <div class="communities-intro">
                    <h2 class="communities-h2">Communities</h2>
                    <p class="communities-intro-p">
                        Across the prairies from Amber Valley, Breton, Calgary, Campsie, Edmonton, Maidstone and Wildwood.
                        These are the original settled areas, so come explore them here
                    </p>
                </div> <!-- community-intro end -->
                <div class="community-wrapper">

                    <?php
                            $args = array(
                                'post_type'      => 'community',
                                'post_status'    => 'publish',
                                'posts_per_page' => 7,
                            );
                            $loop = new WP_Query($args);

                            while ( $loop->have_posts() ) :

                                $loop->the_post();
                                
                                get_template_part( 'template-parts/content', 'community-card-home' );
                            endwhile;

                        ?>

                </div> <!-- community-wrapper end -->
            </section> <!-- Communities-home end -->
            <section class="paved-ways section-snap">
                <div class="paved-ways-wrapper">
                    <div class="paved-ways-intro">
                        <h2 class="paved-ways-intro-h2">Paved ways & praries -- Our featured first</h2>
                        <p class="paved-ways-intro-p">
                            The ones that walked so we cou ld run... or whichever way works. Here are the firsts that paved
                            the way for future generations to succeed in the things that they pursue
                        </p>
                    </div> <!-- paved-ways-intro end -->
                    <div class="paved-ways-content">
                        <div class="paved-ways-description">
                            <?php
                                    $args = array(
                                        'post_type' => 'paved_ways',
                                        'orderby'   => 'rand',
                                        'posts_per_page' => 1,
                                    );
                                    $loop = new WP_Query($args);

                                    while ( $loop->have_posts() ) {

                                        $loop->the_post();

                                        get_template_part( 'template-parts/content', 'first' );

                                    }

                                    ?>
                        </div>
                        <div class="button-home-first">
                            <a href="http://blacksettlers.local/all-first/" class="button-home">See all our First</a>
                        </div>
                    </div>
                </div>
            </section> <!-- paved-ways section end -->

            <!-- Poem section -->
            <section class="poem-home section-snap">
                <!-- TODO: add poem -->
                <?php
                        $args = array(
                            'post_type' => 'poem',
                            'orderby'   => 'rand',
                            'posts_per_page' => 1,
                        );
                        $loop = new WP_Query($args);


                        while ( $loop->have_posts() ) {

                            $loop->the_post();

                            get_template_part( 'template-parts/content', 'poem' );

                        }
                    ?>
            </section> <!-- poem-home end -->
            <!-- Gather around fire section -->
            <section class="gather-around-fire section-snap">
                <div class="gather-around-fire-section">
                    <div class="gather-around-fire-intro">
                        <h2 class="gather-around-fire-h2">Gather around the fire</h2>
                        <p class="gather-around-fire-intro-p">
                            Come cozy up for some emotional, elating, and educational stories and poems from Black Settlers
                            & their descendants
                        </p>
                    </div>
                    <div class="gather-around-fire-content">
                        <?php
                                $args = array(
                                    'post_type' => 'gather_round_fire',
                                    'orderby'   => 'rand',
                                    'posts_per_page' => 1,
                                );
                                $loop = new WP_Query($args);


                                while ( $loop->have_posts() ) {

                                    $loop->the_post();

                                    get_template_part( 'template-parts/content', 'stories' );

                                }

                            ?>
                    </div><!--gather-around-fire-content end -->
                </div><!--gather-around-fire-section ends -->
            </section> <!--gather-around-fire ends -->
        </div> <!-- Main section end -->
    </main><!-- #main -->
    <div class="footer-home">
        <?php get_footer(); ?>
    </div>
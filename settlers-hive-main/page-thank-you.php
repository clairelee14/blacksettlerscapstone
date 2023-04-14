<?php
/**
 * Template Name: Contact Confirmation
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
<main class="site-main thank-you-page">
    <div class="container">
        <div class="content-container">
            <div class="check-icon">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="80" height="80" viewBox="0,0,256,256"
                    style="fill:#000000;">
                    <g fill="#333335" fill-rule="nonzero" stroke-width="2" stroke-linecap="butt" stroke-linejoin="round"
                        stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none"
                        font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                        <path transform="scale(4,4)"
                            d="M58,32c0,14.359 -11.641,26 -26,26c-14.359,0 -26,-11.641 -26,-26c0,-14.359 11.641,-26 26,-26c14.359,0 26,11.641 26,26z"
                            id="strokeMainSVG"></path>
                    </g>
                    <g fill="#b7aaa9" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                        stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                        font-family="none" font-weight="none" font-size="none" text-anchor="none"
                        style="mix-blend-mode: normal">
                        <g transform="scale(4,4)">
                            <path
                                d="M32,6c-14.359,0 -26,11.641 -26,26c0,14.359 11.641,26 26,26c14.359,0 26,-11.641 26,-26c0,-14.359 -11.641,-26 -26,-26zM29,42l-11,-11l2,-3l9,6l13.957,-12l3.043,3z">
                            </path>
                        </g>
                    </g>
                </svg>
            </div>
            <div class="thank-you-message">
                <h4>Thank You for your contact request! We will get back to you within 5-7 business days!</h4>
            </div>

            <div class="home-button-container">
                <a href="<?php echo get_permalink(get_page_by_title('Home')) ?>" class="back-arrow">Home</a>
            </div>
        </div>

    </div>

    </div>
    <div class="footer-home">
        <?php get_footer(); ?>
    </div>
</main>
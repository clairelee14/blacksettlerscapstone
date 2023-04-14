<?php
/**
 * Template Name: Contact us
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

<main class="contact-page">
    <section class="contact-header">
        <div class="container">
            <h2>Contact Us</h2>
        </div>

    </section>
    <section class="dvd-inquiries">
        <div class="container">
            <h3>
                DVD Inquiries
            </h3>
            <p class="dvd-paragraph">
                If you are inquiring about purchasing a copy of a DVD, please make sure you check the box indicating
                that it is a DVD inquiry and please include the following :
            </p>
            <ul class="dvd-list">
                <li>DVD number</li>
                <li>How many copies of each DVD</li>
                <li>Your mailing address</li>
            </ul>
            <p class="dvd-paragraph">
                Our team will get back to you with more information, such as pricing and shipment as soon possible,
                we
                just need to crunch some numbers!
            </p>

        </div>
    </section>
    <section class="contact-section">
        <div class="container">
            <div class="contact-form">
                <h3>
                    General Inquiries
                </h3>
                <?php
                // get form shortcode from content
                the_content();
                ?>
            </div>
        </div>
    </section>
    <div class="footer-videos">
        <?php get_footer(); ?>
    </div>
</main>
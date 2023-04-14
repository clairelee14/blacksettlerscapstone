<h1>All first page</h1>
<?php
get_header();

    $args = array(
        'post_type' => 'our-first'
    );
    $loop = new WP_Query($args);

    while ( $loop->have_posts() ) {

        $loop->the_post();

        get_template_part( 'template-parts/content', 'first' );

    }

get_footer();

?>
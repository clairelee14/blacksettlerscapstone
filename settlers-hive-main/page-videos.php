<?php
/**
 * Template Name: Videos
 *
 * @link 
 *
 * @package blacksettlers
 */
?>

<?php get_header(); ?>


<main class="videos-page">

    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <div id="youtube-player"></div>
        </div>
    </div>
    <video class="video-banner" autoplay muted loop
        src="<?php echo get_template_directory_uri() ?>/assets/videos/video-page-banner.mp4"></video>
    <div class="container">
        <!-- <h1>Videos</h1> -->
        <div class="video-page-heading">
            <h2>Prairies on Film</h2>
        </div>
        <div class="video-page-paragraph">
            <p>
                We have spent countless hours interviewing, editing and polishing interviews with originals settling
                members, descendants, and more people that was a part of the important history that we know today.
                Come check all that we have and our library and click here if you would like to purchase the DVD copies
                of
                these interviews!
            </p>
        </div>
        <?php
        $taxonomy = 'video_card_category';
        $terms = get_terms($taxonomy);
        foreach ($terms as $term) {
            $args = array(
                'post_type' => 'video_cards',
                'tax_query' => array(
                    array(
                        'taxonomy' => $taxonomy,
                        'field' => 'slug',
                        'terms' => $term->slug
                    ),
                ),
            );
            $query = new WP_Query($args);
            if ($query->have_posts()) {
                echo '<h3>' . $term->name . '</h3>';
                echo '<div class="grid-container end-content">';
                while ($query->have_posts()) {
                    $query->the_post();
                    get_template_part('template-parts/content', 'videos');
                }
                wp_reset_postdata();
                echo '</div>';
            }
        }
        ?>

        <script src="https://www.youtube.com/iframe_api"></script>

        <script type="text/javascript">
            document.querySelectorAll('.video-card').forEach(item => {
                item.addEventListener('click', event => {
                    const videoId = event.currentTarget.getAttribute("data-video");
                    // call function to open modal
                    openModal(videoId)
                })
            });

            var player;

            // Define the onYouTubeIframeAPIReady function
            function onYouTubeIframeAPIReady() {
                // Create a new YouTube player object
                player = new YT.Player('youtube-player', {
                    videoId: 'VIDEO_ID',
                    playerVars: {
                        'autoplay': 0,
                        'controls': 1,
                        'rel': 0,
                        'showinfo': 0
                    }
                });
            }




            var modal = document.getElementById("myModal");

            var btn = document.getElementsByTagName("button")[0];

            var span = document.getElementsByClassName("close")[0];

            function openModal(videoId) {
                modal.style.display = "block";
                player.loadVideoById(videoId);
            }

            function closeModal() {
                modal.style.display = "none";
                player.pauseVideo();
            }
            window.onclick = function (event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        </script>

        <div class="footer-home">
            <?php get_footer(); ?>
        </div>
</main>
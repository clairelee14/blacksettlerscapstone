<?php
/** page-communities page
 *
 * @link 
 *
 * @package blacksettlers
 */
?>
<?php get_header(); ?>

<main class="communities">

    <div class="interactive-map">
        <div id="map" style="width:100%; height:70vh; margin:auto;"></div>
        <div class="communities-banner-content">
            <div class="container">
                <div class="map-h2">
                    <h2>COMMUNITIES</h2>
                </div>
                <div class="map-text">
                    <p>Explore the AB & SK Communities</p>
                </div>
            </div>
        </div>
    </div>

    <section class="communities-section">
        <div class="container">
            <h3>On the Prairies</h3>
            <p>Across the prairies from Amber Valley, Breton, Calgary, Campsie, Edmonton, Saskatchewan (Maidstone &
                Battleford), and Wildwood. These are the original settled areas, so come explore them here</p>
            <div class="community-mobile-btn">
                <div>
                    <a href="http://blacksettlersa.web.dmitcapstone.ca/amber-valley/">Amber Valley</a>
                </div>
                <div>
                    <a href="http://blacksettlersa.web.dmitcapstone.ca/breton/">Breton</a>
                </div>
            </div>
            <div class="community-mobile-btn">
                <div>
                    <a href="http://blacksettlersa.web.dmitcapstone.ca/calgary/">Calgary</a>
                </div>
                <div>
                    <a href="http://blacksettlersa.web.dmitcapstone.ca/campsie/">Campsie</a>
                </div>
            </div>
            <div class="community-mobile-btn">
                <div>
                    <a href="http://blacksettlersa.web.dmitcapstone.ca/edmonton/">Edmonton</a>
                </div>
                <div>
                    <a href="http://blacksettlersa.web.dmitcapstone.ca/saskatchewan/">Saskatchewan</a>
                </div>
            </div>
            <div class="community-mobile-btn">
                <div>
                    <a href="http://blacksettlersa.web.dmitcapstone.ca/wildwood/">Wildwood</a>
                </div>
            </div>
            <div class="community-card-group">
                <?php
                $args = array(
                    'post_type' => 'community',
                    'post_status' => 'publish',
                    'posts_per_page' => 8,
                    'order' => 'ASC',
                );
                $loop = new WP_Query($args);
                while ($loop->have_posts()):
                    $loop->the_post();
                    ?>
                    <div class="communities-card">
                        <a href="<?php the_field('to_indi_comm_page'); ?>"><img
                                src="<?php the_field('community_banner_image'); ?>"></a>
                        <a href="<?php the_field('to_indi_comm_page'); ?>">
                            <h5>
                                <?php the_field('community_name'); ?>
                            </h5>
                            <?php the_excerpt(); ?>
                        </a>
                    </div>
                    <?php
                endwhile;
                ?>
            </div>
        </div>
    </section>
    <script>
        function initMap() {
            console.log("js ready");
            var mapOptions = {
                center: new google.maps.LatLng(53.46223251177242, -110.05500374045916),
                zoom: 6,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                streetViewControl: false,
                mapTypeControl: false,
                fullscreenControl: false
            };
            var map = new google.maps.Map(document.getElementById("map"), mapOptions);

            var bsasMapStyles = [{
                "elementType": "geometry",
                "stylers": [{
                    "color": "#212121"
                }]
            },
            {
                "elementType": "labels.icon",
                "stylers": [{
                    "visibility": "off"
                }]
            },
            {
                "elementType": "labels.text.fill",
                "stylers": [{
                    "color": "#757575"
                }]
            },
            {
                "elementType": "labels.text.stroke",
                "stylers": [{
                    "color": "#212121"
                }]
            },
            {
                "featureType": "administrative",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#757575"
                }]
            },
            {
                "featureType": "administrative.country",
                "elementType": "labels.text.fill",
                "stylers": [{
                    "color": "#9e9e9e"
                }]
            },
            {
                "featureType": "administrative.land_parcel",
                "stylers": [{
                    "visibility": "off"
                }]
            },
            {
                "featureType": "administrative.locality",
                "elementType": "labels.text.fill",
                "stylers": [{
                    "color": "#bdbdbd"
                }]
            },
            {
                "featureType": "poi",
                "elementType": "labels.text.fill",
                "stylers": [{
                    "color": "#757575"
                }]
            },
            {
                "featureType": "poi.park",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#181818"
                }]
            },
            {
                "featureType": "poi.park",
                "elementType": "labels.text.fill",
                "stylers": [{
                    "color": "#616161"
                }]
            },
            {
                "featureType": "poi.park",
                "elementType": "labels.text.stroke",
                "stylers": [{
                    "color": "#1b1b1b"
                }]
            },
            {
                "featureType": "road",
                "elementType": "geometry.fill",
                "stylers": [{
                    "color": "#2c2c2c"
                }]
            },
            {
                "featureType": "road",
                "elementType": "labels.text.fill",
                "stylers": [{
                    "color": "#8a8a8a"
                }]
            },
            {
                "featureType": "road.arterial",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#373737"
                }]
            },
            {
                "featureType": "road.highway",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#3c3c3c"
                }]
            },
            {
                "featureType": "road.highway.controlled_access",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#4e4e4e"
                }]
            },
            {
                "featureType": "road.local",
                "elementType": "labels.text.fill",
                "stylers": [{
                    "color": "#616161"
                }]
            },
            {
                "featureType": "transit",
                "elementType": "labels.text.fill",
                "stylers": [{
                    "color": "#757575"
                }]
            },
            {
                "featureType": "water",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#000000"
                }]
            },
            {
                "featureType": "water",
                "elementType": "labels.text.fill",
                "stylers": [{
                    "color": "#3d3d3d"
                }]
            }
            ];
            map.setOptions({
                styles: bsasMapStyles
            });

            var amberValleyMarker = new google.maps.Marker({
                position: new google.maps.LatLng(54.73353252140866, -112.91697657822696),
                map: map,
                title: "Amber Valley",
                icon: {
                    url: "http://blacksettlersa.web.dmitcapstone.ca/wp-content/uploads/2023/03/bsas-map-pin.png",
                    className: "map-pin"
                },
                animation: google.maps.Animation.DROP
            });

            var amberValleyWindow = new google.maps.InfoWindow({
                content: "<div class=\"map-window\"><h5>Amber Valley</h5><p>One of the Alberta's oldest Black settlements</p><a href=\"http://blacksettlersa.web.dmitcapstone.ca/amber-valley/\" class=\"map-window-btn\">Explore more Amber Valley</a></div>"
            });

            google.maps.event.addListener(amberValleyMarker, "click", function () {
                amberValleyWindow.open(map, amberValleyMarker)
            });

            var bretonMarker = new google.maps.Marker({
                position: new google.maps.LatLng(53.110417068453245, -114.4730523532666),
                map: map,
                title: "Breton",
                icon: {
                    url: "http://blacksettlersa.web.dmitcapstone.ca/wp-content/uploads/2023/03/bsas-map-pin.png",
                    className: "map-pin"
                },
                animation: google.maps.Animation.DROP
            });

            var bretonWindow = new google.maps.InfoWindow({
                content: "<div class=\"map-window\"><h5>Breton</h5><p>Black pioneers arrived to this wooded location 110km south west of Edmonton in 1909</p><a href=\"http://blacksettlersa.web.dmitcapstone.ca/breton/\" class=\"map-window-btn\">Explore more Breton</a></div>"
            });

            google.maps.event.addListener(bretonMarker, "click", function () {
                bretonWindow.open(map, bretonMarker)
            });

            var calgaryMarker = new google.maps.Marker({
                position: new google.maps.LatLng(51.041519894687546, -114.07335803133088),
                map: map,
                title: "Calgary",
                icon: {
                    url: "http://blacksettlersa.web.dmitcapstone.ca/wp-content/uploads/2023/03/bsas-map-pin.png",
                    className: "map-pin"
                },
                animation: google.maps.Animation.DROP
            });

            var calgaryWindow = new google.maps.InfoWindow({
                content: "<div class=\"map-window\"><h5>Calgary</h5><p>Home to many black settlers and activists that fought against discrimination</p><a href=\"http://blacksettlersa.web.dmitcapstone.ca/calgary/\" class=\"map-window-btn\">Explore more Calgary</a></div>"
            });

            google.maps.event.addListener(calgaryMarker, "click", function () {
                calgaryWindow.open(map, calgaryMarker)
            });

            var campsieMarker = new google.maps.Marker({
                position: new google.maps.LatLng(54.12339344929725, -114.65062454845565),
                map: map,
                title: "Campsie",
                icon: {
                    url: "http://blacksettlersa.web.dmitcapstone.ca/wp-content/uploads/2023/03/bsas-map-pin.png",
                    className: "map-pin"
                },
                animation: google.maps.Animation.DROP
            });

            var campsieWindow = new google.maps.InfoWindow({
                content: "<div class=\"map-window\"><h5>Campsie</h5><p>Scottish settlers named this quiet community in the rolling hills of Alberta after the Campsie Hills in central Scotland.</p><a href=\"http://blacksettlersa.web.dmitcapstone.ca/campsie/\" class=\"map-window-btn\">Explore more Campsie</a></div>"
            });

            google.maps.event.addListener(campsieMarker, "click", function () {
                campsieWindow.open(map, campsieMarker)
            });

            var edmontonMarker = new google.maps.Marker({
                position: new google.maps.LatLng(53.537778932624754, -113.49413907210459),
                map: map,
                title: "Edmonton",
                icon: {
                    url: "http://blacksettlersa.web.dmitcapstone.ca/wp-content/uploads/2023/03/bsas-map-pin.png",
                    className: "map-pin"
                },
                animation: google.maps.Animation.DROP
            });

            var edmontonWindow = new google.maps.InfoWindow({
                content: "<div class=\"map-window\"><h5>Edmonton</h5><p>There were a variety of jobs for the settlers who left the farms and came to Edmonton.</p><a href=\"http://blacksettlersa.web.dmitcapstone.ca/edmonton/\" class=\"map-window-btn\">Explore more Edmonton</a></div>"
            });

            google.maps.event.addListener(edmontonMarker, "click", function () {
                edmontonWindow.open(map, edmontonMarker)
            });

            var saskatchewanMarker = new google.maps.Marker({
                position: new google.maps.LatLng(53.0870023984369, -109.29141237463932),
                map: map,
                title: "Saskatchewan",
                icon: {
                    url: "http://blacksettlersa.web.dmitcapstone.ca/wp-content/uploads/2023/03/bsas-map-pin.png",
                    className: "map-pin"
                },
                animation: google.maps.Animation.DROP
            });

            var saskatchewanWindow = new google.maps.InfoWindow({
                content: "<div class=\"map-window\"><h5>Saskatchewan</h5><p>There were several black settlements scattered across the plains of Saskatchewan.</p><a href=\"http://blacksettlersa.web.dmitcapstone.ca/saskatchewan/\" class=\"map-window-btn\">Explore more Saskatchewan</a></div>"
            });

            google.maps.event.addListener(saskatchewanMarker, "click", function () {
                saskatchewanWindow.open(map, saskatchewanMarker)
            });

            var wildwoodMarker = new google.maps.Marker({
                position: new google.maps.LatLng(53.61017837785917, -115.23565283415108),
                map: map,
                title: "Wildwood",
                icon: {
                    url: "http://blacksettlersa.web.dmitcapstone.ca/wp-content/uploads/2023/03/bsas-map-pin.png",
                    className: "map-pin"
                },
                animation: google.maps.Animation.DROP
            });

            var wildwoodWindow = new google.maps.InfoWindow({
                content: "<div class=\"map-window\"><h5>Wildwood</h5><p>120km west of Edmonton in the picturesque of the Rocky Mountains, was the second largest black community in Alberta.</p><a href=\"http://blacksettlersa.web.dmitcapstone.ca/wildwood/\" class=\"map-window-btn\">Explore more Wildwood</a></div>"
            });

            google.maps.event.addListener(wildwoodMarker, "click", function () {
                wildwoodWindow.open(map, wildwoodMarker)
            });
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap"
        async defer></script>

    <div class="footer-home">
        <?php get_footer(); ?>
    </div>
</main>
<!-- section map -->
<section class="air-block gallery-carousel pt-0" id="map" style="position:relative;z-index:1;">
    <div class="container">
        <div class="row">
            <div class="col">
                <div id="gmap"></div>
            </div>
        </div>
    </div>
</section>

</div><!-- #content -->
<!-- section map-footer -->
<section class="air-block jarallax imagebg map-footer pb-5" data-jarallax data-speed="0.2" data-overlay="3">
    <img class="jarallax-img" src="<?php echo $image = $bg_image ? $bg_image : get_template_directory_uri().'/assets/images/wedding/footer-bg.jpg'; ?>" height="400px" alt="countdown-background">
    <div class="container text-center map-footer_content">
        <img src="<?php echo  $image = $logo_image ? $logo_image : get_template_directory_uri().'/assets/images/wedding/footer-logo.png';?>" width="100">
    </div>
</section>



<!-- js to load google maps -->
<?php 
 $apikey = !empty($locations['loc_gmap_key']) ? $locations['loc_gmap_key'] : "AIzaSyAl-EDTJ5_uU3zBIX7-wNTu-qSZr1DO5Dw";
?>
<script type='text/javascript' src='https://maps.google.com/maps/api/js?libraries=geometry&#038;v=3&#038;key=<?php echo $apikey; ?>&#038;ver=20151215'></script>
<script>
// Create and Initialise the Map (required) our google map below
google.maps.event.addDomListener(window, 'load', init);
function init() {
    // Basic options for a simple Google Map
    // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions

    var mapOptions = {
        // How zoomed in you want the map to start at (always required)
        zoom: 12,
        scrollwheel: false,
        // The latitude and longitude to center the map (always required)

        center: new google.maps.LatLng(-33.890542, 151.274856), // Bondi Beach
        // How you would like to style the map. 
        // This is where you would paste any style found on [Snazzy Maps][1].
        // copy the Styles from Snazzy maps,  and paste that style info after the word "styles:"

        styles: [
            {
                "featureType": "all",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "saturation": 36
                    },
                    {
                        "color": "#333333"
                    },
                    {
                        "lightness": 40
                    }
                ]
            },
            {
                "featureType": "all",
                "elementType": "labels.text.stroke",
                "stylers": [
                    {
                        "visibility": "on"
                    },
                    {
                        "color": "#ffffff"
                    },
                    {
                        "lightness": 16
                    }
                ]
            },
            {
                "featureType": "all",
                "elementType": "labels.icon",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "administrative",
                "elementType": "geometry.fill",
                "stylers": [
                    {
                        "color": "#fefefe"
                    },
                    {
                        "lightness": 20
                    }
                ]
            },
            {
                "featureType": "administrative",
                "elementType": "geometry.stroke",
                "stylers": [
                    {
                        "color": "#fefefe"
                    },
                    {
                        "lightness": 17
                    },
                    {
                        "weight": 1.2
                    }
                ]
            },
            {
                "featureType": "landscape",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#f5f5f5"
                    },
                    {
                        "lightness": 20
                    }
                ]
            },
            {
                "featureType": "poi",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#f5f5f5"
                    },
                    {
                        "lightness": 21
                    }
                ]
            },
            {
                "featureType": "poi.park",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#dedede"
                    },
                    {
                        "lightness": 21
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "geometry.fill",
                "stylers": [
                    {
                        "color": "#ffffff"
                    },
                    {
                        "lightness": 17
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "geometry.stroke",
                "stylers": [
                    {
                        "color": "#ffffff"
                    },
                    {
                        "lightness": 29
                    },
                    {
                        "weight": 0.2
                    }
                ]
            },
            {
                "featureType": "road.arterial",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#ffffff"
                    },
                    {
                        "lightness": 18
                    }
                ]
            },
            {
                "featureType": "road.local",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#ffffff"
                    },
                    {
                        "lightness": 16
                    }
                ]
            },
            {
                "featureType": "transit",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#f2f2f2"
                    },
                    {
                        "lightness": 19
                    }
                ]
            },
            {
                "featureType": "water",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#e9e9e9"
                    },
                    {
                        "lightness": 17
                    }
                ]
            }
        ]
    }; // end mapOptions



    var mapElement = document.getElementById('gmap');

    // Create the Google Map using out element and options defined above
    var map = new google.maps.Map(mapElement, mapOptions);

    // Following section, you can create your info window content using html markup


    // Define the image to use for the map marker (58 x 44 px)

    var image = stokk_base_uri+'/assets/images/wedding/map/cd-icon-love.png';

    // Define the Lattitude and Longitude for the map location
    var locations = [
        <?php 
        if($locations['locations']){
            foreach($locations['locations'] as $loc){
                $image = wp_get_attachment_image_src($loc['loc_image'], 'full')[0];
                $image = $image ? $image : '';
                echo "['".$loc['loc_title']."', ".$loc['loc_latitude'].", ".$loc['loc_longitude'].", 4,'".$image."'],";
            }
        }else{  
        ?>
            ['<b>Wedding Reception</b> - Coogee Beach', -33.923036, 151.259052, 5]
        <?php 
        }
        ?>
    ];


    var infowindow = new google.maps.InfoWindow();
    var marker, i;

    for (i = 0; i < locations.length; i++) {

        if(locations[i][4]){
            image = locations[i][4];
        }

        marker = new google.maps.Marker({
            position: new google.maps.LatLng(locations[i][1], locations[i][2]),
            map: map,
            icon: image
        });

        google.maps.event.addListener(marker, 'click', (function (marker, i) {
            return function () {
                infowindow.setContent(locations[i][0]);
                infowindow.open(map, marker);
            }
        })(marker, i));
    }
}
</script>
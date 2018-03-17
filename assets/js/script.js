    var swiper1 = new Swiper('.hero-slide-container', {
        slidesPerView: 4,
        spaceBetween: 5,
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.hero-slide-pagination',
            clickable: true,
        },
        breakpoints: {
            1024: {
                slidesPerView: 4,
                spaceBetween: 5,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 5,
            },
            640: {
                slidesPerView: 1,
                spaceBetween: 5,
            },
            320: {
                slidesPerView: 1,
                spaceBetween: 5,
            }
        }
    });

    var swiper2 = new Swiper('.blog-slide-container', {
        slidesPerView: 5,
        spaceBetween: 5,
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.blog-slide-pagination',
            clickable: true,
        },
        breakpoints: {
            1024: {
                slidesPerView: 4,
                spaceBetween: 5,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 5,
            },
            640: {
                slidesPerView: 1,
                spaceBetween: 5,
            },
            320: {
                slidesPerView: 1,
                spaceBetween: 5,
            }
        }
    });

    var swiper3 = new Swiper('.gallery-slide-container', {
        slidesPerView: 'auto',
        centeredSlides: true,
        spaceBetween: 30,
        loop: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.gallery-slide-pagination',
            clickable: true,
        },
        breakpoints: {
            1024: {
                slidesPerView: 3,
                spaceBetween: 5,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 5,
            },
            640: {
                slidesPerView: 1,
                spaceBetween: 5,
            },
            320: {
                slidesPerView: 1,
                spaceBetween: 5,
            }
        }
    });


    jarallax(document.querySelectorAll('.jarallax'), {
        speed: 0.2
    });


    var js_countdown = jQuery('#countdown').data('countdown');
    jQuery('#countdown').countdown(js_countdown, function (event) {
        jQuery(this).html(event.strftime('<ul class="countdown_timer text-center text-metallics">'
            + '<li class="col-3 col-lg-3"><div class="shape-countdown"><span class="time"> %D </span><span class="meta"> days </span></div></li>'
            + '<li class="col-3 col-lg-3"><div class="shape-countdown"><span class="time"> %H </span><span class="meta"> Hours </span></div></li>'
            + '<li class="col-3 col-lg-3"><div class="shape-countdown"><span class="time"> %M </span><span class="meta"> Mins </span></div></li>'
            + '<li class="col-3 col-lg-3"><div class="shape-countdown"><span class="time"> %S </span><span class="meta"> Second </span></div></li>'
            + '</ul>'));
    });



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
            ['<b>Wedding Ceremony</b> - Bondi Beach', -33.890542, 151.274856, 4],
            ['<b>Wedding Reception</b> - Coogee Beach', -33.923036, 151.259052, 5]
        ];


        var infowindow = new google.maps.InfoWindow();
        var marker, i;

        for (i = 0; i < locations.length; i++) {
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
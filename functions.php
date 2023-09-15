<?php

// add the CSS and JS files

function tpq_setup(){
    wp_enqueue_style('fontawesome', "//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css");
    wp_enqueue_style('style', get_stylesheet_uri(), NULL, microtime());
    wp_enqueue_script("questions_array", get_theme_file_uri('/js/questions_array.js'), NULL, microtime(), true);
    wp_enqueue_script("countries_array", get_theme_file_uri('/js/countries_array.js'), NULL, microtime(), true);
    wp_enqueue_script("personalities_array", get_theme_file_uri('/js/personalities_array.js'), NULL, microtime(), true);
    wp_enqueue_script("map", get_theme_file_uri('js/map.js'), NULL, microtime(), true);
    wp_enqueue_script("charts", 'https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js', NULL, microtime(), true);
    wp_enqueue_script("Google Maps API Markers", 'https://unpkg.com/@googlemaps/markerclusterer/dist/index.min.js', NULL, microtime(), true);
    wp_enqueue_script("Google Maps API", 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBp3bbw0F5d1sjzp5iet_vlxKb0RrevMCA&callback=initMap', NULL, microtime(), array('in_footer' => true, 'strategy' => 'async',));
    wp_enqueue_script("quiz", get_theme_file_uri('js/quiz.js'), NULL, microtime(), true);
}

add_action('wp_enqueue_scripts', 'tpq_setup');


// Adding Theme Support

function tpq_init() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html5');
}

add_action('after_setup_theme', 'tpq_init');


// Stops WP wrapping everything in p elements
add_filter('wpcf7_autop_or_not', '__return_false');

?>
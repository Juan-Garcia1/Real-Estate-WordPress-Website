<?php 
/**
 * Enqueue scripts and styles
 */
function load_stylesheets() {
    // all styles
    wp_register_style( 'bootstrap', "https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/css/bootstrap.min.css", array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style( 'theme-stylesheet', get_template_directory_uri() . '/style.css', array(), false, 'all');
    wp_enqueue_style('theme-stylesheet');
}
add_action( 'wp_enqueue_scripts', 'load_stylesheets' );

function load_scripts() {
    wp_register_script( 'bootstrap', "https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/js/bootstrap.min.js", array("jquery"));
    wp_enqueue_script('bootstrap');
}
add_action('wp_enqueue_scripts', 'load_scripts');
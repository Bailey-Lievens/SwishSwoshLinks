<?php

function swishSwosh_theme_support() {
    //Adds dynamic title tag support
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
}

add_action('after_setup_theme', 'swishSwosh_theme_support');

//Function to add a stylesheet (or more)
function swishSwosh_register_styles() {
    $version = wp_get_theme()->get('Version');

    wp_enqueue_style( 'swishSwosh-style', get_template_directory_uri() . "/assets/css/style.css", array(), $version, 'all');
}

//When WP does the action (first parameter) also perform this function (second paramater)
add_action( 'wp_enqueue_scripts', 'swishSwosh_register_styles');

//Function to add a script (or more)
function swishSwosh_register_scripts() {
    $version = wp_get_theme()->get('Version');

    wp_enqueue_script( 'swishSwosh-main', get_template_directory_uri() . "/assets/js/main.js", array(), $version, true);
    wp_enqueue_script( 'swishSwosh-category-fold', get_template_directory_uri() . "/assets/js/category-fold.js", array(), $version, true);
}

//When WP does the action (first parameter) also perform this function (second paramater)
add_action( 'wp_enqueue_scripts', 'swishSwosh_register_scripts');

?>
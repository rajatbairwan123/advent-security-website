<?php

function advent_security_setup() {

    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');

    add_theme_support('custom-logo');

    register_nav_menus(array(
        'primary' => __('Primary Menu', 'advent-security'),
    ));
}

add_action('after_setup_theme', 'advent_security_setup');


function advent_security_assets() {

    wp_enqueue_style(
        'advent-security-style',
        get_stylesheet_uri(),
        array(),
        '1.0'
    );

    wp_enqueue_style(
        'advent-security-main',
        get_template_directory_uri() . '/assets/css/main.css',
        array('advent-security-style'),
        '1.0'
    );

    wp_enqueue_script(
        'advent-security-main',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        '1.0',
        true
    );
}

add_action('wp_enqueue_scripts', 'advent_security_assets');

function advent_security_enqueue_assets() {

    // Google Font - Inter
    wp_enqueue_style(
        'advent-security-inter',
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap',
        array(),
        null
    );

    // Main stylesheet
    wp_enqueue_style(
        'advent-security-main',
        get_template_directory_uri() . '/assets/css/main.css',
        array('advent-security-inter'),
        '1.0'
    );

}

add_action('wp_enqueue_scripts', 'advent_security_enqueue_assets');
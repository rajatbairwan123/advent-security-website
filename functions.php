<?php

function advent_security_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');

    register_nav_menus(array(
        'primary' => __('Primary Menu', 'advent-security'),
    ));
}

add_action('after_setup_theme', 'advent_security_setup');


function advent_security_assets()
{
    /*
     * Google Font - Inter
     */
    wp_enqueue_style(
        'advent-security-inter',
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap',
        array(),
        null
    );


    /*
     * Bootstrap CSS
     */
    wp_enqueue_style(
        'bootstrap',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css',
        array(),
        '5.3.8'
    );


    /*
     * Theme Main CSS
     *
     * Loaded after Bootstrap so our custom CSS
     * can override Bootstrap where necessary.
     */
    wp_enqueue_style(
        'advent-security-main',
        get_template_directory_uri() . '/assets/css/main.css',
        array('bootstrap', 'advent-security-inter'),
        '1.0'
    );


    /*
     * Bootstrap JavaScript Bundle
     *
     * Includes Popper.js
     */
    wp_enqueue_script(
        'bootstrap',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js',
        array(),
        '5.3.8',
        true
    );


    /*
     * Theme Main JavaScript
     */
    wp_enqueue_script(
        'advent-security-main',
        get_template_directory_uri() . '/assets/js/main.js',
        array('bootstrap'),
        '1.0',
        true
    );
}

add_action('wp_enqueue_scripts', 'advent_security_assets');

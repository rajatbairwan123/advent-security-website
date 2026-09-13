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
     * Advent Global Design System
     */
    wp_enqueue_style(
        'advent-global',
        get_template_directory_uri() . '/assets/css/global.css',
        array('bootstrap'),
        '1.0.0'
    );


    /*
     * Reusable Components
     */
    wp_enqueue_style(
        'advent-components',
        get_template_directory_uri() . '/assets/css/components.css',
        array('advent-global'),
        '1.0.0'
    );


    /*
     * Header
     */
    wp_enqueue_style(
        'advent-header',
        get_template_directory_uri() . '/assets/css/header.css',
        array('advent-global'),
        '1.0.0'
    );


    /*
     * Footer
     */
    wp_enqueue_style(
        'advent-footer',
        get_template_directory_uri() . '/assets/css/footer.css',
        array('advent-global'),
        '1.0.0'
    );


    /*
     * Security Page
     */
    wp_enqueue_style(
        'advent-security',
        get_template_directory_uri() . '/assets/css/security.css',
        array(
            'advent-components',
            'advent-header',
            'advent-footer'
        ),
        '1.0.0'
    );


    /*
     * Responsive
     */
    wp_enqueue_style(
        'advent-responsive',
        get_template_directory_uri() . '/assets/css/responsive.css',
        array('advent-security'),
        '1.0.0'
    );

    if (
        is_page('security-consulting') ||
        is_page_template('page-security-consulting.php')
    ) {

        wp_enqueue_style(
            'advent-security-consulting',
            get_template_directory_uri() . '/assets/css/security-consulting.css',
            array('advent-responsive'),
            '1.0.1'
        );
    }

    if (
        is_page('alarm-monitoring') ||
        is_page_template('page-alarm-monitoring-response.php')
    ) {

        wp_enqueue_style(
            'advent-alarm-monitoring',
            get_template_directory_uri() . '/assets/css/alarm-monitoring.css',
            array('advent-responsive'),
            '1.0.0'
        );
    }
    if (
        is_page('access-control') ||
        is_page_template('page-access-control.php')
    ) {

        wp_enqueue_style(
            'advent-access-control',
            get_template_directory_uri() . '/assets/css/access-control.css',
            array('advent-responsive'),
            '1.0.0'
        );
    }

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

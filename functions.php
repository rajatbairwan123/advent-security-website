<?php

/**
 * ---------------------------------------------------------
 * Theme Navigation
 * ---------------------------------------------------------
 *
 * Register the primary navigation menu used in the header.
 */
function advent_register_menus()
{
    register_nav_menus(
        array(
            'primary_menu' => __('Primary Menu', 'advent-security'),
        )
    );
}

add_action('after_setup_theme', 'advent_register_menus');


/**
 * ---------------------------------------------------------
 * Theme Assets
 * ---------------------------------------------------------
 *
 * Load all global styles, page-specific styles,
 * Bootstrap assets and theme JavaScript.
 */
function advent_security_assets()
{

    /**
     * -----------------------------------------------------
     * Google Font - Inter
     * -----------------------------------------------------
     *
     * Main and ONLY font used throughout the
     * Advent Security website.
     */
    wp_enqueue_style(
        'advent-security-inter',
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap',
        array(),
        null
    );


    /**
     * -----------------------------------------------------
     * Bootstrap CSS
     * -----------------------------------------------------
     *
     * Bootstrap is used for layout, grid and responsive
     * utility classes.
     */
    wp_enqueue_style(
        'bootstrap',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css',
        array(),
        '5.3.8'
    );

    /**
     * -----------------------------------------------------
     * Bootstrap Icons
     * -----------------------------------------------------
     *
     * Used across Advent theme components and service pages.
     */
    wp_enqueue_style(
        'bootstrap-icons',
        'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css',
        array(),
        '1.13.1'
    );


    /**
     * -----------------------------------------------------
     * Advent Global Design System
     * -----------------------------------------------------
     *
     * Global variables, typography, colors, spacing
     * and common website styles.
     */
    wp_enqueue_style(
        'advent-global',
        get_template_directory_uri() . '/assets/css/global.css',
        array('bootstrap', 'advent-security-inter'),
        '1.0.0'
    );


    /**
     * -----------------------------------------------------
     * Reusable Components
     * -----------------------------------------------------
     */
    wp_enqueue_style(
        'advent-components',
        get_template_directory_uri() . '/assets/css/components.css',
        array('advent-global'),
        '1.0.0'
    );


    /**
     * -----------------------------------------------------
     * Header Styles
     * -----------------------------------------------------
     */
    wp_enqueue_style(
        'advent-header',
        get_template_directory_uri() . '/assets/css/header.css',
        array('advent-global'),
        '1.0.0'
    );


    /**
     * -----------------------------------------------------
     * Footer Styles
     * -----------------------------------------------------
     */
    wp_enqueue_style(
        'advent-footer',
        get_template_directory_uri() . '/assets/css/footer.css',
        array('advent-global'),
        '1.0.0'
    );


    /**
     * -----------------------------------------------------
     * Security Global Styles
     * -----------------------------------------------------
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


    /**
     * -----------------------------------------------------
     * Responsive Styles
     * -----------------------------------------------------
     */
    wp_enqueue_style(
        'advent-responsive',
        get_template_directory_uri() . '/assets/css/responsive.css',
        array('advent-security'),
        '1.0.0'
    );


    /**
     * =====================================================
     * PAGE-SPECIFIC CSS
     * =====================================================
     */


    /**
     * -----------------------------------------------------
     * Security Consulting
     * -----------------------------------------------------
     */
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

    /**
     * -----------------------------------------------------
     * Retail Security
     * -----------------------------------------------------
     */
    if (
        is_page('retail-security') ||
        is_page_template('page-retail-security.php')
    ) {
        wp_enqueue_style(
            'advent-retail-security',
            get_template_directory_uri() . '/assets/css/retail-security.css',
            array('advent-responsive'),
            '1.0.0'
        );
    }

    /**
     * -----------------------------------------------------
     * Construction Security
     * -----------------------------------------------------
     */
    if (
        is_page('construction-security') ||
        is_page_template('page-construction-security.php')
    ) {
        wp_enqueue_style(
            'advent-construction-security',
            get_template_directory_uri() . '/assets/css/construction-security.css',
            array('advent-responsive'),
            '1.0.0'
        );
    }

    /**
     * -----------------------------------------------------
     * Alarm Monitoring
     * -----------------------------------------------------
     */
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

    /**
     * -----------------------------------------------------
     * Event Security
     * -----------------------------------------------------
     */
    if (
        is_page('event-security') ||
        is_page_template('page-event-security.php')
    ) {
        wp_enqueue_style(
            'advent-event-security',
            get_template_directory_uri() . '/assets/css/event-security.css',
            array('advent-responsive'),
            '1.0.0'
        );
    }


    /**
     * -----------------------------------------------------
     * Gatehouse Security
     * -----------------------------------------------------
     */
    if (
        is_page('gatehouse-security') ||
        is_page_template('page-gatehouse-security.php')
    ) {
        wp_enqueue_style(
            'advent-gatehouse-security',
            get_template_directory_uri() . '/assets/css/gatehouse-security.css',
            array('advent-responsive'),
            '1.0.0'
        );
    }

    /**
     * -----------------------------------------------------
     * Loss Prevention
     * -----------------------------------------------------
     */
    if (
        is_page('loss-prevention') ||
        is_page_template('page-loss-prevention.php')
    ) {
        wp_enqueue_style(
            'advent-loss-prevention',
            get_template_directory_uri() . '/assets/css/loss-prevention.css',
            array('advent-responsive'),
            '1.0.0'
        );
    }
    /**
     * -----------------------------------------------------
     * Emergency Response
     * -----------------------------------------------------
     */
    if (
        is_page('emergency-response') ||
        is_page_template('page-emergency-response.php')
    ) {
        wp_enqueue_style(
            'advent-emergency-response',
            get_template_directory_uri() . '/assets/css/emergency-response.css',
            array('advent-responsive'),
            '1.0.0'
        );
    }
    /**
     * -----------------------------------------------------
     * AI-Surveillance
     * -----------------------------------------------------
     */
    // if (
    //     is_page('ai-surveillance') ||
    //     is_page_template('page-ai-surveillance.php')
    // ) {
    //     wp_enqueue_style(
    //         'advent-ai-surveillance',
    //         get_template_directory_uri() . '/assets/css/ai-surveillance.css',
    //         array('advent-responsive'),
    //         '1.0.0'
    //     );
    // }
    /**
     * -----------------------------------------------------
     * Drone Security
     * -----------------------------------------------------
     */
    // if (
    //     is_page('drone-security') ||
    //     is_page_template('page-drone-security.php')
    // ) {
    //     wp_enqueue_style(
    //         'advent-drone-security',
    //         get_template_directory_uri() . '/assets/css/drone-security.css',
    //         array('advent-responsive'),
    //         '1.0.0'
    //     );
    // }
    /**
     * -----------------------------------------------------
     * Bodyguard Services
     * -----------------------------------------------------
     */
    // if (
    //     is_page('bodyguard-services') ||
    //     is_page_template('page-bodyguard-services.php')
    // ) {
    //     wp_enqueue_style(
    //         'advent-bodyguard-services',
    //         get_template_directory_uri() . '/assets/css/bodyguard-services.css',
    //         array('advent-responsive'),
    //         '1.0.0'
    //     );
    // }

    // Electronic Security Pages --------------------------

    /**
     * -----------------------------------------------------
     * Access Control
     * -----------------------------------------------------
     */
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

    /**
     * -----------------------------------------------------
     * License Plate Recognition
     * -----------------------------------------------------
     */
    if (
        is_page('license-plate-recognition') ||
        is_page_template('page-license-plate-recognition.php')
    ) {
        wp_enqueue_style(
            'advent-license-plate-recognition',
            get_template_directory_uri() . '/assets/css/license-plate-recognition.css',
            array('advent-responsive'),
            '1.0.0'
        );
    }

    /**
     * -----------------------------------------------------
     * CCTV
     * -----------------------------------------------------
     */
    if (
        is_page('cctv') ||
        is_page_template('page-cctv.php')
    ) {
        wp_enqueue_style(
            'advent-cctv',
            get_template_directory_uri() . '/assets/css/cctv.css',
            array('advent-responsive'),
            '1.0.0'
        );
    }

    /**
     * -----------------------------------------------------
     * Alarm Systems
     * -----------------------------------------------------
     */
    if (
        is_page('alarm-systems') ||
        is_page_template('page-alarm-systems.php')
    ) {
        wp_enqueue_style(
            'advent-alarm-systems',
            get_template_directory_uri() . '/assets/css/alarm-systems.css',
            array('advent-responsive'),
            '1.0.0'
        );
    }

    /**
     * -----------------------------------------------------
     * Cloud Monitoring
     * -----------------------------------------------------
     */
    if (
        is_page('cloud-monitoring') ||
        is_page_template('page-cloud-monitoring.php')
    ) {
        wp_enqueue_style(
            'advent-cloud-monitoring',
            get_template_directory_uri() . '/assets/css/cloud-monitoring.css',
            array('advent-responsive'),
            '1.0.0'
        );
    }

    /**
     * -----------------------------------------------------
     * Video Analytics
     * -----------------------------------------------------
     */
    if (
        is_page('video-analytics') ||
        is_page_template('page-video-analytics.php')
    ) {
        wp_enqueue_style(
            'advent-video-analytics',
            get_template_directory_uri() . '/assets/css/video-analytics.css',
            array('advent-responsive'),
            '1.0.0'
        );
    }

    /**
     * -----------------------------------------------------
     * Boom Gates Service
     * -----------------------------------------------------
     */
    if (
        is_page('boom-gates') ||
        is_page_template('page-boom-gates.php')
    ) {
        wp_enqueue_style(
            'advent-boom-gates',
            get_template_directory_uri() . '/assets/css/boom-gates.css',
            array('advent-responsive'),
            '1.0.0'
        );
    }

    /**
     * -----------------------------------------------------
     * Integrated Security Systems
     * -----------------------------------------------------
     */
    if (
        is_page('integrated-security-systems') ||
        is_page_template('integrated-security-systems.php')
    ) {
        wp_enqueue_style(
            'advent-integrated-security-systems',
            get_template_directory_uri() . '/assets/css/integrated-security-systems.css',
            array('advent-responsive'),
            '1.0.0'
        );
    }

    /**
     * -----------------------------------------------------
     * Visitor Management Page
     * -----------------------------------------------------
     */
    if (
        is_page('visitor-management') ||
        is_page_template('page-visitor-management.php')
    ) {
        wp_enqueue_style(
            'advent-visitor-management',
            get_template_directory_uri() . '/assets/css/visitor-management.css',
            array('advent-responsive'),
            '1.0.0'
        );
    }

    // Industries Page ------------------------

    /**
     * -----------------------------------------------------
     * Industry specific security
     * -----------------------------------------------------
     */
    if (
        is_page('industry') ||
        is_page_template('page-industry.php')
    ) {
        wp_enqueue_style(
            'advent-industry',
            get_template_directory_uri() . '/assets/css/industry.css',
            array('advent-responsive'),
            '1.0.0'
        );
    }


    /**
     * =====================================================
     * JAVASCRIPT
     * =====================================================
     */

    wp_enqueue_script(
        'bootstrap',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js',
        array(),
        '5.3.8',
        true
    );


    wp_enqueue_script(
        'advent-security-main',
        get_template_directory_uri() . '/assets/js/main.js',
        array('bootstrap'),
        '1.0.0',
        true
    );
}

add_action('wp_enqueue_scripts', 'advent_security_assets');

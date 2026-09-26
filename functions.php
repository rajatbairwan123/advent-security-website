<?php

/**
 * ---------------------------------------------------------
 * Theme Navigation
 * ---------------------------------------------------------
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

/* =========================================================
   ADVENT MEGA MENU WALKER
========================================================= */

class Advent_Mega_Menu_Walker extends Walker_Nav_Menu
{

    private $mega_parent = '';

    private function get_service_data($title)
    {
        $services = array(

            /* ---------------------------------------------
               SECURITY SERVICES
            --------------------------------------------- */

            'Security Guard Services' => array(
                'icon' => 'bi-shield-check',
                'description' => 'Professional security personnel for people, property and operations.',
            ),

            'Corporate Concierge Services' => array(
                'icon' => 'bi-person-badge',
                'description' => 'Front-of-house security and concierge support for corporate environments.',
            ),

            'Security Consulting' => array(
                'icon' => 'bi-clipboard2-check',
                'description' => 'Risk-led security advice, assessments and strategic planning.',
            ),

            'Retail Security' => array(
                'icon' => 'bi-shop',
                'description' => 'Security solutions designed to protect retail environments and assets.',
            ),

            'Construction Security' => array(
                'icon' => 'bi-buildings',
                'description' => 'Site security designed for construction projects, equipment and personnel.',
            ),

            'Event Security' => array(
                'icon' => 'bi-calendar-event',
                'description' => 'Security planning and personnel for events, venues and public gatherings.',
            ),

            'Gatehouse Security' => array(
                'icon' => 'bi-door-open',
                'description' => 'Controlled entry, visitor management and site access protection.',
            ),

            'Loss Prevention' => array(
                'icon' => 'bi-bag-check',
                'description' => 'Practical security measures to reduce theft, loss and operational risk.',
            ),

            'Emergency Response' => array(
                'icon' => 'bi-exclamation-triangle',
                'description' => 'Responsive security support for incidents, emergencies and critical situations.',
            ),

            'AI Surveillance' => array(
                'icon' => 'bi-camera-video',
                'description' => 'AI-enabled surveillance designed to improve detection and situational awareness.',
            ),

            'Drone Security' => array(
                'icon' => 'bi-airplane',
                'description' => 'Aerial surveillance capabilities for complex and large-scale environments.',
            ),

            'Bodyguard Services' => array(
                'icon' => 'bi-shield-lock',
                'description' => 'Discreet personal protection for individuals, executives and high-profile environments.',
            ),

            'Mobile Patrols' => array(
                'icon' => 'bi-car-front',
                'description' => 'Visible mobile security patrols for sites, properties and commercial environments.',
            ),


            /* ---------------------------------------------
               ELECTRONIC SECURITY
            --------------------------------------------- */

            'Access Control' => array(
                'icon' => 'bi-person-lock',
                'description' => 'Manage and control access to buildings, sites and restricted areas.',
            ),

            'License Plate Recognition' => array(
                'icon' => 'bi-card-text',
                'description' => 'Automated vehicle identification and monitoring for controlled environments.',
            ),

            'CCTV' => array(
                'icon' => 'bi-camera-video',
                'description' => 'Reliable video surveillance for visibility, monitoring and incident response.',
            ),

            'Alarm Systems' => array(
                'icon' => 'bi-bell',
                'description' => 'Intrusion and alarm solutions designed to identify security events quickly.',
            ),

            'Cloud Monitoring' => array(
                'icon' => 'bi-cloud-check',
                'description' => 'Cloud-connected monitoring capabilities for security systems and sites.',
            ),

            'Video Analytics' => array(
                'icon' => 'bi-graph-up-arrow',
                'description' => 'Intelligent video analysis to identify activity, events and potential threats.',
            ),

            'Boom Gates' => array(
                'icon' => 'bi-sign-stop',
                'description' => 'Automated vehicle access control for entrances, facilities and secure sites.',
            ),

            'Integrated Security Systems' => array(
                'icon' => 'bi-diagram-3',
                'description' => 'Connected security technologies working together as one integrated system.',
            ),

            'Visitor Management' => array(
                'icon' => 'bi-person-vcard',
                'description' => 'Structured visitor registration, tracking and access management.',
            ),


            /* ---------------------------------------------
               INDUSTRIES
            --------------------------------------------- */

            'Aviation Airports' => array(
                'icon' => 'bi-airplane',
                'description' => 'Integrated security solutions for aviation facilities, terminals and critical operations.',
            ),

            'Critical Infrastructure' => array(
                'icon' => 'bi-buildings',
                'description' => 'Security solutions designed to protect critical assets, infrastructure and essential operations.',
            ),

            'Manufacturing' => array(
                'icon' => 'bi-gear',
                'description' => 'Security solutions designed to protect manufacturing facilities, people and production operations.',
            ),

            'Healthcare' => array(
                'icon' => 'bi-hospital',
                'description' => 'Security solutions designed around healthcare facilities, people, access and operational requirements.',
            ),


            /* ---------------------------------------------
               RESOURCES
            --------------------------------------------- */

            'News & Insights' => array(
                'icon' => 'bi-journal-text',
                'description' => 'Security news, industry trends, practical guidance and insights from Advent Security.',
            ),

        );


        /**
         * Return requested item data.
         */
        return isset($services[$title])
            ? $services[$title]
            : array(
                'icon' => 'bi-shield',
                'description' => 'Security solutions designed around your site, people and operational requirements.',
            );
    }


    /**
     * -----------------------------------------------------
     * Start submenu
     * -----------------------------------------------------
     */
    public function start_lvl(&$output, $depth = 0, $args = null)
    {
        /**
         * Mega menu parents.
         */
        if (
            $depth === 0 &&
            in_array(
                $this->mega_parent,
                array(
                    'Security Services',
                    'Electronic Security',
                    'Industries',
                    'Resources'
                ),
                true
            )
        ) {

            /**
             * Header information for each mega menu.
             */
            $parent_data = array(

                'Security Services' => array(
                    'label' => 'SECURITY SERVICES',
                    'description' => 'Integrated protection for people, property and operations.'
                ),

                'Electronic Security' => array(
                    'label' => 'ELECTRONIC SECURITY',
                    'description' => 'Technology-led security systems designed around your site and risk profile.'
                ),

                'Industries' => array(
                    'label' => 'INDUSTRIES',
                    'description' => 'Security solutions designed around the environments, risks and operations of your industry.'
                ),

                'Resources' => array(
                    'label' => 'RESOURCES',
                    'description' => 'Security insights, information and practical resources to help you stay informed.'
                ),

            );


            /**
             * Get current parent data.
             */
            $data = $parent_data[$this->mega_parent];


            /**
             * Mega menu wrapper.
             */
            $output .= '<div class="advent-mega-menu">';


            /**
             * Mega menu header.
             */
            $output .= '<div class="advent-mega-header">';

            $output .= '<span class="advent-mega-eyebrow">'
                . esc_html($data['label'])
                . '</span>';

            $output .= '<p>'
                . esc_html($data['description'])
                . '</p>';

            $output .= '</div>';


            /**
             * Mega menu items.
             */
            $output .= '<ul class="sub-menu advent-mega-grid">';


            return;
        }


        /**
         * Normal WordPress submenu.
         */
        $output .= '<ul class="sub-menu">';
    }


    /**
     * -----------------------------------------------------
     * End submenu
     * -----------------------------------------------------
     */
    public function end_lvl(&$output, $depth = 0, $args = null)
    {
        /**
         * Close mega menu.
         */
        if (
            $depth === 0 &&
            in_array(
                $this->mega_parent,
                array(
                    'Security Services',
                    'Electronic Security',
                    'Industries',
                    'Resources'
                ),
                true
            )
        ) {

            $output .= '</ul>';
            $output .= '</div>';

            return;
        }


        /**
         * Close normal submenu.
         */
        $output .= '</ul>';
    }


    /**
     * -----------------------------------------------------
     * Start menu item
     * -----------------------------------------------------
     */
    public function start_el(
        &$output,
        $item,
        $depth = 0,
        $args = null,
        $id = 0
    ) {

        /**
         * Store top-level mega menu parent.
         */
        if ($depth === 0) {
            $this->mega_parent = $item->title;
        }


        /**
         * Normal WordPress classes.
         */
        $classes = empty($item->classes)
            ? array()
            : (array) $item->classes;


        $class_names = implode(
            ' ',
            array_filter($classes)
        );


        /**
         * Menu item ID.
         */
        $item_id = 'menu-item-' . $item->ID;


        /**
         * ---------------------------------------------
         * CHILD ITEMS INSIDE MEGA MENU
         * ---------------------------------------------
         */
        if (
            $depth === 1 &&
            in_array(
                $this->mega_parent,
                array(
                    'Security Services',
                    'Electronic Security',
                    'Industries',
                    'Resources'
                ),
                true
            )
        ) {

            /**
             * Get item information.
             */
            $service = $this->get_service_data($item->title);


            /**
             * Start item.
             */
            $output .= '<li id="' . esc_attr($item_id) . '"';

            $output .= ' class="'
                . esc_attr($class_names)
                . ' advent-mega-item">';


            /**
             * Link.
             */
            $output .= '<a href="'
                . esc_url($item->url)
                . '" class="advent-mega-link">';


            /**
             * Icon.
             */
            $output .= '<span class="advent-mega-icon">';

            $output .= '<i class="bi '
                . esc_attr($service['icon'])
                . '" aria-hidden="true"></i>';

            $output .= '</span>';


            /**
             * Content.
             */
            $output .= '<span class="advent-mega-content">';


            /**
             * Title.
             */
            $output .= '<span class="advent-mega-title">';

            $output .= esc_html($item->title);

            $output .= '</span>';


            /**
             * Description.
             */
            $output .= '<span class="advent-mega-description">';

            $output .= esc_html($service['description']);

            $output .= '</span>';


            $output .= '</span>';


            /**
             * Close link.
             */
            $output .= '</a>';


            /**
             * Important:
             * Do not add </li> here because end_el()
             * handles it.
             */
            return;
        }


        /**
         * ---------------------------------------------
         * NORMAL MENU ITEMS
         * ---------------------------------------------
         */
        $output .= '<li id="' . esc_attr($item_id) . '"';

        $output .= ' class="'
            . esc_attr($class_names)
            . '">';


        /**
         * Normal link.
         */
        $output .= '<a href="'
            . esc_url($item->url)
            . '">';


        $output .= esc_html($item->title);


        $output .= '</a>';
    }


    /**
     * -----------------------------------------------------
     * End menu item
     * -----------------------------------------------------
     */
    public function end_el(
        &$output,
        $item,
        $depth = 0,
        $args = null
    ) {

        $output .= '</li>';
    }
}

/* =========================================================
   INSIGHTS CUSTOM POST TYPE
========================================================= */

function advent_theme_setup()
{
    // Enable Featured Images
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'advent_theme_setup');
/**
 * ---------------------------------------------------------
 * Register Insights
 * ---------------------------------------------------------
 */
function advent_register_insight_post_type()
{
    $labels = array(
        'name'                  => __('Insights', 'advent-security'),
        'singular_name'         => __('Insight', 'advent-security'),
        'menu_name'             => __('Insights', 'advent-security'),
        'name_admin_bar'        => __('Insight', 'advent-security'),
        'add_new'               => __('Add New', 'advent-security'),
        'add_new_item'          => __('Add New Insight', 'advent-security'),
        'new_item'              => __('New Insight', 'advent-security'),
        'edit_item'             => __('Edit Insight', 'advent-security'),
        'view_item'             => __('View Insight', 'advent-security'),
        'all_items'             => __('All Insights', 'advent-security'),
        'search_items'          => __('Search Insights', 'advent-security'),
        'not_found'             => __('No insights found.', 'advent-security'),
        'not_found_in_trash'    => __('No insights found in Trash.', 'advent-security'),
    );

    $args = array(
        'labels' => $labels,

        'public' => true,

        'show_ui' => true,

        'show_in_menu' => true,

        'show_in_rest' => true,

        'menu_icon' => 'dashicons-edit-page',

        'supports' => array(
            'title',
            'editor',
            'thumbnail',
            'excerpt',
            'author',
            'revisions',
        ),

        'has_archive' => true,

        'rewrite' => array(
            'slug' => 'resources/news-insights',
            'with_front' => false,
        ),

        'query_var' => true,

        'publicly_queryable' => true,
    );

    register_post_type(
        'insight',
        $args
    );
}

add_action(
    'init',
    'advent_register_insight_post_type'
);


/**
 * ---------------------------------------------------------
 * Register Insight Categories
 * ---------------------------------------------------------
 */
function advent_register_insight_taxonomy()
{
    $labels = array(
        'name'              => __('Insight Categories', 'advent-security'),
        'singular_name'     => __('Insight Category', 'advent-security'),
        'search_items'      => __('Search Insight Categories', 'advent-security'),
        'all_items'         => __('All Insight Categories', 'advent-security'),
        'parent_item'       => __('Parent Insight Category', 'advent-security'),
        'parent_item_colon' => __('Parent Insight Category:', 'advent-security'),
        'edit_item'         => __('Edit Insight Category', 'advent-security'),
        'update_item'       => __('Update Insight Category', 'advent-security'),
        'add_new_item'      => __('Add New Insight Category', 'advent-security'),
        'new_item_name'     => __('New Insight Category Name', 'advent-security'),
        'menu_name'         => __('Categories', 'advent-security'),
    );

    $args = array(
        'labels' => $labels,

        'public' => true,

        'hierarchical' => true,

        'show_ui' => true,

        'show_admin_column' => true,

        'show_in_rest' => true,

        'rewrite' => array(
            'slug' => 'resources/news-insights/category',
            'with_front' => false,
        ),
    );

    register_taxonomy(
        'insight_category',
        array('insight'),
        $args
    );
}

add_action(
    'init',
    'advent_register_insight_taxonomy'
);

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
    if (
        is_page('ai-surveillance') ||
        is_page_template('page-ai-surveillance.php')
    ) {
        wp_enqueue_style(
            'advent-ai-surveillance',
            get_template_directory_uri() . '/assets/css/ai-surveillance.css',
            array('advent-responsive'),
            '1.0.0'
        );
    }
    /**
     * -----------------------------------------------------
     * Drone Security
     * -----------------------------------------------------
     */
    if (
        is_page('drone-security') ||
        is_page_template('page-drone-security.php')
    ) {
        wp_enqueue_style(
            'advent-drone-security',
            get_template_directory_uri() . '/assets/css/drone-security.css',
            array('advent-responsive'),
            '1.0.0'
        );
    }
    /**
     * -----------------------------------------------------
     * Bodyguard Services
     * -----------------------------------------------------
     */
    if (
        is_page('bodyguard-services') ||
        is_page_template('page-bodyguard-services.php')
    ) {
        wp_enqueue_style(
            'advent-bodyguard-services',
            get_template_directory_uri() . '/assets/css/bodyguard-services.css',
            array('advent-responsive'),
            '1.0.0'
        );
    }

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
        is_page_template('page-integrated-security-systems.php')
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
    /**
     * -----------------------------------------------------
     * Mobile Patrols Page
     * -----------------------------------------------------
     */
    if (
        is_page('mobile-patrols') ||
        is_page_template('page-mobile-patrols.php')
    ) {
        wp_enqueue_style(
            'advent-mobile-patrols',
            get_template_directory_uri() . '/assets/css/mobile-patrols.css',
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
        is_page('industries') ||
        is_page_template('page-industries.php')
    ) {
        wp_enqueue_style(
            'advent-industries',
            get_template_directory_uri() . '/assets/css/industry.css',
            array('advent-responsive'),
            '1.0.0'
        );
    }
    /**
     * -----------------------------------------------------
     * Aviation airports
     * -----------------------------------------------------
     */
    if (
        is_page('aviation-airports') ||
        is_page_template('page-aviation-airports.php')
    ) {
        wp_enqueue_style(
            'advent-aviation-airports',
            get_template_directory_uri() . '/assets/css/aviation-airports.css',
            array('advent-responsive'),
            '1.0.0'
        );
    }
    /**
     * -----------------------------------------------------
     * Manufacturing
     * -----------------------------------------------------
     */
    if (
        is_page('manufacturing') ||
        is_page_template('page-manufacturing.php')
    ) {
        wp_enqueue_style(
            'advent-manufacturing',
            get_template_directory_uri() . '/assets/css/manufacturing.css',
            array('advent-responsive'),
            '1.0.0'
        );
    }
    /**
     * -----------------------------------------------------
     * Critical infrastructure
     * -----------------------------------------------------
     */
    if (
        is_page('critical-infrastructure') ||
        is_page_template('page-critical-infrastructure.php')
    ) {
        wp_enqueue_style(
            'advent-critical-infrastructure',
            get_template_directory_uri() . '/assets/css/critical-infrastructure.css',
            array('advent-responsive'),
            '1.0.0'
        );
    }
    /**
     * -----------------------------------------------------
     * healthcare-security
     * -----------------------------------------------------
     */
    if (
        is_page('healthcare-security') ||
        is_page_template('page-healthcare-security.php')
    ) {
        wp_enqueue_style(
            'advent-healthcare-security',
            get_template_directory_uri() . '/assets/css/healthcare-security.css',
            array('advent-responsive'),
            '1.0.0'
        );
    }

    /**
     * -----------------------------------------------------
     * Privacy Policy
     * -----------------------------------------------------
     */
    if (
        is_page('privacy-policy') ||
        is_page_template('page-privacy-policy.php')
    ) {
        wp_enqueue_style(
            'advent-privacy-policy',
            get_template_directory_uri() . '/assets/css/privacy-policy.css',
            array('advent-responsive'),
            '1.0.0'
        );
    }

    /**
     * -----------------------------------------------------
     * Contact form
     * -----------------------------------------------------
     */
    if (
        is_page('contact') ||
        is_page_template('page-contact.php')
    ) {
        wp_enqueue_style(
            'advent-contact',
            get_template_directory_uri() . '/assets/css/contact.css',
            array('advent-responsive'),
            '1.0.0'
        );
    }

    /**
     * -----------------------------------------------------
     * About Page
     * -----------------------------------------------------
     */
    if (
        is_page('about') ||
        is_page_template('page-about.php')
    ) {
        wp_enqueue_style(
            'advent-about',
            get_template_directory_uri() . '/assets/css/about.css',
            array('advent-responsive'),
            '1.0.0'
        );
    }

    /**
     * ---------------------------------------------------------
     * News & Insights
     * ---------------------------------------------------------
     */
    if (
        is_post_type_archive('insight') ||
        is_singular('insight') ||
        is_tax('insight_category')
    ) {
        wp_enqueue_style(
            'advent-insights',
            get_template_directory_uri() . '/assets/css/insights.css',
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


/**
 * ---------------------------------------------------------
 * Insights Archive - Posts Per Page
 * ---------------------------------------------------------
 */
function advent_insights_archive_posts_per_page($query)
{
    if (
        !is_admin() &&
        $query->is_main_query() &&
        $query->is_post_type_archive('insight')
    ) {
        $query->set('posts_per_page', 10);
    }
}

add_action(
    'pre_get_posts',
    'advent_insights_archive_posts_per_page'
);

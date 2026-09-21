<?php

/**
 * Electronic Security
 * Temporary Child Pages Index
 */

get_header();
?>

<main class="home-page" style="margin-top: 50px;">

    <div class="container">

        <h1>Electronic Security</h1>

        <p>Select a service:</p>

        <ul>

            <li>
                <a href="<?php echo esc_url(home_url('/electronic-security/access-control/')); ?>">
                    Access Control
                </a>
            </li>

            <li>
                <a href="<?php echo esc_url(home_url('/electronic-security/license-plate-recognition/')); ?>">
                    License Plate Recognition
                </a>
            </li>

            <li>
                <a href="<?php echo esc_url(home_url('/electronic-security/cctv/')); ?>">
                    CCTV
                </a>
            </li>

            <li>
                <a href="<?php echo esc_url(home_url('/electronic-security/alarm-systems/')); ?>">
                    Alarm Systems
                </a>
            </li>

            <li>
                <a href="<?php echo esc_url(home_url('/electronic-security/cloud-monitoring/')); ?>">
                    Cloud Monitoring
                </a>
            </li>

            <li>
                <a href="<?php echo esc_url(home_url('/electronic-security/video-analytics/')); ?>">
                    Video Analytics
                </a>
            </li>

            <li>
                <a href="<?php echo esc_url(home_url('/electronic-security/boom-gates/')); ?>">
                    Boom Gates
                </a>
            </li>

            <li>
                <a href="<?php echo esc_url(home_url('/electronic-security/integrated-security-systems/')); ?>">
                    Integrated Security Systems
                </a>
            </li>
            <li>
                <a href="<?php echo esc_url(home_url('/electronic-security/visitor-management/')); ?>">
                    Visitor Management
                </a>
            </li>
            <li>
                <a href="<?php echo esc_url(home_url('/electronic-security/mobile-patrols/')); ?>">
                    Mobile Patrols
                </a>
            </li>

        </ul>

    </div>

</main>

<?php
get_footer();
?>
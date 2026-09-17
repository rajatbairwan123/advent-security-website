<?php

/**
 * Advent Security Footer
 */
?>

<footer class="site-footer">

    <!-- =====================================================
         FOOTER MAIN
    ====================================================== -->

    <div class="footer-main">

        <div class="container footer-grid">

            <!-- =================================================
                 SOCIAL LINKS
            ================================================== -->

            <div class="footer-social">

                <!-- Social Links -->
                <div class="footer-social-links">

                    <a
                        href="#"
                        class="footer-social-link"
                        aria-label="LinkedIn">
                        in
                    </a>

                    <a
                        href="#"
                        class="footer-social-link"
                        aria-label="Facebook">
                        f
                    </a>

                    <a
                        href="#"
                        class="footer-social-link"
                        aria-label="Instagram">
                        ◎
                    </a>

                </div>


                <!-- Footer Logo -->
                <div class="footer-logo">

                    <a
                        href="<?php echo esc_url(home_url('/')); ?>"
                        aria-label="Advent Security Home">

                        <!-- Light Theme Logo -->
                        <img
                            src="<?php echo esc_url(
                                        get_template_directory_uri() .
                                            '/assets/images/logo/Advent-Tagline-Inline Icon-Black.png'
                                    ); ?>"
                            alt="Advent Security"
                            class="footer-logo-light">

                        <!-- Dark Theme Logo -->
                        <img
                            src="<?php echo esc_url(
                                        get_template_directory_uri() .
                                            '/assets/images/logo/Advent-Tagline-Inline Icon-Black White.png'
                                    ); ?>"
                            alt="Advent Security"
                            class="footer-logo-dark">

                    </a>

                </div>

            </div>

            <!-- =================================================
                 THE ADVENT GROUP
            ================================================== -->

            <div class="footer-column">

                <h3>THE ADVENT GROUP</h3>

                <ul>
                    <li>
                        <a href="#">About Advent</a>
                    </li>

                    <li>
                        <a href="#">Our Businesses</a>
                    </li>

                    <li>
                        <a href="#">Our Partners</a>
                    </li>

                    <li>
                        <a href="#">Careers</a>
                    </li>

                    <li>
                        <a href="#">Leadership Team</a>
                    </li>
                </ul>

            </div>


            <!-- =================================================
                 SECURITY SERVICES
            ================================================== -->

            <div class="footer-column">

                <h3>SECURITY SERVICES</h3>

                <ul>
                    <li>
                        <a href="<?php echo esc_url(home_url('/security-guard-services/')); ?>">
                            Security Guard
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            Corporate Concierge
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            Electronic Security
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo esc_url(home_url('/security-consulting/')); ?>">
                            Security Consulting
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo esc_url(home_url('/alarm-monitoring-response/')); ?>">
                            Alarm Monitoring
                        </a>
                    </li>
                </ul>

            </div>


            <!-- =================================================
                 ELECTRONIC SECURITY
            ================================================== -->

            <div class="footer-column">

                <h3>ELECTRONIC SECURITY</h3>

                <ul>
                    <li>
                        <a href="#">
                            CCTV Systems
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            Access Control
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            Alarm Systems
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            Intercom Systems
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            Cloud Monitoring
                        </a>
                    </li>
                </ul>

            </div>


            <!-- =================================================
                 INDUSTRIES
            ================================================== -->

            <div class="footer-column">

                <h3>INDUSTRIES</h3>

                <ul>
                    <li>
                        <a href="#">Commercial</a>
                    </li>

                    <li>
                        <a href="#">Government</a>
                    </li>

                    <li>
                        <a href="#">Healthcare</a>
                    </li>

                    <li>
                        <a href="#">Retail</a>
                    </li>

                    <li>
                        <a href="#">Aviation</a>
                    </li>
                </ul>

            </div>


            <!-- =================================================
                 RESOURCES
            ================================================== -->

            <div class="footer-column">

                <h3>RESOURCES</h3>

                <ul>
                    <li>
                        <a href="#">News &amp; Insights</a>
                    </li>

                    <li>
                        <a href="#">Case Studies</a>
                    </li>

                    <li>
                        <a href="#">Brochures</a>
                    </li>

                    <li>
                        <a href="#">Downloads</a>
                    </li>

                    <li>
                        <a href="#">FAQs</a>
                    </li>
                </ul>

            </div>


            <!-- =================================================
                 QUICK CONTACT
            ================================================== -->

            <div class="footer-contact">

                <h3>QUICK CONTACT</h3>

                <a
                    href="#"
                    class="footer-location">
                    <span class="footer-contact-icon">⌖</span>
                    Our Locations
                </a>

                <a
                    href="tel:1800464166"
                    class="footer-phone">
                    <span class="footer-contact-icon">☎</span>
                    1800 464 166
                </a>

                <div class="footer-hours">
                    <span class="footer-contact-icon">▦</span>
                    <span>24/7 / 365 Days</span>
                </div>

            </div>

        </div>

    </div>


    <!-- =====================================================
         FOOTER BOTTOM
    ====================================================== -->

    <div class="footer-bottom">

        <div class="container footer-bottom-inner">

            <p>
                © <?php echo date('Y'); ?> Advent Security. All Rights Reserved.
            </p>


            <div class="footer-legal">

                <a href="#">
                    Privacy Policy
                </a>

                <a href="#">
                    Terms &amp; Conditions
                </a>

                <a href="#">
                    Website Policy
                </a>

                <a href="#">
                    Sitemap
                </a>

            </div>


            <!-- Back To Top -->

            <a
                href="#"
                class="footer-back-top"
                aria-label="Back to top">
                ↑
            </a>

        </div>

    </div>

</footer>


<?php wp_footer(); ?>

</body>

</html>
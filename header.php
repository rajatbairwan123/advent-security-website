<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo('charset'); ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Prevent theme flash on page load -->
    <script>
        (function() {
            try {
                var savedTheme = localStorage.getItem('adventTheme');

                if (savedTheme === 'dark') {
                    document.documentElement.classList.add('theme-dark');
                } else {
                    document.documentElement.classList.add('theme-light');
                }
            } catch (error) {
                document.documentElement.classList.add('theme-light');
            }
        })();
    </script>

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>


    <header class="site-header">

        <div class="container header-inner">


            <!-- Logo -->
            <div class="site-logo">

                <a href="<?php echo esc_url(home_url('/')); ?>" aria-label="Advent Security Home">

                    <!-- Light Theme Logo -->
                    <img
                        src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/Advent-Tagline-Inline Icon-Black.png'); ?>"
                        alt="Advent Security"
                        class="site-logo-light">

                    <!-- Dark Theme Logo -->
                    <img
                        src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/Advent-Tagline-Inline Icon-Black White.png'); ?>"
                        alt="Advent Security"
                        class="site-logo-dark">

                </a>

            </div>


            <!-- Navigation -->
            <nav class="main-navigation" aria-label="Primary Navigation">

                <ul>

                    <!-- <li>
                        <a href="#about">
                            About
                        </a>
                    </li> -->

                    <li>
                        <a href="<?php echo esc_url(
                                        home_url('/security-guard-services/')
                                    ); ?>">
                            Security Guard Services
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo esc_url(
                                        home_url('/corporate-concierge-services/')
                                    ); ?>">
                            Corporate Concierge
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo esc_url(
                                        home_url('/security-consulting/')
                                    ); ?>">
                            Security Consulting
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo esc_url(
                                        home_url('/electronic-security/')
                                    ); ?>">
                            Electronic Security
                        </a>
                    </li>

                    <!-- <li>
                        <a href="#contact">
                            Contact
                        </a>
                    </li> -->

                </ul>

            </nav>

            <!-- Header Actions -->
            <div class="header-actions">

                <!-- Quote Button -->

                <a
                    href="<?php echo esc_url(home_url('/contact/')); ?>"
                    class="quote-button">
                    REQUEST A QUOTE
                    <span>→</span>
                </a>


                <!-- Theme Switcher -->

                <button
                    type="button"
                    class="theme-toggle"
                    id="theme-toggle"
                    aria-label="Switch to dark mode"
                    aria-pressed="false"
                    title="Switch theme">

                    <span
                        class="theme-toggle-icon theme-icon-sun"
                        aria-hidden="true">

                        <svg
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.8">
                            <circle cx="12" cy="12" r="4"></circle>

                            <path d="M12 2v2.2M12 19.8V22M4.93 4.93l1.56 1.56M17.51 17.51l1.56 1.56M2 12h2.2M19.8 12H22M4.93 19.07l1.56-1.56M17.51 6.49l1.56-1.56"></path>
                        </svg>

                    </span>


                    <span
                        class="theme-toggle-icon theme-icon-moon"
                        aria-hidden="true">

                        <svg
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.8">
                            <path d="M20.2 15.4A8.5 8.5 0 0 1 8.6 3.8 8.6 8.6 0 1 0 20.2 15.4Z"></path>
                        </svg>

                    </span>

                </button>


                <!-- Mobile Menu Button -->

                <button
                    type="button"
                    class="mobile-menu-toggle"
                    aria-label="Toggle navigation"
                    aria-expanded="false">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>

            </div>

        </div>

    </header>
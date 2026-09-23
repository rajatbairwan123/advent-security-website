<?php

/**
 * About Advent Security
 *
 * Custom About page template.
 * Premium editorial layout using the existing Advent design system.
 */

get_header();
?>

<main class="about-page">

    <!-- =====================================================
         HERO
    ====================================================== -->

    <section class="security-hero about-hero">

        <div class="container-fluid px-0">

            <div class="row g-0 align-items-stretch">

                <div class="col-lg-6">

                    <div class="hero-content about-hero-content">

                        <div class="about-hero-inner">

                            <span class="eyebrow">
                                AUSTRALIAN OWNED · SINCE 1989
                            </span>

                            <h1>
                                Security built
                                <span>around trust.</span>
                            </h1>

                            <p>
                                Protecting people, property, and assets across
                                Australia with integrated security solutions built
                                on three decades of trust.
                            </p>

                            <div class="about-hero-meta" aria-label="Advent Security highlights">
                                <span>INTEGRATED SECURITY</span>
                                <span>FAMILY OPERATED</span>
                                <span>AUSTRALIA WIDE</span>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-lg-6">

                    <div class="hero-image about-hero-image">

                        <img
                            src="<?php echo esc_url(
                                        get_template_directory_uri() .
                                            '/assets/images/about-us/about-img-3.webp'
                                    ); ?>"
                            alt="Advent Security">

                        <div class="about-hero-image-label">
                            <span>ADVENT SECURITY</span>
                            <strong>Protecting what matters.</strong>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- =====================================================
         BRAND STATEMENT
    ====================================================== -->

    <section class="content-section about-introduction">

        <div class="container">

            <div class="about-introduction-content">

                <span class="eyebrow">OUR STORY</span>

                <p class="about-lead">
                    For over <span>three decades</span>, Advent Security has been a
                    family-operated business committed to delivering
                    <span>integrated security solutions</span> with vigilance,
                    integrity, and an unwavering focus on the people we protect.
                </p>

                <div class="about-introduction-image">

                    <img
                        src="<?php echo esc_url(
                                    get_template_directory_uri() .
                                        '/assets/images/about-us/about-img-7.webp'
                                ); ?>"
                        alt="Advent Security operations">

                </div>

            </div>

        </div>

    </section>


    <!-- =====================================================
         WHO WE ARE
    ====================================================== -->

    <section class="content-section about-who-we-are">

        <div class="container">

            <div class="about-section-marker">
                <span>WHO WE ARE</span>
            </div>

            <div class="about-who-grid">

                <div class="about-who-content">

                    <span class="eyebrow">
                        BUILT AROUND YOUR ENVIRONMENT
                    </span>

                    <h2>
                        Security built around
                        <span>your environment.</span>
                    </h2>

                    <p>
                        From small commercial projects to large industrial
                        operations, our team works to understand the specific
                        risks, people, assets and operational requirements of
                        each client.
                    </p>

                    <p>
                        We then develop practical security solutions designed
                        to support day-to-day operations while helping protect
                        people, property and business continuity.
                    </p>

                </div>


                <div class="about-who-image">

                    <img
                        src="<?php echo esc_url(
                                    get_template_directory_uri() .
                                        '/assets/images/about-us/about-img-5.webp'
                                ); ?>"
                        alt="Advent Security team supporting client operations">

                </div>

            </div>

        </div>

    </section>


    <!-- =====================================================
         KEY AREAS OF EXPERTISE
    ====================================================== -->

    <section class="content-section about-expertise">

        <div class="container">

            <div class="about-section-marker">
                <span>KEY AREAS OF EXPERTISE</span>
            </div>

            <div class="about-expertise-grid">

                <div class="about-expertise-image">

                    <img
                        src="<?php echo esc_url(
                                    get_template_directory_uri() .
                                        '/assets/images/about-us/about-img-4.webp'
                                ); ?>"
                        alt="Advent Security integrated security environment">

                </div>


                <div class="about-expertise-content">

                    <span class="eyebrow">
                        INTEGRATED CAPABILITY
                    </span>

                    <h2>
                        Integrated security
                        <span>across every industry.</span>
                    </h2>

                    <!-- <div class="about-stat-grid">

                        <div class="about-stat">
                            <strong>1,000<span>+</span></strong>
                            <span>Security Professionals</span>
                        </div>

                        <div class="about-stat">
                            <strong>500<span>+</span></strong>
                            <span>Sites Protected</span>
                        </div>

                        <div class="about-stat">
                            <strong>500<span>+</span></strong>
                            <span>Sites Supported</span>
                        </div>

                        <div class="about-stat">
                            <strong>3<span>+</span></strong>
                            <span>Decades of Experience</span>
                        </div>

                    </div> -->

                    <div class="about-trust-strip" aria-label="Advent Security credentials">

                        <div class="about-trust-item">
                            <strong>36+ YEARS</strong>
                            <span>Established experience</span>
                        </div>

                        <div class="about-trust-item">
                            <strong>AUSTRALIAN-OWNED</strong>
                            <span>Family business</span>
                        </div>

                        <div class="about-trust-item">
                            <strong>ASIAL</strong>
                            <span>Platinum Level member</span>
                        </div>

                        <div class="about-trust-item">
                            <strong>ISO 27001:2022</strong>
                            <span>Information security</span>
                        </div>

                    </div>

                </div>

            </div>


            <!-- =================================================
                 INDUSTRIES
            ================================================== -->

            <div class="about-industries">

                <div class="about-industries-heading">
                    <span class="eyebrow">INDUSTRIES WE SUPPORT</span>
                    <p>
                        Security solutions shaped around the environments,
                        people and operational demands of our clients.
                    </p>
                </div>

                <div class="about-industry-links">

                    <a href="<?php echo esc_url(home_url('/industries/logistics/')); ?>">
                        LOGISTICS <span aria-hidden="true">↗</span>
                    </a>

                    <a href="<?php echo esc_url(home_url('/industries/corporate/')); ?>">
                        CORPORATE <span aria-hidden="true">↗</span>
                    </a>

                    <a href="<?php echo esc_url(home_url('/industries/healthcare/')); ?>">
                        HEALTHCARE <span aria-hidden="true">↗</span>
                    </a>

                    <a href="<?php echo esc_url(home_url('/industries/government/')); ?>">
                        GOVERNMENT <span aria-hidden="true">↗</span>
                    </a>

                    <a href="<?php echo esc_url(home_url('/industries/retail/')); ?>">
                        RETAIL <span aria-hidden="true">↗</span>
                    </a>

                    <a href="<?php echo esc_url(home_url('/industries/construction/')); ?>">
                        CONSTRUCTION <span aria-hidden="true">↗</span>
                    </a>

                    <a href="<?php echo esc_url(home_url('/industries/aviation/')); ?>">
                        AVIATION <span aria-hidden="true">↗</span>
                    </a>

                    <a href="<?php echo esc_url(home_url('/industries/maritime/')); ?>">
                        MARITIME <span aria-hidden="true">↗</span>
                    </a>

                </div>

            </div>

        </div>

    </section>


    <!-- =====================================================
         INTEGRATED SECURITY CAPABILITY
    ====================================================== -->

    <section class="content-section about-capability">

        <div class="container">

            <div class="about-section-marker">
                <span>ONE INTEGRATED PARTNER</span>
            </div>

            <div class="about-capability-grid">

                <div class="about-capability-content">

                    <span class="eyebrow">
                        INTEGRATED SECURITY CAPABILITY
                    </span>

                    <h2>
                        One partner.
                        <span>Complete security coverage.</span>
                    </h2>

                    <p>
                        From manned guarding and electronic security to CCTV,
                        access control, alarm monitoring, and risk management —
                        Advent delivers a fully integrated approach that
                        simplifies your security operations while raising
                        standards.
                    </p>

                    <div class="about-capability-links">

                        <a href="<?php echo esc_url(home_url('/security-guard-services/')); ?>">
                            <span aria-hidden="true">↗</span>
                            Security Personnel
                        </a>

                        <a href="<?php echo esc_url(home_url('/electronic-security/')); ?>">
                            <span aria-hidden="true">↗</span>
                            Electronic Security
                        </a>

                        <a href="<?php echo esc_url(home_url('/cctv-surveillance-systems/')); ?>">
                            <span aria-hidden="true">↗</span>
                            CCTV Monitoring
                        </a>

                        <a href="<?php echo esc_url(home_url('/access-control-systems/')); ?>">
                            <span aria-hidden="true">↗</span>
                            Access Control
                        </a>

                        <a href="<?php echo esc_url(home_url('/alarm-monitoring/')); ?>">
                            <span aria-hidden="true">↗</span>
                            Alarm Monitoring
                        </a>

                        <a href="<?php echo esc_url(home_url('/security-consulting/')); ?>">
                            <span aria-hidden="true">↗</span>
                            Risk Management
                        </a>

                    </div>

                </div>


                <div class="about-capability-image">

                    <img
                        src="<?php echo esc_url(
                                    get_template_directory_uri() .
                                        '/assets/images/about-us/about-img-2.webp'
                                ); ?>"
                        alt="Advent Security personnel">

                </div>

            </div>

        </div>

    </section>


    <!-- =====================================================
         FINAL CTA
    ====================================================== -->

    <section class="assessment-cta about-final-cta">

        <div class="container">

            <div class="cta-inner">

                <div class="about-final-content">

                    <span class="eyebrow">
                        GET STARTED
                    </span>

                    <h2>
                        Request a Security
                        <span>Consultation</span>
                    </h2>

                    <p>
                        Let our team assess your security needs and design a
                        tailored solution that protects what matters most.
                    </p>

                </div>

                <a
                    href="<?php echo esc_url(home_url('/contact/')); ?>"
                    class="advent-btn advent-btn-dark">
                    GET STARTED
                    <span class="btn-arrow" aria-hidden="true">→</span>
                </a>

            </div>

        </div>

    </section>

</main>

<?php
get_footer();
?>
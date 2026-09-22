<?php

/**
 * Template Name: Contact
 * Template Post Type: page
 *
 * Advent Security — Contact Page
 */

get_header();
?>

<main class="contact-page">


    <!-- =====================================================
         HERO
    ====================================================== -->

    <section class="security-hero contact-hero">

        <div class="container-fluid px-0">

            <div class="row g-0 align-items-stretch">

                <!-- Hero Content -->
                <div class="col-lg-6">

                    <div class="hero-content">

                        <div class="hero-inner">

                            <span class="eyebrow">
                                CONTACT
                            </span>

                            <h1>
                                Let's discuss your
                                <span>security requirements.</span>
                            </h1>

                            <p>
                                Our team is here to help. Get in touch to
                                discuss your property, people and security
                                needs and find the right solution for your
                                environment.
                            </p>

                        </div>

                    </div>

                </div>


                <!-- Hero Image -->
                <div class="col-lg-6">

                    <div class="hero-image contact-hero-image">

                        <img
                            src="<?php echo esc_url(
                                        get_template_directory_uri() .
                                            '/assets/images/contact-form/contact-hero.webp'
                                    ); ?>"
                            alt="Advent Security officer providing security services">

                    </div>

                </div>

            </div>

        </div>

    </section>



    <!-- =====================================================
         MAKE AN ENQUIRY
    ====================================================== -->

    <section class="content-section contact-enquiry-section">

        <div class="container">

            <div class="contact-enquiry-grid">


                <!-- LEFT CONTENT -->
                <div class="contact-enquiry-intro">

                    <span class="eyebrow">
                        MAKE AN ENQUIRY
                    </span>

                    <h2>
                        Get in touch
                        <span>with our team.</span>
                    </h2>

                    <p>
                        Complete the form and an Advent Security specialist
                        will contact you to discuss your requirements.
                    </p>


                    <!-- Enquiry Highlights -->

                    <div class="contact-enquiry-points">

                        <div class="contact-enquiry-point">

                            <div class="contact-enquiry-point-icon" aria-hidden="true">
                                <i class="bi bi-chat-dots"></i>
                            </div>

                            <div>
                                <strong>
                                    DISCUSS YOUR REQUIREMENTS
                                </strong>

                                <p>
                                    Talk to our team about your property,
                                    people and security needs.
                                </p>
                            </div>

                        </div>


                        <div class="contact-enquiry-point">

                            <div class="contact-enquiry-point-icon" aria-hidden="true">
                                <i class="bi bi-shield-check"></i>
                            </div>

                            <div>
                                <strong>
                                    TAILORED SECURITY SOLUTIONS
                                </strong>

                                <p>
                                    We'll help determine the most appropriate
                                    approach for your environment.
                                </p>
                            </div>

                        </div>


                        <div class="contact-enquiry-point">

                            <div class="contact-enquiry-point-icon" aria-hidden="true">
                                <i class="bi bi-geo-alt"></i>
                            </div>

                            <div>
                                <strong>
                                    AUSTRALIA-WIDE SUPPORT
                                </strong>

                                <p>
                                    Local teams supporting clients across
                                    major locations.
                                </p>
                            </div>

                        </div>

                    </div>

                </div>



                <!-- RIGHT FORM -->
                <div class="contact-enquiry-form">

                    <form
                        class="advent-contact-form"
                        method="post"
                        action="">

                        <!-- First Name / Last Name -->

                        <div class="contact-form-row">

                            <div class="contact-form-field">

                                <label for="first_name">
                                    First Name <span>*</span>
                                </label>

                                <input
                                    type="text"
                                    id="first_name"
                                    name="first_name"
                                    autocomplete="given-name"
                                    required>

                            </div>


                            <div class="contact-form-field">

                                <label for="last_name">
                                    Last Name
                                </label>

                                <input
                                    type="text"
                                    id="last_name"
                                    name="last_name"
                                    autocomplete="family-name">

                            </div>

                        </div>


                        <!-- Email -->

                        <div class="contact-form-field">

                            <label for="email">
                                Email Address <span>*</span>
                            </label>

                            <input
                                type="email"
                                id="email"
                                name="email"
                                autocomplete="email"
                                required>

                        </div>


                        <!-- Phone -->

                        <div class="contact-form-field">

                            <label for="phone">
                                Phone Number <span>*</span>
                            </label>

                            <input
                                type="tel"
                                id="phone"
                                name="phone"
                                autocomplete="tel"
                                required>

                        </div>


                        <!-- Postcode -->

                        <div class="contact-form-field">

                            <label for="postcode">
                                Postcode <span>*</span>
                            </label>

                            <input
                                type="text"
                                id="postcode"
                                name="postcode"
                                autocomplete="postal-code"
                                inputmode="numeric"
                                required>

                        </div>


                        <!-- Message -->

                        <div class="contact-form-field">

                            <label for="message">
                                Message
                            </label>

                            <textarea
                                id="message"
                                name="message"
                                rows="7"></textarea>

                        </div>


                        <!-- Submit -->

                        <div class="contact-form-submit">

                            <button
                                type="submit"
                                class="advent-btn">
                                SEND ENQUIRY

                                <span aria-hidden="true">
                                    →
                                </span>

                            </button>

                            <small>
                                * Required fields
                            </small>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </section>



    <!-- =====================================================
     OUR LOCATIONS
    ====================================================== -->

    <section class="content-section contact-locations-section">

        <div class="container">

            <!-- Section Heading -->
            <div class="contact-section-heading">

                <span class="eyebrow">
                    OUR LOCATIONS
                </span>

                <h2>
                    Offices across
                    <span>Australia.</span>
                </h2>

                <p>
                    Advent Security has offices in major cities across Australia,
                    supporting clients with local teams and national capability.
                </p>

            </div>


            <!-- =================================================
             NATIONAL COVERAGE MAP
            ================================================== -->

            <div class="contact-national-coverage">

                <div class="contact-national-content">

                    <span class="eyebrow">
                        NATIONAL COVERAGE
                    </span>

                    <h2>
                        Local teams.
                        <span>A safer Australia.</span>
                    </h2>

                    <p>
                        With offices in key locations and support across regional
                        areas, Advent Security provides consistent service and
                        national capability.
                    </p>

                </div>


                <div class="contact-national-map">

                    <img
                        src="<?php echo esc_url(
                                    get_template_directory_uri() .
                                        '/assets/images/contact-form/australia-locations-map.webp'
                                ); ?>"
                        alt="Advent Security office locations across Australia">

                </div>

            </div>


            <!-- =================================================
             OFFICE LOCATIONS
            ================================================== -->

            <div class="contact-location-grid">


                <!-- Melbourne -->

                <article class="contact-location-card">

                    <div class="contact-location-card-top">

                        <span
                            class="contact-location-icon"
                            aria-hidden="true">
                            ●
                        </span>

                        <h3>
                            MELBOURNE
                        </h3>

                    </div>

                    <address>
                        41 Commercial Drive<br>
                        Thomastown, VIC 3074
                    </address>

                    <p class="contact-location-phone">
                        <strong>Phone:</strong>

                        <a href="tel:0394641666">
                            (03) 9464 1666
                        </a>
                    </p>

                    <a
                        href="https://www.google.com/maps/place/Advent+Security+Services+National+Head+Office/@-37.689758,145.041904,17z/data=!4m14!1m7!3m6!1s0x6ad64f36256ee901:0x88f68d0d259d7722!2sAdvent+Security+Services+National+Head+Office!8m2!3d-37.689758!4d145.041904!16s%2Fg%2F1pwfvyyj5!3m5!1s0x6ad64f36256ee901:0x88f68d0d259d7722!8m2!3d-37.689758!4d145.041904!16s%2Fg%2F1pwfvyyj5?hl=en&entry=ttu&g_ep=EgoyMDI2MDkxNi4wIKXMDSoASAFQAw%3D%3D"
                        class="contact-location-map-link"
                        target="_blank"
                        rel="noopener noreferrer">
                        VIEW IN GOOGLE MAPS
                        <span aria-hidden="true">→</span>
                    </a>

                </article>


                <!-- Sydney -->

                <article class="contact-location-card">

                    <div class="contact-location-card-top">

                        <span
                            class="contact-location-icon"
                            aria-hidden="true">
                            ●
                        </span>

                        <h3>
                            SYDNEY
                        </h3>

                    </div>

                    <address>
                        4/157 Inglewood Place<br>
                        Narellan, NSW 2567
                    </address>

                    <p class="contact-location-phone">
                        <strong>Phone:</strong>

                        <a href="tel:0283692944">
                            (02) 8369 2944
                        </a>
                    </p>

                    <a
                        href="https://www.google.com/maps/place/u49%2F5+Inglewood+Pl,+Baulkham+Hills+NSW+2153/@-33.734982,150.957212,16z/data=!4m5!3m4!1s0x6b12a1fcf911bd89:0xab188b823e81bab2!8m2!3d-33.7353193!4d150.9576821?hl=en&entry=ttu&g_ep=EgoyMDI2MDkxNi4wIKXMDSoASAFQAw%3D%3D"
                        class="contact-location-map-link"
                        target="_blank"
                        rel="noopener noreferrer">
                        VIEW IN GOOGLE MAPS
                        <span aria-hidden="true">→</span>
                    </a>

                </article>


                <!-- Brisbane -->

                <article class="contact-location-card">

                    <div class="contact-location-card-top">

                        <span
                            class="contact-location-icon"
                            aria-hidden="true">
                            ●
                        </span>

                        <h3>
                            BRISBANE
                        </h3>

                    </div>

                    <address>
                        10/33 Expo Court<br>
                        Ashmore, QLD 4214
                    </address>

                    <p class="contact-location-phone">
                        <strong>Phone:</strong>

                        <a href="tel:0740441666">
                            (07) 4044 1666
                        </a>
                    </p>

                    <a
                        href="https://www.google.com/maps/place/Level+10+Unit+1003%2F303+Coronation+Dr,+Milton+QLD+4064/@-27.4738112,153.0038585,17z/data=!3m1!4b1!4m5!3m4!1s0x6b9150a4c5ce4a1d:0xc33fb832ca26d0d4!8m2!3d-27.4738112!4d153.0038585?hl=en&entry=ttu&g_ep=EgoyMDI2MDkxNi4wIKXMDSoASAFQAw%3D%3D"
                        class="contact-location-map-link"
                        target="_blank"
                        rel="noopener noreferrer">
                        VIEW IN GOOGLE MAPS
                        <span aria-hidden="true">→</span>
                    </a>

                </article>


                <!-- Gold Coast -->

                <article class="contact-location-card">

                    <div class="contact-location-card-top">

                        <span
                            class="contact-location-icon"
                            aria-hidden="true">
                            ●
                        </span>

                        <h3>
                            GOLD COAST
                        </h3>

                    </div>

                    <address>
                        7/99 West Burleigh Road<br>
                        Burleigh Heads, QLD 4220
                    </address>

                    <p class="contact-location-phone">
                        <strong>Phone:</strong>

                        <a href="tel:0756081666">
                            (07) 5608 1666
                        </a>
                    </p>

                    <a
                        href="https://www.google.com/maps/place/7%2F99+W+Burleigh+Rd,+Burleigh+Heads+QLD+4220/@-28.0933083,153.4427413,17z/data=!3m1!4b1!4m6!3m5!1s0x6b9103a1da0542c7:0x395f0b7551c78063!8m2!3d-28.0933083!4d153.4427413!16s%2Fg%2F11qpkhkrmf?hl=en&entry=ttu&g_ep=EgoyMDI2MDkxNi4wIKXMDSoASAFQAw%3D%3D"
                        class="contact-location-map-link"
                        target="_blank"
                        rel="noopener noreferrer">
                        VIEW IN GOOGLE MAPS
                        <span aria-hidden="true">→</span>
                    </a>

                </article>


                <!-- Perth -->

                <article class="contact-location-card">

                    <div class="contact-location-card-top">

                        <span
                            class="contact-location-icon"
                            aria-hidden="true">
                            ●
                        </span>

                        <h3>
                            PERTH
                        </h3>

                    </div>

                    <address>
                        Level 2, 14 St Georges Terrace<br>
                        Perth, WA 6000
                    </address>

                    <p class="contact-location-phone">
                        <strong>Phone:</strong>

                        <a href="tel:0892041666">
                            (08) 9204 1666
                        </a>
                    </p>

                    <a
                        href="https://www.google.com/maps/place/140+St+Georges+Terrace,+Perth+WA+6000/@-31.954352,115.8564539,17z/data=!3m1!4b1!4m6!3m5!1s0x2a32bad5b711261f:0x12c77c0f1610d087!8m2!3d-31.954352!4d115.8564539!16s%2Fg%2F11c466pb_t?hl=en&entry=ttu&g_ep=EgoyMDI2MDkxNi4wIKXMDSoASAFQAw%3D%3D"
                        class="contact-location-map-link"
                        target="_blank"
                        rel="noopener noreferrer">
                        VIEW IN GOOGLE MAPS
                        <span aria-hidden="true">→</span>
                    </a>

                </article>


                <!-- Adelaide -->

                <article class="contact-location-card">

                    <div class="contact-location-card-top">

                        <span
                            class="contact-location-icon"
                            aria-hidden="true">
                            ●
                        </span>

                        <h3>
                            ADELAIDE
                        </h3>

                    </div>

                    <address>
                        Level 30/91 King William Street<br>
                        Adelaide, SA 5000
                    </address>

                    <p class="contact-location-phone">
                        <strong>Phone:</strong>

                        <a href="tel:1800464166">
                            1800 464 166
                        </a>
                    </p>

                    <a
                        href="https://www.google.com/maps/place/21+Currie+St,+Adelaide+SA+5000/@-34.9248206,138.5986583,17z/data=!3m1!4b1!4m6!3m5!1s0x6ab0cf282172ab7d:0x74799e00541cf166!8m2!3d-34.9248206!4d138.5986583!16zL20vMGJzNDJn?hl=en&entry=ttu&g_ep=EgoyMDI2MDkxNi4wIKXMDSoASAFQAw%3D%3D"
                        class="contact-location-map-link"
                        target="_blank"
                        rel="noopener noreferrer">
                        VIEW IN GOOGLE MAPS
                        <span aria-hidden="true">→</span>
                    </a>

                </article>


                <!-- Tasmania -->

                <article class="contact-location-card">

                    <div class="contact-location-card-top">

                        <span
                            class="contact-location-icon"
                            aria-hidden="true">
                            ●
                        </span>

                        <h3>
                            TASMANIA
                        </h3>

                    </div>

                    <address>
                        36 East Parade<br>
                        Glenorchy, TAS 7010
                    </address>

                    <p class="contact-location-phone">
                        <strong>Phone:</strong>

                        <a href="tel:0362741666">
                            (03) 6274 1666
                        </a>
                    </p>

                    <a
                        href="https://www.google.com/maps/place/35+E+Parade,+Deloraine+TAS+7304/@-41.5304996,146.6529333,17z/data=!3m1!4b1!4m6!3m5!1s0xaa7a655942d47977:0x6c02dd1d819fa0db!8m2!3d-41.5304996!4d146.6529333!16s%2Fg%2F11c291gj5f?hl=en&entry=ttu&g_ep=EgoyMDI2MDkxNi4wIKXMDSoASAFQAw%3D%3D"
                        class="contact-location-map-link"
                        target="_blank"
                        rel="noopener noreferrer">
                        VIEW IN GOOGLE MAPS
                        <span aria-hidden="true">→</span>
                    </a>

                </article>

            </div>

        </div>

    </section>


    <!-- =====================================================
         PROFESSIONAL SECURITY SERVICES
    ====================================================== -->

    <section class="content-section contact-services-section">

        <div class="container">

            <div class="contact-services-grid">


                <!-- Services -->

                <div class="contact-services-content">

                    <span class="eyebrow">
                        PROFESSIONAL SECURITY SERVICES
                    </span>

                    <h2>
                        Professional security services
                        <span>across Australia.</span>
                    </h2>

                    <p>
                        Advent Security provides integrated security solutions
                        for commercial, industrial, corporate, retail and
                        residential environments across Australia and
                        New Zealand.
                    </p>

                    <p>
                        Our services include:
                    </p>


                    <div class="contact-services-list">

                        <a href="<?php echo esc_url(home_url('/security-guard-services/')); ?>">
                            <span>Security Guard Services</span>
                            <span aria-hidden="true">→</span>
                        </a>

                        <a href="<?php echo esc_url(home_url('/cctv-surveillance-systems/')); ?>">
                            <span>CCTV &amp; Surveillance Systems</span>
                            <span aria-hidden="true">→</span>
                        </a>

                        <a href="<?php echo esc_url(home_url('/alarm-monitoring/')); ?>">
                            <span>Alarm Monitoring</span>
                            <span aria-hidden="true">→</span>
                        </a>

                        <a href="<?php echo esc_url(home_url('/access-control-systems/')); ?>">
                            <span>Access Control Systems</span>
                            <span aria-hidden="true">→</span>
                        </a>

                        <a href="<?php echo esc_url(home_url('/electronic-security-solutions/')); ?>">
                            <span>Electronic Security Solutions</span>
                            <span aria-hidden="true">→</span>
                        </a>

                    </div>


                    <p>
                        Whether you require on-site security personnel,
                        CCTV installation, alarm monitoring or integrated
                        security solutions, our team is ready to assist.
                    </p>

                </div>



                <!-- Consultation -->

                <div class="contact-consultation">

                    <span class="eyebrow">
                        REQUEST A SECURITY CONSULTATION
                    </span>

                    <h2>
                        Request a security
                        <span>consultation.</span>
                    </h2>

                    <p>
                        Speak with the Advent Security team today to discuss
                        tailored security solutions for your business or
                        property.
                    </p>


                    <a
                        href="tel:1800464166"
                        class="contact-phone-link">

                        <span
                            class="contact-phone-icon"
                            aria-hidden="true">
                            ☎
                        </span>

                        <span>
                            1800 464 166
                        </span>

                    </a>

                    <div class="contact-proof-grid">

                        <div class="contact-proof-item">
                            <strong>36+ YEARS</strong>
                            <span>Established experience</span>
                        </div>

                        <div class="contact-proof-item">
                            <strong>AUSTRALIAN-OWNED</strong>
                            <span>Family business</span>
                        </div>

                        <div class="contact-proof-item">
                            <strong>ASIAL</strong>
                            <span>Platinum Level member</span>
                        </div>

                        <div class="contact-proof-item">
                            <strong>ISO 27001:2022</strong>
                            <span>Information security</span>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>



    <!-- =====================================================
         FINAL CTA
    ====================================================== -->

    <section class="assessment-cta contact-final-cta">

        <div class="container">

            <div class="cta-inner">

                <div>

                    <span class="eyebrow">
                        SECURITY SOLUTIONS NATIONWIDE
                    </span>

                    <h2>
                        A safer tomorrow.
                        <span>Together.</span>
                    </h2>

                </div>


                <a
                    href="<?php echo esc_url(home_url('/contact/')); ?>"
                    class="advent-btn-dark">
                    CONTACT ADVENT SECURITY

                    <span aria-hidden="true">
                        →
                    </span>
                </a>

            </div>

        </div>

    </section>

</main>


<?php get_footer(); ?>
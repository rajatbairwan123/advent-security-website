<?php get_header(); ?>

<?php
/*
 * TL APPROVAL PROTOTYPE — SECURITY GUARD SERVICES
 *
 * Proposed common page flow:
 * Hero → Services → Trust → Process → Industries → Why Advent
 * → Related Services → FAQ → CTA
 *
 * This file is for TL review before applying the structure to the
 * remaining service pages.
 */
?>
<main class="security-page">

    <!-- =========================================
         HERO
    ========================================== -->

    <section class="security-hero">

        <div class="container-fluid">
            <div class="row g-0">

                <div class="col-lg-5 d-flex align-items-center">
                    <div class="hero-content w-100">
                        <div class="hero-inner">

                            <span class="eyebrow">
                                SECURITY GUARD SERVICES
                            </span>

                            <h1>
                                Professional Security Guard<br>
                                Services Across<br>
                                <span>Australia &amp; New Zealand</span>
                            </h1>

                            <p>
                                Professional security personnel for businesses, workplaces, construction sites,
                                retail environments, healthcare facilities and events. Services are
                                planned around your site, operating requirements and security risks.
                            </p>

                            <div class="hero-buttons">
                                <a href="#quote" class="advent-btn advent-btn-primary">
                                    <span>REQUEST A QUOTE</span>
                                    <span class="btn-arrow">→</span>
                                </a>

                                <a href="#contact" class="advent-btn advent-btn-outline">
                                    <span>TALK TO OUR TEAM</span>
                                    <span class="btn-arrow">→</span>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="hero-image">
                        <img
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/security-guard-services/security-guard-hero.webp"
                            alt="Professional security guard providing security services"
                            width="1600"
                            height="1000">
                    </div>
                </div>

            </div>
        </div>

    </section>

    <!-- =========================================================
     PROOF / CREDIBILITY STRIP
    ========================================================= -->
    <section class="integrated-proof">
        <div class="container-fluid integrated-proof-grid">

            <div class="integrated-proof-item">
                <span class="integrated-proof-label">
                    36+ YEARS
                </span>

                <strong>
                    Established experience
                </strong>
            </div>

            <div class="integrated-proof-item">
                <span class="integrated-proof-label">
                    AUSTRALIAN-OWNED
                </span>

                <strong>
                    Family business
                </strong>
            </div>

            <div class="integrated-proof-item">
                <span class="integrated-proof-label">
                    ASIAL
                </span>

                <strong>
                    Platinum Level member
                </strong>
            </div>

            <div class="integrated-proof-item">
                <span class="integrated-proof-label">
                    ISO 27001:2022
                </span>

                <strong>
                    Information security
                </strong>
            </div>

        </div>
    </section>


    <!-- =========================================
         QUALIFIED SECURITY PERSONNEL
    ========================================== -->

    <section class="content-section qualified-section">

        <div class="container">

            <!-- Breadcrumb -->
            <!-- <div class="security-breadcrumb">

                <a href="<?php //echo esc_url(home_url('/')); 
                            ?>">
                    Home
                </a>

                <span> / </span>

                <span>
                    Security Guard Services
                </span>

            </div> -->

            <div class="row align-items-center g-5">

                <div class="col-lg-6">

                    <div class="section-content">

                        <span class="eyebrow">
                            QUALIFIED SECURITY PERSONNEL
                        </span>

                        <h2>
                            Professional security<br>
                            starts with the right people.
                        </h2>

                        <p>
                            Security guards are often the first point of contact for employees, visitors,
                            tenants and customers. Effective security therefore requires more
                            than a visible presence. Personnel need to understand the site,
                            communicate professionally and know how to respond when
                            circumstances change.
                        </p>

                        <p>
                            Advent Security provides screened and trained security
                            personnel selected for the requirements of the role, with
                            an emphasis on professionalism, communication, reliability
                            and customer service.
                        </p>

                        <a href="#services" class="advent-btn advent-btn-outline">
                            <span>EXPLORE SECURITY SERVICES</span>
                            <span class="btn-arrow">→</span>
                        </a>

                    </div>

                </div>

                <div class="col-lg-6">

                    <div class="feature-list">

                        <div class="feature-item">
                            <span>Screened and trained personnel</span>
                        </div>

                        <div class="feature-item">
                            <span>Professional presentation and communication</span>
                        </div>

                        <div class="feature-item">
                            <span>Site-aware and customer-focused service</span>
                        </div>

                        <div class="feature-item">
                            <span>Security reporting and incident awareness</span>
                        </div>

                        <div class="feature-item">
                            <span>Coverage across major Australian locations</span>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- =========================================
         WHAT OUR SECURITY GUARDS DO
    ========================================== -->

    <section class="content-section service-highlight" id="services">

        <div class="container">

            <div class="row align-items-center g-5">

                <div class="col-lg-6">

                    <div class="image-placeholder illustration-placeholder">
                        <img
                            src="<?php echo esc_url(
                                        get_template_directory_uri() .
                                            '/assets/images/security-guard-services/Advent-Security-Entrance-Patrol.webp'
                                    ); ?>"
                            alt="Professional security guard providing site security services">
                    </div>

                </div>

                <div class="col-lg-6">

                    <div class="section-content">

                        <span class="eyebrow">
                            PROFESSIONAL SECURITY GUARD SERVICES
                        </span>

                        <h2>
                            Security built around<br>
                            your site.
                        </h2>

                        <p>
                            A security guard's role depends on the environment, risk
                            profile and responsibilities agreed with the client.
                            Our personnel can support day-to-day site security while
                            providing a professional point of contact for staff,
                            visitors, customers and contractors.
                        </p>

                        <ul class="check-list">
                            <li>Static security guarding and site presence</li>
                            <li>Mobile patrols and alarm response</li>
                            <li>Access, visitor and site monitoring</li>
                            <li>Control room and security monitoring support</li>
                            <li>Concierge and front-of-house security</li>
                            <li>Event security and crowd management</li>
                        </ul>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- =========================================
         SECURITY STRATEGY
    ========================================== -->

    <section class="content-section track-record">

        <div class="container">

            <div class="row align-items-center g-5">

                <div class="col-lg-6">

                    <div class="section-content">

                        <span class="eyebrow">
                            SECURITY ASSESSMENT &amp; PLANNING
                        </span>

                        <h2>
                            Start with the site, not a standard<br>
                            security package.
                        </h2>

                        <p>
                            Effective security starts with understanding how a site
                            operates. Advent Security works with clients to understand
                            their environment, identify practical security requirements
                            and establish procedures that fit the way people, assets
                            and visitors move through the site.
                        </p>

                        <p>
                            Requirements can vary significantly between a corporate office, construction
                            site, retail environment, healthcare facility or logistics operation.
                            The security service should reflect those differences rather than
                            applying the same approach everywhere.
                        </p>

                        <a href="#quote" class="advent-btn advent-btn-outline">
                            <span>REQUEST A SECURITY ASSESSMENT</span>
                            <span class="btn-arrow">→</span>
                        </a>

                    </div>

                </div>

                <div class="col-lg-6">

                    <div class="image-placeholder wide-placeholder">
                        <img
                            src="<?php echo esc_url(
                                        get_template_directory_uri() .
                                            '/assets/images/security-guard-services/Corporate-Security-Patrol-in-Modern-Lobby.webp'
                                    ); ?>"
                            alt="Security personnel supporting corporate site security">
                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- =========================================
         SECURITY STRATEGIES
    ========================================== -->

    <section class="content-section training-section">

        <div class="container">

            <div class="row align-items-center g-5">

                <div class="col-lg-6">

                    <div class="section-content">

                        <span class="eyebrow">
                            INTEGRATED SECURITY
                        </span>

                        <h2>
                            People, procedures and technology<br>
                            working together.
                        </h2>

                        <p>
                            Security requirements can extend beyond guarding alone. Where appropriate,
                            Advent Security can combine security personnel with electronic security systems,
                            monitoring and agreed site procedures.
                        </p>

                        <p>
                            Depending on the site, this can support access management, CCTV monitoring,
                            alarm response, incident reporting and day-to-day security operations.
                        </p>

                    </div>

                </div>

                <div class="col-lg-6">

                    <div class="feature-list">

                        <div class="feature-item">
                            <span>Security personnel and site patrols</span>
                        </div>

                        <div class="feature-item">
                            <span>CCTV and surveillance monitoring</span>
                        </div>

                        <div class="feature-item">
                            <span>Alarm monitoring and response</span>
                        </div>

                        <div class="feature-item">
                            <span>Access control and visitor management</span>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- =========================================
         SECURITY SERVICES
    ========================================== -->

    <section class="content-section solutions-section">

        <div class="container">

            <div class="row align-items-center g-5">

                <div class="col-lg-6">

                    <div class="section-content">

                        <span class="eyebrow">
                            SECURITY GUARD SERVICES
                        </span>

                        <h2>
                            Security guard services for<br>
                            different environments.
                        </h2>

                        <p>
                            Security requirements vary by environment, operating hours, site layout and risk profile.
                            Advent can structure security personnel and duties around the requirements
                            of each site.
                        </p>

                    </div>

                </div>

                <div class="col-lg-6">

                    <div class="service-cards">

                        <a href="#" class="service-card">
                            <!-- <span class="card-number">01</span> -->
                            <h3>
                                Construction<br>
                                Site Security
                            </h3>
                            <span class="card-arrow">↗</span>
                        </a>

                        <a href="#" class="service-card">
                            <!-- <span class="card-number">02</span> -->
                            <h3>
                                Event<br>
                                Security
                            </h3>
                            <span class="card-arrow">↗</span>
                        </a>

                        <a href="#" class="service-card">
                            <!-- <span class="card-number">03</span> -->
                            <h3>
                                Retail &amp; Shopping<br>
                                Centre Security
                            </h3>
                            <span class="card-arrow">↗</span>
                        </a>

                        <a href="#" class="service-card">
                            <!-- <span class="card-number">04</span> -->
                            <h3>
                                Corporate &amp;<br>
                                Commercial
                            </h3>
                            <span class="card-arrow">↗</span>
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- =========================================
         LOCAL SERVICES
    ========================================== -->

    <section class="content-section location-services">

        <div class="container">

            <span class="eyebrow">
                SECURITY SERVICES ACROSS AUSTRALIA
            </span>

            <h2>
                Security coverage across Australia.
            </h2>

            <p class="location-intro">
                Security requirements vary from one location to another. Advent Security provides security
                services across major Australian locations, with personnel and duties planned around the
                requirements of each site.
            </p>

            <div class="row g-0 location-grid">

                <div class="col-md-6">
                    <article class="location-card">

                        <h3>
                            Melbourne
                        </h3>

                        <p>
                            Security guard services for commercial, construction, retail and other operational environments across Melbourne.
                        </p>

                        <a href="#">
                            Learn more →
                        </a>

                    </article>
                </div>

                <div class="col-md-6">
                    <article class="location-card">

                        <h3>
                            Sydney
                        </h3>

                        <p>
                            Professional security personnel supporting businesses, workplaces, events and other sites across Sydney.
                        </p>

                        <a href="#">
                            Learn more →
                        </a>

                    </article>
                </div>

                <div class="col-md-6">
                    <article class="location-card">

                        <h3>
                            Brisbane
                        </h3>

                        <p>
                            Security services for commercial, retail, construction and operational environments across Brisbane.
                        </p>

                        <a href="#">
                            Learn more →
                        </a>

                    </article>
                </div>

                <div class="col-md-6">
                    <article class="location-card">

                        <h3>
                            Perth
                        </h3>

                        <p>
                            Security personnel and site security services for businesses and operational sites across Perth.
                        </p>

                        <a href="#">
                            Learn more →
                        </a>

                    </article>
                </div>

            </div>

        </div>

    </section>


    <!-- =========================================
         INDUSTRIES
    ========================================== -->

    <section class="content-section industries-section">

        <div class="container">

            <div class="industries-intro">

                <span class="eyebrow">
                    INDUSTRIES WE SUPPORT
                </span>

                <h2>
                    Security for the way<br>
                    your business operates.
                </h2>

                <p>
                    Security requirements vary by industry, site layout, operating hours and risk profile. Advent provides
                    security personnel for a range of commercial and operational environments, with duties
                    determined by the requirements of each site.
                </p>

            </div>

            <div class="row g-0 industry-grid">

                <div class="col-md-6">
                    <div class="industry-card">
                        <h3>Corporate &amp; Commercial</h3>
                        <p>Professional front-of-house, access and workplace security for offices and commercial facilities.</p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="industry-card">
                        <h3>Warehousing &amp; Logistics</h3>
                        <p>Security support for site access, restricted areas, assets, vehicles and operational facilities.</p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="industry-card">
                        <h3>Healthcare</h3>
                        <p>Professional security support for environments where people, access and site safety require careful management.</p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="industry-card">
                        <h3>Retail &amp; Shopping Centres</h3>
                        <p>Visible security that supports customer safety, loss prevention and day-to-day retail operations.</p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="industry-card">
                        <h3>Construction</h3>
                        <p>Site security designed around access, equipment, materials, contractors and after-hours protection.</p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="industry-card">
                        <h3>Events &amp; Public Venues</h3>
                        <p>Security support for controlled entry, crowd management, incident response and visitor safety.</p>
                    </div>
                </div>

            </div>

        </div>

    </section>


    <!-- =========================================
         WHY ADVENT
    ========================================== -->

    <section class="content-section why-advent">

        <div class="container">

            <div class="row align-items-center g-5">

                <div class="col-lg-6">

                    <div class="section-content">

                        <span class="eyebrow">
                            WHY ADVENT SECURITY
                        </span>

                        <h2>
                            Security that fits<br>
                            your operation.
                        </h2>

                        <p>
                            Security is about more than placing personnel on-site. The service needs to reflect
                            your people, property, procedures, operating hours and security requirements.
                        </p>

                        <ul class="check-list">
                            <li>Licensed and trained security professionals</li>
                            <li>Coverage across major Australian locations</li>
                            <li>Experience across multiple industries</li>
                            <li>Services planned around site requirements</li>
                            <li>Security personnel, monitoring and supporting capabilities</li>
                        </ul>

                        <a href="#quote" class="advent-btn advent-btn-primary">
                            <span>DISCUSS YOUR SECURITY NEEDS</span>
                            <span class="btn-arrow">→</span>
                        </a>

                    </div>

                </div>

                <div class="col-lg-6">

                    <div class="image-placeholder wide-placeholder">
                        <img
                            src="<?php echo esc_url(
                                        get_template_directory_uri() .
                                            '/assets/images/security-guard-services/track-record-section-security.webp'
                                    ); ?>"
                            alt="Advent Security corporate concierge security team">
                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- =========================================
         HOW SECURITY GUARD SERVICES WORK
    ========================================== -->

    <section class="content-section assessment-process">

        <div class="container">

            <div class="industries-intro">

                <span class="eyebrow">
                    SECURITY ASSESSMENT
                </span>

                <h2>
                    Start with your<br>
                    security requirements.
                </h2>

                <p>
                    The right security service depends on what you need to protect, how your site operates and the duties
                    you need personnel to perform. An assessment can help establish the appropriate coverage,
                    responsibilities and supporting security measures.
                </p>

            </div>

            <div class="row g-0 industry-grid">

                <div class="col-md-6">
                    <div class="industry-card">
                        <span class="process-number">01</span>
                        <h3>Understand the site</h3>
                        <p>Consider your location, people, assets, access points, operating hours and existing security arrangements.</p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="industry-card">
                        <span class="process-number">02</span>
                        <h3>Identify the requirements</h3>
                        <p>Define the duties, coverage, monitoring and response requirements relevant to your site.</p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="industry-card">
                        <span class="process-number">03</span>
                        <h3>Design the service</h3>
                        <p>Establish a practical security approach around your operating hours, risks and agreed responsibilities.</p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="industry-card">
                        <span class="process-number">04</span>
                        <h3>Review and adapt</h3>
                        <p>Security requirements can change as your operation changes, so the service can be reviewed when circumstances or requirements change.</p>
                    </div>
                </div>

            </div>

        </div>

    </section>


    <!-- =========================================
     RELATED SERVICES
    ========================================== -->

    <section class="content-section related-services">

        <div class="container">

            <div class="related-services-header">

                <div>

                    <span class="eyebrow">
                        RELATED SERVICES
                    </span>

                    <h2>
                        Explore our other<br>
                        <span>security services.</span>
                    </h2>

                    <p>
                        Security guards can form part of a wider security strategy. Explore related Advent services that may
                        complement personnel and site security requirements.
                    </p>

                </div>

            </div>


            <div class="related-services-grid">

                <!-- Corporate Concierge -->
                <a href="<?php echo esc_url(home_url('/security-services/corporate-concierge-services/')); ?>"
                    class="related-service-card">

                    <span class="related-service-icon">
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M12 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8Z" />
                            <path d="M5 21a7 7 0 0 1 14 0" />
                            <path d="M4 21h16" />
                        </svg>
                    </span>

                    <span class="related-service-title">
                        Corporate &amp;<br>
                        Concierge Security
                    </span>

                    <span class="related-service-arrow">
                        →
                    </span>

                </a>


                <!-- Security Consulting -->
                <a href="<?php echo esc_url(home_url('/security-services/security-consulting/')); ?>"
                    class="related-service-card">

                    <span class="related-service-icon">
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M12 3 20 6v5c0 5.2-3.3 8.7-8 10-4.7-1.3-8-4.8-8-10V6l8-3Z" />
                        </svg>
                    </span>

                    <span class="related-service-title">
                        Security<br>
                        Consulting
                    </span>

                    <span class="related-service-arrow">
                        →
                    </span>

                </a>


                <!-- Alarm Monitoring -->
                <a href="<?php echo esc_url(home_url('/security-services/alarm-monitoring/')); ?>"
                    class="related-service-card">

                    <span class="related-service-icon">
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M6 18h12" />
                            <path d="M7 18v-6a5 5 0 0 1 10 0v6" />
                            <path d="M5 21h14" />
                            <path d="M12 3v2" />
                        </svg>
                    </span>

                    <span class="related-service-title">
                        Alarm<br>
                        Monitoring
                    </span>

                    <span class="related-service-arrow">
                        →
                    </span>

                </a>

                <!-- Retail Security -->
                <a href="<?php echo esc_url(home_url('/security-services/retail-security/')); ?>"
                    class="related-service-card">

                    <span class="related-service-icon">
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M5 8h14l-1 12H6L5 8Z" />
                            <path d="M8 8V6a4 4 0 0 1 8 0v2" />
                        </svg>
                    </span>

                    <span class="related-service-title">
                        Retail<br>
                        Security
                    </span>

                    <span class="related-service-arrow">
                        →
                    </span>

                </a>


                <!-- Construction Security -->
                <a href="<?php echo esc_url(home_url('/security-services/construction-security/')); ?>"
                    class="related-service-card">

                    <span class="related-service-icon">
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M4 18h16" />
                            <path d="M6 18v-6h12v6" />
                            <path d="M8 12V9h8v3" />
                            <path d="M10 9V6h4v3" />
                        </svg>
                    </span>

                    <span class="related-service-title">
                        Construction<br>
                        Security
                    </span>

                    <span class="related-service-arrow">
                        →
                    </span>

                </a>


                <!-- Event Security -->
                <a href="<?php echo esc_url(home_url('/security-services/event-security/')); ?>"
                    class="related-service-card">

                    <span class="related-service-icon">
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                            <circle cx="8" cy="9" r="3" />
                            <circle cx="16" cy="9" r="3" />
                            <path d="M3 20a5 5 0 0 1 10 0" />
                            <path d="M11 20a5 5 0 0 1 10 0" />
                        </svg>
                    </span>

                    <span class="related-service-title">
                        Event<br>
                        Security
                    </span>

                    <span class="related-service-arrow">
                        →
                    </span>

                </a>

            </div>

        </div>

    </section>



    <!-- =========================================
         FAQ
    ========================================== -->

    <section class="faq-section">

        <div class="container">

            <div class="faq-header">

                <div>

                    <span class="eyebrow">
                        SECURITY GUARD SERVICES FAQ
                    </span>

                    <h2>
                        Security Guard Services FAQs
                    </h2>

                </div>

            </div>


            <div class="faq-list">

                <details>
                    <summary>
                        What does a security guard do?
                        <span>+</span>
                    </summary>

                    <p>
                        Security guard duties depend on the site and the agreed
                        service. They can include maintaining a visible security
                        presence, monitoring access, checking buildings and
                        equipment, reporting incidents, supporting safety procedures,
                        monitoring CCTV or access control and assisting emergency
                        services where required.
                    </p>
                </details>

                <details>
                    <summary>
                        What types of security guard services are available?
                        <span>+</span>
                    </summary>

                    <p>
                        Security services can include static guarding, permanent
                        patrols, alarm response, concierge security, access and
                        visitor monitoring, control room operations, event security
                        and security support for corporate, commercial, retail,
                        logistics and construction environments.
                    </p>
                </details>

                <details>
                    <summary>
                        How much does it cost to hire a security guard?
                        <span>+</span>
                    </summary>

                    <p>
                        Security costs depend on factors such as location, operating
                        hours, number of personnel, duties, site requirements and
                        the level of coverage required. Contact Advent Security to
                        discuss your requirements and request a tailored assessment.
                    </p>
                </details>

                <details>
                    <summary>
                        Do security guards provide 24/7 coverage?
                        <span>+</span>
                    </summary>

                    <p>
                        Security coverage can be structured around your operating
                        requirements, including round-the-clock services where
                        appropriate. The required coverage and duties can be
                        established during the security assessment.
                    </p>
                </details>

                <details>
                    <summary>
                        How effective are security guards?
                        <span>+</span>
                    </summary>

                    <p>
                        A professional security presence can help deter unwanted
                        activity, identify security concerns, respond to incidents
                        and provide a visible point of contact for staff, visitors
                        and customers. Effectiveness depends on the service being
                        designed around the site's actual risks and requirements.
                    </p>
                </details>

                <details>
                    <summary>
                        Do I need security guards for my business?
                        <span>+</span>
                    </summary>

                    <p>
                        Businesses may benefit from security personnel when they
                        need support with access management, site monitoring,
                        asset protection, visitor safety, incident response or
                        maintaining a visible security presence. An assessment
                        can help determine what level of service is appropriate.
                    </p>
                </details>

                <details>
                    <summary>
                        Can security guards work across multiple locations?
                        <span>+</span>
                    </summary>

                    <p>
                        Yes. Advent Security provides security services across
                        major Australian locations and can discuss multi-site
                        requirements based on the locations, duties and coverage
                        required.
                    </p>
                </details>

                <details>
                    <summary>
                        What industries can use professional security services?
                        <span>+</span>
                    </summary>

                    <p>
                        Security personnel can support a wide range of environments,
                        including corporate and commercial offices, construction
                        sites, retail and shopping centres, warehouses and logistics,
                        healthcare facilities, events and other operational sites.
                    </p>
                </details>

                <details>
                    <summary>
                        What qualifications do security guards need in Australia?
                        <span>+</span>
                    </summary>

                    <p>
                        Security licensing and training requirements vary by state and territory in Australia.
                        Security guards generally need the appropriate licence and training for the duties they
                        perform, with requirements depending on the jurisdiction and role.
                    </p>
                </details>

                <details>
                    <summary>
                        Can security guards monitor CCTV and access control systems?
                        <span>+</span>
                    </summary>

                    <p>
                        Depending on the role and site requirements, security personnel can monitor CCTV,
                        access control and other security systems where these responsibilities form part of
                        the agreed service.
                    </p>
                </details>

            </div>

        </div>

    </section>


    <!-- =========================================
         ASSESSMENT CTA
    ========================================== -->

    <section class="assessment-cta" id="quote">

        <div class="container">

            <div class="cta-inner">

                <div>

                    <span class="eyebrow">
                        SECURITY GUARD SERVICES
                    </span>

                    <h2>
                        Review your security requirements.
                    </h2>

                    <p>
                        Tell us about your site, operating hours, security requirements and the duties you need
                        personnel to perform. Advent can help define the appropriate security service and next steps.
                    </p>

                </div>

                <a href="#contact" class="advent-btn advent-btn-dark">
                    <span>REQUEST A SECURITY ASSESSMENT</span>
                    <span class="btn-arrow">→</span>
                </a>

            </div>

        </div>

    </section>

</main>

<?php get_footer(); ?>
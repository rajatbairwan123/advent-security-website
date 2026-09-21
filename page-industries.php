<?php

/**
 * Template Name: Industry-Specific Security
 * Template Post Type: page
 *
 */

get_header();
?>

<?php
// Page content
?>
<main id="industry-specific-page" class="industry-specific-page">
    <section class="industry-page industry-hero">
        <div class="industry-hero-copy">
            <div>
                <div class="eyebrow">Industry-specific security</div>
                <h1>
                    Security Solutions Designed Around Your
                    <span>Industry</span>
                </h1>
                <p>
                    Every organisation has a different security
                    environment. People, assets, access points,
                    movement, operating hours and site conditions all
                    shape what the site actually needs.
                </p>
                <p>
                    Advent Security brings security services, electronic
                    security, monitoring and consulting together where
                    appropriate, with the approach shaped around the
                    people, assets and operations on site.
                </p>
                <div class="hero-buttons">
                    <a class="advent-btn" href="#industries">Explore Your Industry ↓</a>
                    <a class="advent-btn" href="<?php echo esc_url(home_url('/contact/')); ?>">
                        Book a Security Consultation
                    </a>
                </div>
            </div>
        </div>
        <div class="industry-hero-photo">
            <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/industries/hero.webp"
                alt="Modern Australian commercial environment with integrated security infrastructure" />
        </div>
    </section>
    <div class="industry-proof">
        <div>
            <strong>36+ years</strong><span>Established experience since 1990</span>
        </div>
        <div>
            <strong>Australian-owned</strong><span>Family business</span>
        </div>
        <div>
            <strong>ASIAL</strong><span>Platinum Level membership</span>
        </div>
        <div>
            <strong>ISO 27001:2022</strong><span>Information-security certification</span>
        </div>
    </div>
    <section class="industry-context">
        <div class="container">
            <div class="industry-section-head">
                <div>
                    <div class="eyebrow">Why industry matters</div>
                    <h2>
                        Different environments create different security
                        priorities
                    </h2>
                </div>
                <p>
                    Security works best when it reflects the way a site
                    actually operates. The people using it, what moves
                    through it and what happens after hours all
                    influence the controls that make sense.
                </p>
            </div>
            <p class="industry-context-intro">
                A warehouse does not operate like a hospital. An airport
                does not operate like a corporate office. A construction
                site changes as the project progresses, while critical
                infrastructure can place particular emphasis on
                controlled access, resilience and continuity.
            </p>
            <div class="industry-context-grid">
                <article class="industry-context-card">
                    <div class="industry-label">PEOPLE</div>
                    <h3>Who uses the site</h3>
                    <p>
                        Employees, contractors, visitors, customers,
                        patients, students and the public can all have
                        different access needs.
                    </p>
                </article>
                <article class="industry-context-card">
                    <div class="industry-label">ASSETS</div>
                    <h3>What needs protecting</h3>
                    <p>
                        Property, stock, equipment, vehicles,
                        information and operational assets each create
                        different priorities.
                    </p>
                </article>
                <article class="industry-context-card">
                    <div class="industry-label">MOVEMENT</div>
                    <h3>How people and vehicles move</h3>
                    <p>
                        Entry points, loading areas, pedestrian flows,
                        restricted zones and perimeter access shape the
                        security environment.
                    </p>
                </article>
                <article class="industry-context-card">
                    <div class="industry-label">OPERATING PATTERNS</div>
                    <h3>When the site is active</h3>
                    <p>
                        Business hours, shifts, after-hours activity and
                        changing site conditions all affect how controls
                        should work.
                    </p>
                </article>
                <article class="industry-context-card">
                    <div class="industry-label">RISK</div>
                    <h3>Where vulnerabilities sit</h3>
                    <p>
                        Intrusion, theft, unauthorised access, vandalism
                        and site-specific risks need to be considered in
                        context.
                    </p>
                </article>
                <article class="industry-context-card">
                    <div class="industry-label">CONTINUITY</div>
                    <h3>Keeping operations moving</h3>
                    <p>
                        Security controls should support safe, resilient
                        and uninterrupted operations rather than
                        creating unnecessary friction.
                    </p>
                </article>
            </div>
        </div>
    </section>
    <section class="industry-directory" id="industries">
        <div class="container">
            <div class="industry-section-head">
                <div>
                    <div class="eyebrow">Explore industries</div>
                    <h2>Find the environment that matches yours</h2>
                </div>
                <p>
                    Start with your industry to explore the security
                    considerations, practical applications and
                    technologies relevant to that environment.
                </p>
            </div>
            <div class="industry-directory-grid">
                <a
                    class="industry-directory-card"
                    href="<?php echo esc_url(home_url('/industries/commercial-offices/')); ?>">
                    <div>
                        <div class="industry-label">Commercial</div>
                        <h3>Commercial Offices</h3>
                        <p>
                            Security for workplaces, visitors, sensitive
                            areas, staff and after-hours operations.
                        </p>
                    </div>
                    <div class="industry-explore">
                        Explore Commercial Offices <span>→</span>
                    </div>
                </a>
                <a
                    class="industry-directory-card"
                    href="<?php echo esc_url(home_url('/industries/shopping-centres-retail/')); ?>">
                    <div>
                        <div class="industry-label">Retail</div>
                        <h3>Shopping Centres &amp; Retail</h3>
                        <p>
                            Security for high-traffic environments,
                            customers, staff, assets, access and
                            incident response.
                        </p>
                    </div>
                    <div class="industry-explore">
                        Explore Retail <span>→</span>
                    </div>
                </a>
                <a
                    class="industry-directory-card"
                    href="<?php echo esc_url(home_url('/industries/healthcare-aged-care/')); ?>">
                    <div>
                        <div class="industry-label">Healthcare</div>
                        <h3>Healthcare &amp; Aged Care</h3>
                        <p>
                            Security for patients, staff, visitors,
                            controlled areas, assets and sensitive
                            operations.
                        </p>
                    </div>
                    <div class="industry-explore">
                        Explore Healthcare <span>→</span>
                    </div>
                </a>
                <a
                    class="industry-directory-card"
                    href="<?php echo esc_url(home_url('/industries/government-public-sector/')); ?>">
                    <div>
                        <div class="industry-label">Public sector</div>
                        <h3>Government &amp; Public Sector</h3>
                        <p>
                            Layered security for public-facing
                            facilities, controlled areas, people and
                            operational requirements.
                        </p>
                    </div>
                    <div class="industry-explore">
                        Explore Government <span>→</span>
                    </div>
                </a>
                <a class="industry-directory-card" href="<?php echo esc_url(home_url('/industries/education/')); ?>">
                    <div>
                        <div class="industry-label">Education</div>
                        <h3>Education</h3>
                        <p>
                            Security for campuses, students, staff,
                            visitors, buildings and after-hours
                            activity.
                        </p>
                    </div>
                    <div class="industry-explore">
                        Explore Education <span>→</span>
                    </div>
                </a>
                <a
                    class="industry-directory-card"
                    href="<?php echo esc_url(home_url('/industries/aviation-airports/')); ?>">
                    <div>
                        <div class="industry-label">Aviation</div>
                        <h3>Aviation &amp; Airports</h3>
                        <p>
                            Security for operationally critical
                            environments where access, surveillance,
                            movement and continuity matter.
                        </p>
                    </div>
                    <div class="industry-explore">
                        Explore Aviation <span>→</span>
                    </div>
                </a>
                <a
                    class="industry-directory-card"
                    href="<?php echo esc_url(home_url('/industries/logistics-warehousing/')); ?>">
                    <div>
                        <div class="industry-label">Logistics</div>
                        <h3>Logistics &amp; Warehousing</h3>
                        <p>
                            Security for goods, yards, loading areas,
                            vehicles, staff and contractor movement.
                        </p>
                    </div>
                    <div class="industry-explore">
                        Explore Logistics <span>→</span>
                    </div>
                </a>
                <a class="industry-directory-card" href="<?php echo esc_url(home_url('/industries/manufacturing/')); ?>">
                    <div>
                        <div class="industry-label">Industrial</div>
                        <h3>Manufacturing</h3>
                        <p>
                            Security for people, plant, production
                            areas, warehouses, vehicles and restricted
                            zones.
                        </p>
                    </div>
                    <div class="industry-explore">
                        Explore Manufacturing <span>→</span>
                    </div>
                </a>
                <a class="industry-directory-card" href="<?php echo esc_url(home_url('/industries/construction/')); ?>">
                    <div>
                        <div class="industry-label">Construction</div>
                        <h3>Construction</h3>
                        <p>
                            Security that adapts as sites change,
                            protecting equipment, materials, access,
                            workers and temporary perimeters.
                        </p>
                    </div>
                    <div class="industry-explore">
                        Explore Construction <span>→</span>
                    </div>
                </a>
                <a class="industry-directory-card" href="<?php echo esc_url(home_url('/industries/ports-maritime/')); ?>">
                    <div>
                        <div class="industry-label">Maritime</div>
                        <h3>Ports &amp; Maritime</h3>
                        <p>
                            Security for cargo, people, vehicles,
                            restricted areas, terminals and waterfront
                            operations.
                        </p>
                    </div>
                    <div class="industry-explore">
                        Explore Maritime <span>→</span>
                    </div>
                </a>
                <a
                    class="industry-directory-card"
                    href="<?php echo esc_url(home_url('/industries/critical-infrastructure/')); ?>">
                    <div>
                        <div class="industry-label">Critical infrastructure</div>
                        <h3>Critical Infrastructure</h3>
                        <p>
                            Layered physical and electronic security
                            where access, resilience and continuity are
                            important.
                        </p>
                    </div>
                    <div class="industry-explore">
                        Explore Critical Infrastructure <span>→</span>
                    </div>
                </a>
                <a
                    class="industry-directory-card"
                    href="<?php echo esc_url(home_url('/industries/hospitality-events/')); ?>">
                    <div>
                        <div class="industry-label">Venues</div>
                        <h3>Hospitality &amp; Events</h3>
                        <p>
                            Security for venues, guests, staff, public
                            areas, events and changing crowd and
                            operational conditions.
                        </p>
                    </div>
                    <div class="industry-explore">
                        Explore Hospitality &amp; Events <span>→</span>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <section class="industry-method">
        <div class="container">
            <div class="industry-section-head">
                <div>
                    <div class="eyebrow">Our approach</div>
                    <h2>
                        From industry context to an integrated security
                        strategy
                    </h2>
                </div>
                <p>
                    Good security starts with understanding how a site
                    operates. The solution should follow from that — not
                    the other way around.
                </p>
            </div>
            <div class="industry-steps">
                <article class="industry-step">
                    <!-- <b>01</b> -->
                    <h3>Understand</h3>
                    <p>
                        Assess the operating environment, people,
                        assets, movement, access points, existing
                        controls and security priorities.
                    </p>
                </article>
                <article class="industry-step">
                    <!-- <b>02</b> -->
                    <h3>Identify</h3>
                    <p>
                        Identify vulnerabilities, operational
                        constraints and priority areas requiring
                        stronger visibility, control or response.
                    </p>
                </article>
                <article class="industry-step">
                    <!-- <b>03</b> -->
                    <h3>Design</h3>
                    <p>
                        Develop the appropriate combination of security
                        personnel, CCTV, alarms, access control,
                        monitoring, analytics and related technologies
                        where required.
                    </p>
                </article>
                <article class="industry-step">
                    <!-- <b>04</b> -->
                    <h3>Integrate</h3>
                    <p>
                        Where compatible and appropriate, connect
                        technologies and workflows so security controls
                        support a coherent operating model.
                    </p>
                </article>
                <article class="industry-step">
                    <!-- <b>05</b> -->
                    <h3>Implement</h3>
                    <p>
                        Install, configure, commission and hand over the
                        agreed solution with clear operating procedures.
                    </p>
                </article>
                <article class="industry-step">
                    <!-- <b>06</b> -->
                    <h3>Support</h3>
                    <p>
                        Maintain, review and evolve the security
                        environment as operations, sites and risks
                        change.
                    </p>
                </article>
            </div>
        </div>
    </section>
    <section class="industry-capabilities">
        <div class="container">
            <div class="industry-section-head">
                <div>
                    <div class="eyebrow">Advent capabilities</div>
                    <h2>Security capability that can work together</h2>
                </div>
                <p>
                    The right mix depends on the environment. Advent can
                    consider individual services or a broader security
                    programme where the site calls for it.
                </p>
            </div>
            <div class="industry-cap-grid">
                <p class="industry-cap-lead">
                    The goal is not to add technology for the sake of
                    it. It is to select the controls that fit the
                    environment and make sure they work with the people,
                    processes and priorities already in place.
                </p>
                <div class="industry-cap-list">
                    <article class="industry-cap">
                        <h3>Security Guard Services</h3>
                        <p>
                            On-site security presence, patrols,
                            concierge/security roles and operational
                            support where required.
                        </p>
                    </article>
                    <article class="industry-cap">
                        <h3>Electronic Security</h3>
                        <p>
                            CCTV, alarms, access control and related
                            electronic-security technologies.
                        </p>
                    </article>
                    <article class="industry-cap">
                        <h3>Alarm Monitoring</h3>
                        <p>
                            Monitoring and associated response pathways,
                            subject to the confirmed service scope.
                        </p>
                    </article>
                    <article class="industry-cap">
                        <h3>Security Consulting</h3>
                        <p>
                            Risk assessment, security strategy and
                            advisory support.
                        </p>
                    </article>
                    <article class="industry-cap">
                        <h3>Integrated Security Solutions</h3>
                        <p>
                            Coordinated physical, electronic and
                            consulting capabilities for complex
                            environments.
                        </p>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <section class="industry-pathways">
        <div class="container">
            <div class="industry-section-head">
                <div>
                    <div class="eyebrow">
                        Industry → solution pathways
                    </div>
                    <h2>
                        Move from the sector to the right security
                        technology
                    </h2>
                </div>
                <p>
                    These pathways connect common industry requirements
                    with Advent Electronics technologies that may
                    support them.
                </p>
            </div>
            <div class="industry-path-grid">
                <article class="industry-path">
                    <h3>CCTV Systems</h3>
                    <p>
                        Site visibility, surveillance and incident
                        review.
                    </p>
                    <a href="<?php echo esc_url(home_url('/advent-electronics/cctv-systems/')); ?>">Explore CCTV Systems →</a>
                </article>
                <article class="industry-path">
                    <h3>Access Control</h3>
                    <p>
                        Controlled entry, permissions and restricted
                        areas.
                    </p>
                    <a href="<?php echo esc_url(home_url('/advent-electronics/access-control/')); ?>">Explore Access Control →</a>
                </article>
                <article class="industry-path">
                    <h3>Alarm Systems</h3>
                    <p>
                        Intrusion and event detection with appropriate
                        workflows.
                    </p>
                    <a href="<?php echo esc_url(home_url('/advent-electronics/alarm-systems/')); ?>">Explore Alarm Systems →</a>
                </article>
                <article class="industry-path">
                    <h3>Video Analytics</h3>
                    <p>Video intelligence and event detection.</p>
                    <a href="<?php echo esc_url(home_url('/advent-electronics/video-analytics/')); ?>">Explore Video Analytics →</a>
                </article>
                <article class="industry-path">
                    <h3>Visitor Management</h3>
                    <p>
                        Visitor and contractor arrival and access
                        workflows.
                    </p>
                    <a href="<?php echo esc_url(home_url('/advent-electronics/visitor-management/')); ?>">Explore Visitor Management →</a>
                </article>
                <article class="industry-path">
                    <h3>License Plate Recognition</h3>
                    <p>
                        Vehicle identification and vehicle-access
                        workflows.
                    </p>
                    <a
                        href="<?php echo esc_url(home_url('/advent-electronics/license-plate-recognition/')); ?>">Explore LPR →</a>
                </article>
                <article class="industry-path">
                    <h3>Boom Gates</h3>
                    <p>Physical vehicle entry control.</p>
                    <a href="<?php echo esc_url(home_url('/advent-electronics/boom-gates/')); ?>">Explore Boom Gates →</a>
                </article>
                <article class="industry-path">
                    <h3>Cloud Monitoring</h3>
                    <p>
                        Supported remote visibility and management of
                        connected security systems.
                    </p>
                    <a href="<?php echo esc_url(home_url('/advent-electronics/cloud-monitoring/')); ?>">Explore Cloud Monitoring →</a>
                </article>
            </div>
        </div>
    </section>
    <section class="industry-why">
        <div class="container">
            <div class="industry-section-head">
                <div>
                    <div class="eyebrow">Why Advent Security</div>
                    <h2>
                        A security approach that starts with the way you
                        operate
                    </h2>
                </div>
                <p>
                    Security should support the organisation behind the
                    site. That means looking beyond individual products
                    and understanding how the people, technology and
                    day-to-day operation fit together.
                </p>
            </div>
            <div class="industry-why-grid">
                <div class="industry-why-visual">
                    <img
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/industries/security.webp"
                        alt="Advent security team monitoring an integrated commercial security environment" />
                    <p class="industry-why-copy">
                        Advent starts with the environment, not a
                        standard package. We look at how your people,
                        assets and site operate, then build a practical
                        path from assessment and design through
                        implementation and ongoing support.
                    </p>
                </div>
                <div class="industry-why-points">
                    <article class="industry-why-point">
                        <h3>Tailored, not one-size-fits-all</h3>
                        <p>
                            Solutions begin with the environment,
                            operating requirements and priorities of the
                            organisation.
                        </p>
                    </article>
                    <article class="industry-why-point">
                        <h3>Integrated capability</h3>
                        <p>
                            Security personnel, electronic security,
                            monitoring and consulting can be considered
                            together where appropriate.
                        </p>
                    </article>
                    <article class="industry-why-point">
                        <h3>Lifecycle mindset</h3>
                        <p>
                            Assessment, design, implementation, support
                            and future change are treated as connected
                            stages.
                        </p>
                    </article>
                    <article class="industry-why-point">
                        <h3>
                            Experience that spans operating environments
                        </h3>
                        <p>
                            Security requirements differ from one site
                            to another. The approach stays grounded in
                            the realities of the environment being
                            protected.
                        </p>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <!-- <section class="industry-final">
        <div class="container">
            <div class="eyebrow">Talk to Advent About Your Industry</div>
            <h2>Start with the environment. Build from there.</h2>
            <p>
                Tell us about your operating environment, sites and
                security priorities. We can discuss the appropriate next
                step — from an initial consultation to a more detailed
                security assessment or proposal.
            </p>
            <a class="advent-btn" href="<?php //echo esc_url(home_url('/contact/')); 
                                        ?>">Book a Security Consultation</a>
        </div>
    </section> -->

    <section class="industry-faq-section">
        <div class=" container">
            <div class="industry-section-head">
                <div>
                    <div class="eyebrow">FAQs</div>
                    <h2>Questions about industry-specific security</h2>
                </div>
            </div>
            <div class="industry-faq-wrap">
                <div class="industry-faq">
                    <details>
                        <summary>
                            Why does security need to be tailored to an
                            industry?
                        </summary>
                        <p>
                            Different industries have different
                            operating patterns, people, assets, access
                            requirements, site layouts and operational
                            constraints. A suitable strategy should
                            account for those differences rather than
                            relying on a standard package.
                        </p>
                    </details>
                    <details>
                        <summary>
                            What industries does Advent Security
                            support?
                        </summary>
                        <p>
                            Advent supports a broad range of commercial,
                            industrial, public-sector and operational
                            environments. The Industries section
                            provides dedicated pathways for the approved
                            industry destinations in the final sitemap.
                        </p>
                    </details>
                    <details>
                        <summary>
                            Can Advent combine security guards and
                            electronic security?
                        </summary>
                        <p>
                            Where appropriate, Advent can consider
                            professional security personnel alongside
                            electronic security technologies such as
                            CCTV, access control and alarm systems. The
                            right combination depends on the site and
                            operating model.
                        </p>
                    </details>
                    <details>
                        <summary>
                            Can Advent design security for multiple
                            sites?
                        </summary>
                        <p>
                            Multi-site environments can be approached as
                            a coordinated security programme while
                            individual locations address their specific
                            risks, layouts and operating requirements.
                        </p>
                    </details>
                    <details>
                        <summary>
                            Does Advent provide security consulting as
                            well as security systems?
                        </summary>
                        <p>
                            Advent provides security consulting and
                            risk-management capability alongside
                            guarding and electronic-security services.
                            Exact scope should be confirmed for the
                            organisation and project.
                        </p>
                    </details>
                    <details>
                        <summary>
                            Can Advent integrate existing security
                            systems?
                        </summary>
                        <p>
                            An assessment can identify which existing
                            systems may be suitable to retain, which
                            require upgrading and where additional
                            technology or workflow integration may be
                            appropriate.
                        </p>
                    </details>
                    <details>
                        <summary>
                            How do I choose the right security solution
                            for my industry?
                        </summary>
                        <p>
                            Start with the operating environment rather
                            than a product. Consider people, assets,
                            access points, site boundaries, operating
                            hours, incident history, existing controls
                            and continuity requirements.
                        </p>
                    </details>
                    <details>
                        <summary>
                            Can Advent help assess our current security
                            risks?
                        </summary>
                        <p>
                            Yes. A security consultation or risk
                            assessment can help identify
                            vulnerabilities, control gaps and priorities
                            before a solution is designed.
                        </p>
                    </details>
                </div>
            </div>
        </div>
    </section>

    <div class="industry-cta-band">
        <div class="container cta-inner">
            <div>
                <div class="eyebrow">Security assessment</div>
                <h2>
                    Need help determining what your site actually
                    requires?
                </h2>
                <p>
                    Talk to an Advent security specialist about your
                    operating environment, current controls and
                    priorities.
                </p>
            </div>
            <div class="industry-cta-buttons">
                <a class="advent-btn" href="<?php echo esc_url(home_url('/contact/')); ?>">Assess My Security Requirements</a><a class="advent-btn advent-btn-dark" href="<?php echo esc_url(home_url('/contact/')); ?>">Talk to an Industry Specialist</a>
            </div>
        </div>
    </div>

</main>
<?php get_footer(); ?>
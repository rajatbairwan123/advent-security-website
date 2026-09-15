<?php

/**
 * Security Services
 * Temporary Child Pages Index
 */

get_header();
?>

<main class="home-page" style="margin-top: 50px;">

    <div class=" container">

        <h1>Security Services</h1>

        <p>Select a service:</p>

        <ul>

            <li>
                <a href="<?php echo esc_url(home_url('/security-services/security-guard-services/')); ?>">
                    Security Guard Services
                </a>
            </li>

            <li>
                <a href="<?php echo esc_url(home_url('/security-services/corporate-concierge-services/')); ?>">
                    Corporate Concierge Services
                </a>
            </li>

            <li>
                <a href="<?php echo esc_url(home_url('/security-services/security-consulting/')); ?>">
                    Security Consulting
                </a>
            </li>

            <li>
                <a href="<?php echo esc_url(home_url('/security-services/retail-security/')); ?>">
                    Retail Security
                </a>
            </li>

            <li>
                <a href="<?php echo esc_url(home_url('/security-services/construction-security/')); ?>">
                    Construction Security
                </a>
            </li>

            <li>
                <a href="<?php echo esc_url(home_url('/security-services/event-security/')); ?>">
                    Event Security
                </a>
            </li>

            <li>
                <a href="<?php echo esc_url(home_url('/security-services/gatehouse-security/')); ?>">
                    Gatehouse Security --- Work pending
                </a>
            </li>

            <li>
                <a href="<?php echo esc_url(home_url('/security-services/loss-prevention/')); ?>">
                    Loss Prevention --- Not started
                </a>
            </li>

            <li>
                <a href="<?php echo esc_url(home_url('/security-services/emergency-response/')); ?>">
                    Emergency Response --- Not started
                </a>
            </li>

            <li>
                <a href="<?php echo esc_url(home_url('/security-services/remote-monitoring/')); ?>">
                    Remote Monitoring --- Not started
                </a>
            </li>

            <li>
                <a href="<?php echo esc_url(home_url('/security-services/ai-surveillance/')); ?>">
                    AI Surveillance --- Not started
                </a>
            </li>

            <li>
                <a href="<?php echo esc_url(home_url('/security-services/drone-security/')); ?>">
                    Drone Security --- Not started
                </a>
            </li>

            <li>
                <a href="<?php echo esc_url(home_url('/security-services/bodyguard-services/')); ?>">
                    Bodyguard Services --- Not started
                </a>
            </li>

        </ul>

    </div>

</main>

<?php
get_footer();
?>
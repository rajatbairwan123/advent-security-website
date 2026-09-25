<?php

/**
 * =========================================================
 * SINGLE INSIGHT
 * =========================================================
 */

get_header();

while (have_posts()) :
    the_post();

    /*
     * -----------------------------------------------------
     * Insight Category
     * -----------------------------------------------------
     */
    $categories = get_the_terms(
        get_the_ID(),
        'insight_category'
    );

    $category_name = '';

    if ($categories && !is_wp_error($categories)) {
        $category_name = $categories[0]->name;
    }
?>

    <main class="single-insight-page">

        <!-- =====================================================
         SINGLE INSIGHT HERO
    ====================================================== -->

        <section class="single-insight-hero">

            <div class="container-fluid px-0">

                <div class="row g-0 align-items-stretch">

                    <!-- LEFT CONTENT -->
                    <div class="col-lg-6">

                        <div class="single-insight-hero-content">

                            <?php if ($category_name) : ?>

                                <span class="eyebrow">
                                    <?php echo esc_html($category_name); ?>
                                </span>

                            <?php else : ?>

                                <span class="eyebrow">
                                    NEWS & INSIGHTS
                                </span>

                            <?php endif; ?>


                            <h1>
                                <?php the_title(); ?>
                            </h1>


                            <div class="single-insight-meta">

                                <span>
                                    <?php echo esc_html(
                                        get_the_date('d/m/Y')
                                    ); ?>
                                </span>

                                <?php if (get_the_author()) : ?>

                                    <span>
                                        By <?php echo esc_html(
                                                get_the_author()
                                            ); ?>
                                    </span>

                                <?php endif; ?>

                            </div>

                        </div>

                    </div>


                    <!-- RIGHT IMAGE -->
                    <div class="col-lg-6">

                        <div class="single-insight-hero-image">

                            <?php if (has_post_thumbnail()) : ?>

                                <?php
                                the_post_thumbnail(
                                    'full',
                                    array(
                                        'loading' => 'eager',
                                        'alt' => esc_attr(
                                            get_the_title()
                                        ),
                                    )
                                );
                                ?>

                            <?php else : ?>

                                <div class="single-insight-image-placeholder">
                                    <span>
                                        ADVENT SECURITY
                                    </span>
                                </div>

                            <?php endif; ?>

                        </div>

                    </div>

                </div>

            </div>

        </section>


        <!-- =====================================================
         ARTICLE
    ====================================================== -->

        <section class="single-insight-content-section">

            <div class="container">

                <div class="single-insight-layout">

                    <!-- ARTICLE CONTENT -->
                    <article class="single-insight-content">

                        <div class="single-insight-breadcrumb">

                            <a href="<?php echo esc_url(
                                            home_url('/resources/news-insights/')
                                        ); ?>">
                                News & Insights
                            </a>

                            <span aria-hidden="true">→</span>

                            <span>
                                <?php the_title(); ?>
                            </span>

                        </div>


                        <div class="single-insight-content-inner">

                            <?php
                            the_content();
                            ?>

                        </div>


                        <!-- BACK TO INSIGHTS -->
                        <div class="single-insight-back">

                            <a
                                href="<?php echo esc_url(
                                            home_url('/resources/news-insights/')
                                        ); ?>"
                                class="advent-btn">

                                BACK TO NEWS & INSIGHTS

                                <span aria-hidden="true">
                                    →
                                </span>

                            </a>

                        </div>

                    </article>

                </div>

            </div>

        </section>


        <!-- =====================================================
         PREVIOUS / NEXT INSIGHTS
    ====================================================== -->

        <section class="single-insight-navigation">

            <div class="container">

                <div class="single-insight-nav-grid">

                    <?php
                    $previous_post = get_previous_post();
                    $next_post     = get_next_post();
                    ?>


                    <!-- PREVIOUS -->
                    <div class="single-insight-nav-item">

                        <?php if ($previous_post) : ?>

                            <span class="single-insight-nav-label">
                                PREVIOUS INSIGHT
                            </span>

                            <a
                                href="<?php echo esc_url(
                                            get_permalink($previous_post->ID)
                                        ); ?>"
                                class="single-insight-nav-link">

                                <?php
                                echo esc_html(
                                    get_the_title($previous_post->ID)
                                );
                                ?>

                                <span aria-hidden="true">
                                    ←
                                </span>

                            </a>

                        <?php endif; ?>

                    </div>


                    <!-- NEXT -->
                    <div class="single-insight-nav-item single-insight-nav-next">

                        <?php if ($next_post) : ?>

                            <span class="single-insight-nav-label">
                                NEXT INSIGHT
                            </span>

                            <a
                                href="<?php echo esc_url(
                                            get_permalink($next_post->ID)
                                        ); ?>"
                                class="single-insight-nav-link">

                                <span aria-hidden="true">
                                    →
                                </span>

                                <?php
                                echo esc_html(
                                    get_the_title($next_post->ID)
                                );
                                ?>

                            </a>

                        <?php endif; ?>

                    </div>

                </div>

            </div>

        </section>


        <!-- =========================================
         FINAL CTA
        ========================================== -->
        <section class="integrated-cta-insight" id="contact">

            <div class="container integrated-cta-insight-inner">

                <div>

                    <div class="eyebrow">
                        NEED EXPERT SECURITY SUPPORT?
                    </div>

                    <h2>
                        Let's Talk About
                        <span>Your Security Needs.</span>
                    </h2>

                    <p>
                        Speak with the Advent Security team about your
                        security requirements, risks and operational needs.
                    </p>

                </div>


                <div class="integrated-cta-insight-actions">

                    <a
                        href="<?php echo esc_url(
                                    home_url('/contact/')
                                ); ?>"
                        class="advent-btn advent-btn-dark">

                        GET IN TOUCH

                        <span aria-hidden="true">
                            →
                        </span>

                    </a>

                </div>

            </div>



        </section>

    </main>

<?php
endwhile;

get_footer();

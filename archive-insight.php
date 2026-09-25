<?php

/**
 * =========================================================
 * NEWS & INSIGHTS ARCHIVE
 * =========================================================
 */

get_header();
?>

<main class="insights-page">

    <!-- =====================================================
         INSIGHTS HERO
    ====================================================== -->
    <section class="insights-hero">

        <div class="container-fluid px-0">

            <div class="row g-0 align-items-stretch">

                <!-- LEFT CONTENT -->
                <div class="col-lg-6">

                    <div class="insights-hero-content">

                        <span class="eyebrow">
                            NEWS & INSIGHTS
                        </span>

                        <h1>
                            Security Insights
                            <span>That Keep You Ahead.</span>
                        </h1>

                        <p>
                            Explore the latest security trends, industry developments,
                            practical guidance and insights from Advent Security.
                        </p>

                    </div>

                </div>


                <!-- RIGHT IMAGE -->
                <div class="col-lg-6">

                    <div class="insights-hero-image">

                        <img
                            src="<?php echo esc_url(
                                        get_template_directory_uri() .
                                            '/assets/images/insights/news_banner.webp'
                                    ); ?>"
                            alt="Advent Security News and Insights"
                            width="1600"
                            height="900"
                            fetchpriority="high">

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- =====================================================
         INSIGHTS LIST
    ====================================================== -->
    <section class="insights-list-section">

        <div class="container">

            <!-- SECTION HEADER -->
            <div class="insights-list-header">

                <div>

                    <span class="eyebrow">
                        LATEST INSIGHTS
                    </span>

                    <h2>
                        Security News,
                        <span>Trends & Thinking.</span>
                    </h2>

                </div>

                <p>
                    Stay informed with insights covering physical security,
                    electronic security, risk, technology and the evolving
                    security landscape.
                </p>

            </div>


            <!-- =================================================
                 POSTS
            ================================================== -->

            <?php if (have_posts()) : ?>

                <div class="insights-post-list">

                    <?php while (have_posts()) : the_post(); ?>

                        <article class="insight-post">

                            <!-- ================================
                                 IMAGE
                            ================================= -->

                            <a
                                class="insight-post-image"
                                href="<?php the_permalink(); ?>"
                                aria-label="<?php echo esc_attr(
                                                sprintf(
                                                    'Read %s',
                                                    get_the_title()
                                                )
                                            ); ?>">

                                <?php if (has_post_thumbnail()) : ?>

                                    <?php
                                    the_post_thumbnail(
                                        'large',
                                        array(
                                            'loading' => 'lazy',
                                            'alt'     => esc_attr(
                                                get_the_title()
                                            ),
                                        )
                                    );
                                    ?>

                                <?php else : ?>

                                    <div class="insight-image-placeholder">

                                        <span>
                                            ADVENT SECURITY
                                        </span>

                                    </div>

                                <?php endif; ?>

                            </a>


                            <!-- ================================
                                 CONTENT
                            ================================= -->

                            <div class="insight-post-content">

                                <!-- META -->
                                <div class="insight-post-meta">

                                    <?php

                                    $categories = get_the_terms(
                                        get_the_ID(),
                                        'insight_category'
                                    );

                                    if (
                                        $categories &&
                                        !is_wp_error($categories)
                                    ) :
                                    ?>

                                        <span class="insight-category">

                                            <?php
                                            echo esc_html(
                                                $categories[0]->name
                                            );
                                            ?>

                                        </span>

                                    <?php endif; ?>


                                    <span class="insight-date">

                                        <?php
                                        echo esc_html(
                                            get_the_date('d/m/Y')
                                        );
                                        ?>

                                    </span>

                                </div>


                                <!-- TITLE -->
                                <h3>

                                    <a href="<?php the_permalink(); ?>">

                                        <?php the_title(); ?>

                                    </a>

                                </h3>


                                <!-- EXCERPT -->
                                <div class="insight-excerpt">

                                    <?php

                                    if (has_excerpt()) {

                                        the_excerpt();
                                    } else {

                                        echo esc_html(
                                            wp_trim_words(
                                                get_the_content(),
                                                28,
                                                '...'
                                            )
                                        );
                                    }

                                    ?>

                                </div>


                                <!-- READ MORE -->
                                <a
                                    class="insight-read-more"
                                    href="<?php the_permalink(); ?>">

                                    Read More

                                    <span aria-hidden="true">
                                        →
                                    </span>

                                </a>

                            </div>

                        </article>

                    <?php endwhile; ?>

                </div>


                <!-- =================================================
                     PAGINATION
                ================================================== -->

                <?php
                global $wp_query;


                $current_page = max(
                    1,
                    (int) get_query_var('paged')
                );

                $total_pages = (int) $wp_query->max_num_pages;

                if ($total_pages > 1) :

                    $pagination = paginate_links(
                        array(
                            'base'      => str_replace(
                                999999999,
                                '%#%',
                                esc_url(
                                    get_pagenum_link(999999999)
                                )
                            ),

                            'format'    => '?paged=%#%',

                            'current'   => $current_page,

                            'total'     => $total_pages,

                            'mid_size'  => 2,

                            'end_size'  => 1,

                            'prev_text' => '←',

                            'next_text' => '→',

                            'type'      => 'list',

                            'add_args'  => false,
                        )
                    );

                    if ($pagination) :
                ?>

                        <nav
                            class="insights-pagination"
                            aria-label="Insights pagination">

                            <?php echo wp_kses_post($pagination); ?>

                        </nav>

                    <?php endif; ?>

                <?php endif; ?>


            <?php else : ?>

                <!-- =================================================
                     EMPTY STATE
                ================================================== -->

                <div class="insights-empty">

                    <span class="eyebrow">
                        NEWS & INSIGHTS
                    </span>

                    <h2>
                        No insights available yet.
                    </h2>

                    <p>
                        New security insights and industry updates
                        will appear here.
                    </p>

                </div>

            <?php endif; ?>

        </div>

    </section>


    <!-- =========================================
         FINAL CTA
    ========================================== -->
    <section class="integrated-cta-insight">

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
get_footer();
?>
document.addEventListener("DOMContentLoaded", function () {
    /* =========================================================
       THEME SWITCHER
    ========================================================== */

    const themeToggle = document.querySelector(".theme-toggle");
    const body = document.body;

    if (themeToggle) {
        const savedTheme = localStorage.getItem("advent-theme");

        /*
         * Default theme is LIGHT.
         * Dark mode is applied only when the user
         * has previously selected dark mode.
         */
        if (savedTheme === "dark") {
            body.classList.add("theme-dark");
        } else {
            body.classList.remove("theme-dark");
        }

        function updateThemeToggle() {
            const isDark = body.classList.contains("theme-dark");

            themeToggle.setAttribute("aria-pressed", isDark ? "true" : "false");

            themeToggle.setAttribute(
                "aria-label",
                isDark ? "Switch to light mode" : "Switch to dark mode",
            );

            themeToggle.setAttribute(
                "title",
                isDark ? "Switch to light mode" : "Switch to dark mode",
            );
        }

        updateThemeToggle();

        themeToggle.addEventListener("click", function () {
            const isDark = !body.classList.contains("theme-dark");

            if (isDark) {
                body.classList.add("theme-dark");
                localStorage.setItem("advent-theme", "dark");
            } else {
                body.classList.remove("theme-dark");
                localStorage.setItem("advent-theme", "light");
            }

            updateThemeToggle();
        });
    }

    /* =========================================================
       MOBILE / TABLET NAVIGATION
    ========================================================== */

    const menuButton = document.querySelector(".mobile-menu-toggle");
    const navigation = document.querySelector(".main-navigation");

    if (!menuButton || !navigation) {
        return;
    }

    const megaParents = navigation.querySelectorAll(
        ":scope > ul > li.menu-item-has-children",
    );

    function isMobileNavigation() {
        return window.matchMedia("(max-width: 991.98px)").matches;
    }

    /* =========================================================
       OPEN / CLOSE MOBILE NAVIGATION
    ========================================================== */

    menuButton.addEventListener("click", function (event) {
        event.preventDefault();
        event.stopPropagation();

        const isOpen = navigation.classList.contains("active");

        if (isOpen) {
            closeMobileNavigation();
        } else {
            navigation.classList.add("active");
            menuButton.classList.add("active");

            menuButton.setAttribute("aria-expanded", "true");

            document.body.classList.add("mobile-nav-open");
        }
    });

    /* =========================================================
       CLOSE MOBILE NAVIGATION
    ========================================================== */

    function closeMobileNavigation() {
        navigation.classList.remove("active");
        menuButton.classList.remove("active");

        menuButton.setAttribute("aria-expanded", "false");

        document.body.classList.remove("mobile-nav-open");

        megaParents.forEach(function (item) {
            item.classList.remove("mobile-mega-open");

            const link = item.querySelector(":scope > a");

            if (link) {
                link.setAttribute("aria-expanded", "false");
            }
        });
    }

    /* =========================================================
       MOBILE / TABLET MEGA MENU
    ========================================================== */

    megaParents.forEach(function (item) {
        const link = item.querySelector(":scope > a");
        const megaMenu = item.querySelector(":scope > .advent-mega-menu");

        if (!link || !megaMenu) {
            return;
        }

        link.setAttribute("aria-haspopup", "true");
        link.setAttribute("aria-expanded", "false");

        /* -----------------------------------------------------
           OPEN / CLOSE MEGA MENU
        ----------------------------------------------------- */

        link.addEventListener("click", function (event) {
            if (!isMobileNavigation()) {
                return;
            }

            event.preventDefault();
            event.stopPropagation();

            const isOpen = item.classList.contains("mobile-mega-open");

            /* -------------------------------------------------
               Close all other mega menus
            ------------------------------------------------- */

            megaParents.forEach(function (otherItem) {
                if (otherItem !== item) {
                    otherItem.classList.remove("mobile-mega-open");

                    const otherLink = otherItem.querySelector(":scope > a");

                    if (otherLink) {
                        otherLink.setAttribute("aria-expanded", "false");
                    }
                }
            });

            /* -------------------------------------------------
               Toggle current mega menu
            ------------------------------------------------- */

            if (isOpen) {
                item.classList.remove("mobile-mega-open");

                link.setAttribute("aria-expanded", "false");
            } else {
                item.classList.add("mobile-mega-open");

                link.setAttribute("aria-expanded", "true");
            }
        });
    });

    /* =========================================================
       NORMAL NAVIGATION LINKS
    ========================================================== */

    navigation.querySelectorAll("a").forEach(function (link) {
        link.addEventListener("click", function () {
            if (!isMobileNavigation()) {
                return;
            }

            const parentItem = link.closest("li.menu-item-has-children");

            const hasMegaMenu =
                parentItem &&
                parentItem.querySelector(":scope > .advent-mega-menu");

            /*
             * Security Services / Electronic Security
             * are expandable menu groups.
             *
             * Do not close navigation when clicking them.
             */
            if (
                parentItem &&
                hasMegaMenu &&
                link === parentItem.querySelector(":scope > a")
            ) {
                return;
            }

            /*
             * Normal links close the mobile navigation.
             */
            closeMobileNavigation();
        });
    });

    /* =========================================================
       ESC KEY
    ========================================================== */

    document.addEventListener("keydown", function (event) {
        if (event.key !== "Escape") {
            return;
        }

        if (!isMobileNavigation()) {
            return;
        }

        closeMobileNavigation();
    });

    /* =========================================================
       RESET WHEN RETURNING TO DESKTOP
    ========================================================== */

    window.addEventListener("resize", function () {
        if (!isMobileNavigation()) {
            closeMobileNavigation();
        }
    });

    /* =========================================================
       FAQ
    ========================================================== */

    const faqItems = document.querySelectorAll(
        ".aviation-faq .faq-item, .ci-faq-section .faq-item",
    );

    faqItems.forEach(function (item) {
        const question = item.querySelector(".faq-question");

        if (!question) {
            return;
        }

        question.addEventListener("click", function () {
            const isOpen = item.classList.contains("is-open");

            /*
             * Close all other FAQs
             */
            faqItems.forEach(function (otherItem) {
                otherItem.classList.remove("is-open");

                const otherQuestion = otherItem.querySelector(".faq-question");

                if (otherQuestion) {
                    otherQuestion.setAttribute("aria-expanded", "false");
                }
            });

            /*
             * Open clicked FAQ
             */
            if (!isOpen) {
                item.classList.add("is-open");

                question.setAttribute("aria-expanded", "true");
            }
        });
    });
});

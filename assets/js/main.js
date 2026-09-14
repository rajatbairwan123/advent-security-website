document.addEventListener("DOMContentLoaded", function () {
    /* =========================================
       MOBILE MENU
    ========================================== */

    const menuButton = document.querySelector(".mobile-menu-toggle");
    const navigation = document.querySelector(".main-navigation");

    if (menuButton && navigation) {
        menuButton.addEventListener("click", function () {
            navigation.classList.toggle("active");
            menuButton.classList.toggle("active");

            const isOpen = navigation.classList.contains("active");

            menuButton.setAttribute("aria-expanded", isOpen ? "true" : "false");
        });

        /* Close menu when clicking a navigation link */

        navigation.querySelectorAll("a").forEach(function (link) {
            link.addEventListener("click", function () {
                navigation.classList.remove("active");
                menuButton.classList.remove("active");

                menuButton.setAttribute("aria-expanded", "false");
            });
        });
    }

    /* =========================================
       THEME SWITCHER
========================================== */

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
});

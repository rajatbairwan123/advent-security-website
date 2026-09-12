document.addEventListener("DOMContentLoaded", function () {
    /* =========================================
       MOBILE MENU
    ========================================= */

    const menuButton = document.querySelector(".mobile-menu-toggle");
    const navigation = document.querySelector(".main-navigation");

    if (menuButton && navigation) {
        menuButton.addEventListener("click", function () {
            navigation.classList.toggle("mobile-active");
        });
    }

    /* =========================================
       THEME SWITCHER
    ========================================= */

    const themeToggle = document.querySelector(".theme-toggle");
    const body = document.body;

    if (themeToggle) {
        // Get previously selected theme
        const savedTheme = localStorage.getItem("advent-theme");

        // Apply saved theme
        if (savedTheme === "dark") {
            body.classList.add("theme-dark");
        } else {
            body.classList.remove("theme-dark");
        }

        // Update icon and accessibility attributes
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

        // Set initial state
        updateThemeToggle();

        // Toggle theme
        themeToggle.addEventListener("click", function () {
            body.classList.toggle("theme-dark");

            const isDark = body.classList.contains("theme-dark");

            // Remember user's choice
            localStorage.setItem("advent-theme", isDark ? "dark" : "light");

            // Update button
            updateThemeToggle();
        });
    }
});

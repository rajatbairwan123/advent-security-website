document.addEventListener("DOMContentLoaded", function () {
    /* =========================================
       MOBILE MENU
    ========================================== */

    const menuButton = document.querySelector(".mobile-menu-toggle");
    const navigation = document.querySelector(".main-navigation");

    if (menuButton && navigation) {
        menuButton.addEventListener("click", function () {
            const isOpen = navigation.classList.toggle("mobile-active");

            menuButton.classList.toggle("active", isOpen);

            menuButton.setAttribute("aria-expanded", isOpen ? "true" : "false");

            /* Close Services submenu when hamburger menu closes */
            if (!isOpen) {
                const serviceItem = navigation.querySelector(
                    ".menu-item-has-children.mobile-submenu-open",
                );

                if (serviceItem) {
                    serviceItem.classList.remove("mobile-submenu-open");
                }
            }
        });
    }

    /* =========================================
       MOBILE SERVICES SUBMENU
    ========================================== */

    const serviceItem = document.querySelector(
        ".main-navigation .menu-item-has-children",
    );

    if (serviceItem) {
        const serviceLink = serviceItem.querySelector(":scope > a");

        if (serviceLink) {
            serviceLink.addEventListener("click", function (event) {
                if (window.innerWidth <= 767.98) {
                    event.preventDefault();

                    serviceItem.classList.toggle("mobile-submenu-open");
                }
            });
        }
    }

    /* =========================================
       THEME SWITCHER
    ========================================== */

    const themeToggle = document.querySelector(".theme-toggle");
    const body = document.body;

    if (themeToggle) {
        const savedTheme = localStorage.getItem("advent-theme");

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
            body.classList.toggle("theme-dark");

            const isDark = body.classList.contains("theme-dark");

            localStorage.setItem("advent-theme", isDark ? "dark" : "light");

            updateThemeToggle();
        });
    }
});

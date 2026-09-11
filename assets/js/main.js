document.addEventListener('DOMContentLoaded', function () {

    const menuButton = document.querySelector('.mobile-menu-toggle');
    const navigation = document.querySelector('.main-navigation');

    if (menuButton && navigation) {

        menuButton.addEventListener('click', function () {

            navigation.classList.toggle('mobile-active');

        });

    }

});


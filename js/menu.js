document.addEventListener('DOMContentLoaded', function () {
    const toggleButton = document.querySelector('.menu-toggle');
    const menu = document.querySelector('.top-bar');

    toggleButton.addEventListener('click', () => {
        menu.classList.toggle('active');
    });
});
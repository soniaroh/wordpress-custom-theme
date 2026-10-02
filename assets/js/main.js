document.addEventListener('DOMContentLoaded', () => {
    const links = document.querySelectorAll('.site-nav a');

    links.forEach((link) => {
        link.addEventListener('click', () => {
            document.querySelector('.site-nav')?.classList.remove('is-open');
        });
    });
});

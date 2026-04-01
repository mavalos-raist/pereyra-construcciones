import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
    const header = document.querySelector('[data-site-header]');
    const navToggle = document.querySelector('[data-nav-toggle]');
    const navMenu = document.querySelector('[data-nav-menu]');
    const navLinks = document.querySelectorAll('[data-nav-menu] a');

    const syncHeader = () => {
        if (!header) {
            return;
        }

        header.classList.toggle('is-scrolled', window.scrollY > 12);
    };

    syncHeader();

    window.addEventListener('scroll', syncHeader, { passive: true });

    if (navToggle && navMenu) {
        navToggle.addEventListener('click', () => {
            const expanded = navToggle.getAttribute('aria-expanded') === 'true';

            navToggle.setAttribute('aria-expanded', String(!expanded));
            navMenu.classList.toggle('hidden');
        });

        navLinks.forEach((link) => {
            link.addEventListener('click', () => {
                navToggle.setAttribute('aria-expanded', 'false');
                navMenu.classList.add('hidden');
            });
        });
    }
});

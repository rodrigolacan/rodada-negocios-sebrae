import './bootstrap';

// Toggle menu open/close
const menuToggle = document.getElementById('menu-toggle');
const mobileMenu = document.getElementById('mobile-menu');
const menuIcon = document.querySelector('.menu-icon');

menuToggle.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
    // Adiciona e remove classes para animar o ícone
    menuIcon.children[0].classList.toggle('rotate-45');
    menuIcon.children[1].classList.toggle('opacity-0');
    menuIcon.children[2].classList.toggle('-rotate-45');
});
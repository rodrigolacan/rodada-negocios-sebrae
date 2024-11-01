import './bootstrap';

// Toggle menu open/close
const menuToggle = document.getElementById('menu-toggle');
const mobileMenu = document.getElementById('mobile-menu');
const menuIcon = document.querySelector('.menu-icon');

// Função para abrir ou fechar o menu
const toggleMenu = () => {
    mobileMenu.classList.toggle('hidden');
    menuIcon.children[0].classList.toggle('rotate-45');
    menuIcon.children[1].classList.toggle('opacity-0');
    menuIcon.children[2].classList.toggle('-rotate-45');
};

// Evento para abrir/fechar o menu ao clicar no ícone
menuToggle.addEventListener('click', (event) => {
    event.stopPropagation(); // Evita que o clique no botão feche o menu
    toggleMenu();
});

// Evento para fechar o menu ao clicar fora dele
document.addEventListener('click', (event) => {
    const isClickInside = mobileMenu.contains(event.target) || menuToggle.contains(event.target);

    if (!isClickInside && !mobileMenu.classList.contains('hidden')) {
        toggleMenu(); // Fecha o menu se estiver aberto e o clique foi fora dele
    }
});

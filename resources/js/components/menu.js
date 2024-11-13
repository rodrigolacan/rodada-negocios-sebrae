// Elementos de interface
const menuToggleCheckbox = document.querySelector('.hamburger input');
const mobileMenu = document.getElementById('mobile-menu');

// Função para controlar a visibilidade do menu
function toggleMenu() {
    if (menuToggleCheckbox.checked) {
        mobileMenu.classList.remove('hidden'); // Abre o menu
    } else {
        mobileMenu.classList.add('hidden'); // Fecha o menu
    }

}

// Monitora mudanças no estado do checkbox para abrir/fechar o menu
menuToggleCheckbox.addEventListener('change', toggleMenu);

// Fecha o menu se clicar fora dele
document.addEventListener('click', (event) => {
    // Verifica se o clique foi fora do menu e do ícone do hambúrguer
    if (!mobileMenu.contains(event.target) && !menuToggleCheckbox.parentElement.contains(event.target)) {
        if (menuToggleCheckbox.checked) {
            menuToggleCheckbox.checked = false; // Desmarca o checkbox (fecha o menu)
            mobileMenu.classList.add('hidden');
        }
    }
});

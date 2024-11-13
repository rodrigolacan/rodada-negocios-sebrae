// Elementos de interface
const dropdownProfile = document.getElementById('dropdown-profile');
const avatarToggle = document.getElementById('avatar-toggle');
const menuToggleCheckbox = document.querySelector('.hamburger input'); // Adicione essa linha para referenciar o menu

// Verifica cliques fora do dropdown e do avatarToggle para fechá-lo
document.addEventListener('click', (event) => {
    if (!dropdownProfile.contains(event.target) && !avatarToggle.contains(event.target)) {
        dropdownProfile.classList.add('hidden');
    }
});

// Alterna a visibilidade do dropdown ao clicar no avatar
avatarToggle.addEventListener('click', (event) => {
    event.stopPropagation(); // Impede o fechamento imediato ao clicar no avatar
    dropdownProfile.classList.toggle('hidden'); // Alterna a classe 'hidden' para abrir/fechar o dropdown

    // Fecha o menu se o dropdown for aberto
    if (!dropdownProfile.classList.contains('hidden') && menuToggleCheckbox.checked) {
        menuToggleCheckbox.checked = false;
        document.getElementById('mobile-menu').classList.add('hidden');
    }
});

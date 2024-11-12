<header>
    <!-- Navbar -->
    <nav class="bg-white fixed w-full top-0 left-0 flex items-center justify-between h-20 border-l-12 border-r-12 border-transparent px-12 shadow-md z-10">
        <!-- Avatar e nome do usuário (lado esquerdo) -->
        <div class="flex items-center gap-4">
            <!-- Avatar que abre o menu -->
            <img id="avatar-toggle" src="{{ asset('img/avatar.svg') }}" alt="avatar usuário" class="h-11 w-11 rounded-full cursor-pointer">
            <div class="font-medium">
                <div>Joseph</div>
            </div>
        </div>

        <!-- Menu -->
        <x-menu :menuItems="[['href' => '#ofertas', 'text' => 'Ofertas'], ['href' => '#demandas', 'text' => 'Demandas'], ['href' => '#eventos', 'text' => 'Eventos'], ['href' => '#chat', 'text' => 'Chat e Videochamada'], ['href' => '#relatorio', 'text' => 'Relatório']]" :showLogin="false" />

        <!-- Logo (lado direito) em md e acima -->
        <div class="flex-shrink-0 flex items-center mr-2 invisible md:visible">
            <x-logo />
        </div>

        <!-- Mobile Menu Button -->
        <div class="md:hidden flex items-center">
            <div class="flex-shrink-0 flex items-center mr-2">
                <x-logo />
            </div>
            <x-button-menu />
        </div>
    </nav>
</header>

<script>
    // Script para alternar a visibilidade do menu de avatar
    document.getElementById('avatar-toggle').addEventListener('click', function() {
        const menu = document.getElementById('avatar-menu');
        menu.classList.toggle('hidden');
    });
</script>


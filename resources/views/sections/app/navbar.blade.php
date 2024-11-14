<header>
    <!-- Navbar -->
    <nav
        class="bg-white fixed w-full top-0 left-0 flex items-center justify-between h-20 border-l-12 border-r-12 border-transparent px-5 md:px-12 shadow-md z-10">
        <!-- Avatar e nome do usuário (lado esquerdo) -->
        <div class="flex items-center gap-4 relative">
            <img id="avatar-toggle" src="{{ asset('img/avatar.svg') }}" alt="avatar usuário"
                class="h-11 w-11 rounded-full cursor-pointer">
            <div class="font-medium">
                <div>Joseph</div>
            </div>
            <div id="dropdown-profile"
                class="fixed hidden hidden space-y-1 py-4 px-6 bg-white shadow-lg rounded-lg border border-[#D1D5DB] left-0 top-20 z-10">
                <!-- Exibir os itens do menu -->
                <a href="#"
                    class="block text-lg hover:bg-gray-200 rounded-full p-2 transition duration-300 font-bold text-right">
                    <span class="inline-block h-5 w-5"><img class="h-full w-full" src="{{ asset('img/settings.svg') }}" alt="settings"></span>
                    Editar Perfil
                </a>
                <a href="#"
                    class="block text-lg hover:bg-gray-200 rounded-full p-2 transition duration-300 font-bold text-right">
                    <span class="inline-block h-5 w-5"><img class="h-full w-full" src="{{ asset('img/exit.svg') }}" alt="exit"></span>
                    Logout
                </a>
            </div>
        </div>        

        <!-- Menu -->
        <x-menu :menuItems="[
            ['href' => '#ofertas', 'text' => 'Ofertas'],
            ['href' => '#demandas', 'text' => 'Demandas'],
            ['href' => '#eventos', 'text' => 'Eventos'],
            ['href' => '#chat', 'text' => 'Chat e Videochamada'],
            ['href' => '#relatorio', 'text' => 'Relatório'],
        ]" :showLogin="false" />

        <!-- Logo (lado direito) em md e acima -->
        <div class="flex-shrink-0 flex items-center mr-2 invisible lg:visible">
            <x-logo />
        </div>

        <!-- Mobile Menu Button -->
        <div class="lg:hidden flex items-center">
            <div class="flex-shrink-0 flex items-center mr-2">
                <x-logo />
            </div>
            <x-button-menu />
        </div>
    </nav>
</header>

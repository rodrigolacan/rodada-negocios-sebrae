<header>
    <!-- Navbar -->
    <nav
        class="bg-white fixed w-full top-0 left-0 flex items-center justify-between h-20 border-l-12 border-r-12 border-transparent px-12 shadow-md z-10">
        <!-- Logo -->
        <div class="flex-shrink-0">
            <x-logo />
        </div>

        <!-- Menu -->
        <x-menu :menuItems="[
            ['href' => '#sobre', 'text' => 'Sobre a plataforma'],
            ['href' => '#como-funciona', 'text' => 'Como Funciona?'],
            ['href' => '#recursos', 'text' => 'Recursos e Benefícios'],
        ]" :showLogin="true" />

        <!-- Mobile Menu Button -->
        <div class="md:hidden flex items-center">
            <x-button-menu />
        </div>
    </nav>
</header>

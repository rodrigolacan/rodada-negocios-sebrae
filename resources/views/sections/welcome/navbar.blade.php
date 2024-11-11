<header>
<!-- Navbar -->
<nav
    class="bg-white fixed w-full top-0 left-0 flex items-center justify-between h-20 border-l-12 border-r-12 border-transparent px-12 shadow-md z-10">
    <!-- Logo -->
    <div class="flex-shrink-0">
        <x-logo />
    </div>
    <!-- Menu -->
    <x-menu />
    <!-- Mobile Menu Button -->
    <div class="md:hidden flex items-center">
        <button id="menu-toggle" class="focus:outline-none">
            <!-- Ícone do menu para dispositivos móveis com animação -->
            <div class="menu-icon">
                <span class="block w-6 h-0.5 bg-[#062146] transition-transform duration-300 origin-top-left"></span>
                <span class="block w-6 h-0.5 bg-[#062146] my-1 transition-opacity duration-300"></span>
                <span class="block w-6 h-0.5 bg-[#062146] transition-transform duration-300 origin-bottom-left"></span>
            </div>
        </button>
    </div>
</nav>
</header>
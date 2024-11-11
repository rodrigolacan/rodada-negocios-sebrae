<!-- Menu items -->
<div class="hidden md:flex items-center space-x-2">
    <a href="#sobre" class="text-lg hover:bg-gray-200 rounded-full p-2 transition duration-300">Sobre a plataforma</a>
    <a href="#como-funciona" class="text-lg hover:bg-gray-200 rounded-full p-2 transition duration-300">Como Funciona?</a>
    <a href="#recursos" class="text-lg hover:bg-gray-200 rounded-full p-2 transition duration-300">Recursos e Benefícios</a>
    <!-- Avatar e ENTRAR -->
    <a href="{{ route('login_selection') }}" class="flex items-center text-lg font-semibold hover:bg-gray-200 rounded-full p-2 transition duration-300">
        <img src="{{ asset('img/avatar.svg') }}" alt="avatar login" class="mr-2 h-6 w-6"> ENTRAR
    </a>
</div>

<!-- Menu Mobile -->
<div id="mobile-menu" class="fixed md:hidden hidden space-y-1 py-4 px-6 bg-white shadow-lg rounded-lg border border-[#D1D5DB] right-0 top-20 z-10">
    <a href="#sobre" class="block text-lg hover:bg-gray-200 rounded-full p-2 transition duration-300 font-bold text-right">Sobre a plataforma</a>
    <a href="#como-funciona" class="block text-lg hover:bg-gray-200 rounded-full p-2 transition duration-300 font-bold text-right">Como Funciona?</a>
    <a href="#recursos" class="block text-lg hover:bg-gray-200 rounded-full p-2 transition duration-300 font-bold text-right">Recursos e Benefícios</a>

    <!-- Linha e Item "ENTRAR" com avatar -->
    <hr class="border-t border-[#D1D5DB]">
    <a href="{{ route('login_selection') }}" class="block text-lg font-bold text-right hover:bg-gray-200 rounded-full p-2 transition duration-300">
        <div class="flex items-center justify-end">
            <img src="{{ asset('img/avatar.svg') }}" alt="avatar login" class="mr-2 h-6 w-6"> ENTRAR
        </div>
    </a>
</div>

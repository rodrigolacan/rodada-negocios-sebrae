<div class="flex justify-between items-center">

    <!-- Logo à esquerda (apenas em telas grandes) -->
    <div class="flex-shrink-0 flex items-center mr-2 hidden lg:flex">
        <x-logo />
    </div>

    <!-- Hambúrguer e Logo (para telas pequenas) -->
    <div class="lg:hidden flex items-center">
        <!-- Ícone de hambúrguer controlando a visibilidade do menu -->
        <div class="hamburger cursor-pointer" wire:click="toggleMenu">
            <input type="checkbox" wire:model="isOpen" class="hidden">
            <svg viewBox="0 0 32 32" class="{{ $isOpen ? 'transform rotate-[-45deg]' : '' }} transition-transform duration-500">
                <path class="line line-top-bottom {{ $isOpen ? 'stroke-dasharray-[20,300] stroke-dashoffset-[-32.42]' : 'stroke-dasharray-[12,63]' }}"
                    d="M27 10 13 10C10.8 10 9 8.2 9 6 9 3.5 10.8 2 13 2 15.2 2 17 3.8 17 6L17 26C17 28.2 18.8 30 21 30 23.2 30 25 28.2 25 26 25 23.8 23.2 22 21 22L7 22"></path>
                <path class="line" d="M7 16 27 16"></path>
            </svg>
        </div>
    </div>

    <!-- Menu Mobile -->
    <div id="mobile-menu" class="fixed lg:hidden {{ $isOpen ? 'block' : 'hidden' }} space-y-1 py-4 px-6 bg-white shadow-lg rounded-lg border border-[#D1D5DB] right-0 top-20 z-10">
        @foreach ($menuItems as $item)
            <a href="{{ $item['href'] }}" class="block text-lg hover:bg-gray-200 rounded-full p-2 transition duration-300 font-bold text-right">
                {{ $item['text'] }}
            </a>
        @endforeach

        @if ($showLogin)
            <hr class="border-t border-[#D1D5DB]">
            <a href="{{ route('login_selection') }}" class="block text-lg font-bold text-right hover:bg-gray-200 rounded-full p-2 transition duration-300">
                <div class="flex items-center justify-end">
                    <img src="{{ asset('img/avatar.svg') }}" alt="avatar login" class="mr-2 h-6 w-6"> ENTRAR
                </div>
            </a>
        @endif
    </div>

</div>


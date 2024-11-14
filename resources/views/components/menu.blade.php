<div class="hidden lg:flex items-center space-x-2">
    <!-- Exibir os itens do menu -->
    @foreach ($menuItems as $item)
        <a href="{{ $item['href'] }}" class="text-lg hover:bg-gray-200 rounded-full p-2 transition duration-300">
            {{ $item['text'] }}
        </a>
    @endforeach

    <!-- Avatar e ENTRAR (se showLogin for verdadeiro) -->
    @if ($showLogin)
        <a href="{{ route('login_selection') }}" class="flex items-center text-lg font-semibold hover:bg-gray-200 rounded-full p-2 transition duration-300">
            <img src="{{ asset('img/avatar.svg') }}" alt="avatar login" class="mr-2 h-6 w-6"> ENTRAR
        </a>
    @endif
</div>

<!-- Menu Mobile -->
<div id="mobile-menu" class="fixed lg:hidden hidden space-y-1 py-4 px-6 bg-white shadow-lg rounded-lg border border-[#D1D5DB] right-0 top-20 z-10">
    <!-- Exibir os itens do menu -->
    @foreach ($menuItems as $item)
        <a href="{{ $item['href'] }}" class="block text-lg hover:bg-gray-200 rounded-full p-2 transition duration-300 font-bold text-right">
            {{ $item['text'] }}
        </a>
    @endforeach

    <!-- Linha e Item "ENTRAR" com avatar -->
    @if ($showLogin)
        <hr class="border-t border-[#D1D5DB]">
        <a href="{{ route('login_selection') }}" class="block text-lg font-bold text-right hover:bg-gray-200 rounded-full p-2 transition duration-300">
            <div class="flex items-center justify-end">
                <img src="{{ asset('img/avatar.svg') }}" alt="avatar login" class="mr-2 h-6 w-6"> ENTRAR
            </div>
        </a>
    @endif
</div>
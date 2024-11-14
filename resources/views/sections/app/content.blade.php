<main class="mt-24 px-5 md:px-12">
    <h1 class="text-2xl font-semibold">Seja Bem Vindo!</h1>

    <!-- Div do Search -->
    <div id="search"
        class="mt-5 h-[50px] w-auto max-w-md rounded-full bg-transparent border border-[#d9d9d9] flex items-center px-4 mx-auto">
        <img src="{{ asset('img/search.svg') }}" class="h-6 w-6 text-gray-400">
        <input type="search" placeholder="Busque por fornecedores e produtos"
            class="flex-grow bg-transparent border-none text-base text-gray-400 text-center outline-none ml-2">
    </div>

    <!-- Seção Ofertas -->
    <div class="mt-5 flex items-center">
        <img src="{{ asset('img/dollar.svg') }}" class="h-6 w-6 mr-2 md:h-8 md:w-8">
        <span class="font-poppins text-base font-semibold md:text-xl">Ofertas</span>
    </div>

    <!-- Div do Card -->
    <div class="mt-5 flex items-center bg-transparent border border-[#d9d9d9] rounded-[17px] 
            h-56 w-auto max-w-5xl mx-auto">
    </div>
</main>

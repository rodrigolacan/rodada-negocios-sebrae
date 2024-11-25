@extends('layouts.main')

@section('head')
    @include('sections.head')
@endsection

@section('navbar')
    <header>
        <!-- Navbar -->
        <nav
            class="bg-white fixed w-full top-0 left-0 flex items-center justify-between h-20 border-l-12 border-r-12 border-transparent px-5 md:px-12 shadow-md z-10">
            <!-- Avatar e nome do usuário (lado esquerdo) -->
            <div class="flex items-center gap-4 relative">
                @livewire('profile-dropdown')
                <div class="font-medium">
                    <div>Joseph</div>
                </div>
            </div>
            <!-- Menu -->
            @livewire('menu', [
                'menuItems' => [['href' => '#ofertas', 'text' => 'Ofertas'], ['href' => '#demandas', 'text' => 'Demandas'], ['href' => '#eventos', 'text' => 'Eventos'], ['href' => '#chat', 'text' => 'Chat e Videochamandas'], ['href' => '#relatorios', 'text' => 'Relatórios']],
                'showLogin' => false,
            ])
            <!-- Logo (lado direito) em md e acima -->
            <div class="flex-shrink-0 flex items-center mr-2 hidden lg:block">
                @livewire('logo')
            </div>
        </nav>
    </header>
@endsection

@section('content')
    <main class="mt-24 px-5 md:px-12">
        <div class="max-w-md mx-auto"> <!-- Container centralizado -->
            <h1 class="text-2xl font-semibold">Seja Bem Vindo!</h1>

            <!-- Div do Search -->
            <div id="search"
                class="mt-5 h-[50px] w-full rounded-full bg-transparent border border-[#d9d9d9] flex items-center px-4">
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
            @livewire('card')
            @livewire('detalhes-card')

            <!-- Seção Ofertas -->
            <div class="mt-5 flex items-center">
                <img src="{{ asset('img/point.svg') }}" class="h-6 w-6 mr-2 md:h-8 md:w-8">
                <span class="font-poppins text-base font-semibold md:text-xl">Evento em destaque</span>
            </div>
            <div class="mt-5 bg-[#d9d9d9] rounded-2xl h-44 w-auto max-w-3xl mx-auto p-5 grid grid-cols-3 w-full max-w-md">
                <div class="flex col-start-1 col-span-2 flex-col items-start">
                    <!-- Nome do evento alinhado à esquerda -->
                    <div class="font-bold text-sm">
                        <span>Nome do Evento</span>
                    </div>
                    <!-- Data abaixo do nome -->
                    <div class="text-xs">
                        <span>Data</span>
                    </div>
                </div>
                <!-- Linha do botão "Ver detalhes" centralizada e alinhada ao fundo -->
                <div class="flex col-span-3 flex-col justify-end">
                    <div class="flex justify-center mt-auto">
                        <div class="flex text-xs font-bold space-x-2 bg-white p-2 rounded-2xl max-w-28 h-8">
                            <span>Ver detalhes</span>
                        </div>
                    </div>
                </div>
            </div>
            @livewire('calendar');

        </div>

    </main>
@endsection

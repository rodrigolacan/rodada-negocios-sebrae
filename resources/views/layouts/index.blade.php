<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template Laravel com Tailwind CSS</title>
    @vite(['resources/css/app.css', 'resources/js/app.js']) <!-- Certifique-se de que o Vite está funcionando -->
    <link rel="icon" href="{{ asset('img/logo-conectabiz.ico') }}" type="image/x-icon">
</head>

<body>
    <!-- Navbar -->
    <nav class="bg-white fixed w-full top-0 left-0 flex items-center justify-between h-20 border-l-12 border-r-12 border-transparent px-12 shadow-md z-10">
        <!-- Logo -->
        <div class="flex-shrink-0">
            <!-- Logo padrão (desktop) -->
            <img src="{{ asset('img/logo-conectabiz.svg') }}" alt="logo conectabiz" class="h-8 md:block hidden">
            <!-- Logo alternativa (móvel) -->
            <img src="{{ asset('img/logo-conectabiz-mobile.svg') }}" alt="logo conectabiz mobile"
                class="h-8 md:hidden block">
        </div>
        <!-- Menu items -->
        <div class="hidden md:flex items-center space-x-12">
            <a href="#sobre"
                class="text-lg text-[#062146] hover:bg-gray-200 rounded-full p-2 transition duration-300">Sobre a
                plataforma</a>
            <a href="#como-funciona"
                class="text-lg text-[#062146] hover:bg-gray-200 rounded-full p-2 transition duration-300">Como
                Funciona?</a>
            <a href="#recursos"
                class="text-lg text-[#062146] hover:bg-gray-200 rounded-full p-2 transition duration-300">Recursos e
                Benefícios</a>
            <!-- Avatar e ENTRAR -->
            <a href="#entrar"
                class="flex items-center text-lg text-[#062146] font-semibold hover:bg-gray-200 rounded-full p-2 transition duration-300">
                <img src="{{ asset('img/avatar.svg') }}" alt="avatar login" class="mr-2 h-6 w-6">
                ENTRAR
            </a>
        </div>
        <!-- Mobile Menu Button -->
        <div class="md:hidden flex items-center">
            <button id="menu-toggle" class="text-[#062146] focus:outline-none">
                <!-- Ícone do menu para dispositivos móveis com animação -->
                <div class="menu-icon">
                    <span class="block w-6 h-0.5 bg-[#062146] transition-transform duration-300 origin-top-left"></span>
                    <span class="block w-6 h-0.5 bg-[#062146] my-1 transition-opacity duration-300"></span>
                    <span
                        class="block w-6 h-0.5 bg-[#062146] transition-transform duration-300 origin-bottom-left"></span>
                </div>
            </button>
        </div>
    </nav>

    <!-- Menu Mobile Alterado -->
    <div id="mobile-menu"
        class="md:hidden hidden space-y-1 py-4 px-6 bg-white shadow-lg rounded-lg border border-[#D1D5DB] absolute right-0 top-20 z-10">
        <a href="#sobre"
            class="block text-lg text-[#062146] hover:bg-gray-200 rounded-full p-2 transition duration-300 font-bold text-right">Sobre
            a plataforma</a>
        <a href="#como-funciona"
            class="block text-lg text-[#062146] hover:bg-gray-200 rounded-full p-2 transition duration-300 font-bold text-right">Como
            Funciona?</a>
        <a href="#recursos"
            class="block text-lg text-[#062146] hover:bg-gray-200 rounded-full p-2 transition duration-300 font-bold text-right">Recursos
            e Benefícios</a>

        <!-- Linha e Item "ENTRAR" com avatar -->
        <hr class="border-t border-[#D1D5DB]">
        <a href="#entrar"
            class="block text-lg text-[#062146] font-bold text-right hover:bg-gray-200 rounded-full p-2 transition duration-300">
            <div class="flex items-center justify-end">
                <img src="{{ asset('img/avatar.svg') }}" alt="avatar login" class="mr-2 h-6 w-6">
                ENTRAR
            </div>
        </a>
    </div>
    <!-- Banner -->
    <div class="mt-0 md:mt-[110px] mx-0 md:mx-40 relative">
        <img src="{{ asset('img/banner.png') }}" alt="Banner Descrição"
            class="w-full h-[720px] object-cover rounded-0 md:rounded-3xl w-[440px] md:w-[1600px] h-[440px] max-h-[600px] md:h-[720px] mx-auto md:absolute object-[94%] md:object-center">

        <!-- Conteúdo dividido em colunas -->
        <div class="absolute top-[200px] left-0 right-0 flex invisible md:visible mx-[100px]">
            <!-- Coluna esquerda com largura fixa de 400px -->
            <div class="flex flex-col justify-center w-[400px]">
                <img src="{{ asset('img/logo-conectabiz-white.svg') }}" alt="logo white"><br>
                <h1 class="text-2xl font-bold text-white">Bem-vindo ao Conectabiz!</h1>
                <p class="text-white mt-2 text-justify">A plataforma que une empreendedores e oportunidades, promovendo
                    conexões valiosas para o crescimento do seu negócio. Aqui, você encontra recursos e informações que
                    fazem a diferença. Descubra, conecte-se e expanda seus horizontes!</p>
            </div>
            <!-- Coluna direita -->
            <div class="flex-1"></div> <!-- Coluna vazia à direita para espaçamento -->
        </div>
    </div>
</body>

</html>

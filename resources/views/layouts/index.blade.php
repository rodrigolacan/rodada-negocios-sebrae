<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template Laravel com Tailwind CSS</title>
    @vite(['resources/css/app.css', 'resources/js/app.js']) <!-- Certifique-se de que o Vite está funcionando -->
    <link rel="icon" href="{{ asset('img/logo-conectabiz.ico') }}" type="image/x-icon">

</head>

<body class="bg-[#F9F9F9]">
    <!-- Navbar -->
    <nav
        class="bg-white fixed w-full top-0 left-0 flex items-center justify-between h-20 border-l-12 border-r-12 border-transparent px-12 shadow-md z-10">
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
        class="fixed md:hidden hidden space-y-1 py-4 px-6 bg-white shadow-lg rounded-lg border border-[#D1D5DB] right-0 top-20 z-10">
        <a href="#sobre"
            class="block text-lg text-[#062146] hover:bg-gray-200 rounded-full p-2 transition duration-300 font-bold text-right">Sobre
            a
            plataforma</a>
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
    <div class="relative mt-20">
        <img src="{{ asset('img/banner.png') }}" alt="Banner Descrição"
            class="w-full h-[720px] object-cover w-[440px] md:w-[1920px] h-[440px] max-h-[450px] md:h-[720px] mx-auto object-[94%] md:object-center">

        <!-- Conteúdo do banner em colunas -->
        <div class="absolute top-[100px] left-0 right-0 flex invisible md:visible mx-[100px]">
            <div class="flex flex-col justify-center w-[400px]">
                <img src="{{ asset('img/logo-conectabiz-white.svg') }}" alt="logo white"><br>
                <h1 class="text-2xl font-bold text-white">Bem-vindo ao Conectabiz!</h1>
                <p class="text-white mt-2 text-justify">A plataforma que une empreendedores e oportunidades,
                    promovendo
                    conexões valiosas para o crescimento do seu negócio. Aqui, você encontra recursos e informações
                    que
                    fazem a diferença. Descubra, conecte-se e expanda seus horizontes!</p>
            </div>
            <div class="flex-1"></div>
        </div>
    </div>
    <!-- Contêiner principal usando grid -->
    <div class="grid gap-8 mx-0 md:mx-4 md:mx-40 mt-8" style="grid-template-rows: auto;">

        <!-- Contêiner dos quadrados -->
        <div class="grid grid-cols-2 md:grid-cols-5 gap-4 mx-4">
            <div
                class="items-start relative bg-white bg-opacity-30 border border-[#D9D9D9] rounded-lg p-4 h-32 md:h-24">
                <img src="{{ asset('img/idea.svg') }}" alt="Icon 1" class="w-[30px] h-[30px] absolute top-2 left-2" />
                <p class="text-center mt-8 font-bold uppercase">Texto do Quadrado 1</p>
            </div>

            <div
                class="items-start relative bg-white bg-opacity-30 border border-[#D9D9D9] rounded-lg p-4 h-32 md:h-24">
                <img src="{{ asset('img/hands.svg') }}" alt="Icon 2"
                    class="w-[30px] h-[30px] absolute top-2 left-2" />
                <p class="text-center mt-8 font-bold uppercase">Texto do Quadrado 2</p>
            </div>

            <div
                class="items-start relative bg-white bg-opacity-30 border border-[#D9D9D9] rounded-lg p-4 h-32 md:h-24">
                <img src="{{ asset('img/profit.svg') }}" alt="Icon 3"
                    class="w-[30px] h-[30px] absolute top-2 left-2" />
                <p class="text-center mt-8 font-bold uppercase">Texto do Quadrado 3</p>
            </div>

            <div
                class="items-start relative bg-white bg-opacity-30 border border-[#D9D9D9] rounded-lg p-4 h-32 md:h-24">
                <img src="{{ asset('img/tools.svg') }}" alt="Icon 4"
                    class="w-[30px] h-[30px] absolute top-2 left-2" />
                <p class="text-center mt-8 font-bold uppercase">Texto do Quadrado 4</p>
            </div>

            <div
                class="items-start relative bg-white bg-opacity-30 border border-[#D9D9D9] rounded-lg p-4 h-32 md:h-24">
                <img src="{{ asset('img/messenger.svg') }}" alt="Icon 5"
                    class="w-[30px] h-[30px] absolute top-2 left-2" />
                <p class="text-center mt-8 font-bold uppercase">Texto do Quadrado 5</p>
            </div>
        </div>

        <!-- Título "Sobre a Plataforma ConectaBiz" -->
        <div id="sobre" class="mx-8 md:mx-40 mt-8">
            <h1 class="text-[#062146] font-bold text-3xl md:text-4xl text-center mb-6">
                Sobre a Plataforma ConectaBiz
            </h1>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                <!-- Coluna da Imagem -->
                <div class="flex justify-center md:justify-end">
                    <img src="{{ asset('img/business.svg') }}" alt="Icon 5" class="h-[300px] md:h-[400px]" />
                </div>

                <!-- Coluna do Texto -->
                <div>
                    <h2 class="text-lg font-bold">ConectaBiz é mais do que uma plataforma é a sua porta de entrada para
                        um mundo de oportunidades!</h2></br>
                    <p class="text-justify text-[#062146]">
                        Desenvolvida especialmente para empreendedores, nossa plataforma oferece um espaço dinâmico onde
                        você pode:
                        <br><br>
                        <strong>Conectar-se com outros empresários:</strong> Amplie sua rede de contatos, troque
                        experiências e encontre potenciais parceiros de negócios.
                        <br><br>
                        <strong>Participar de eventos e workshops:</strong> Mantenha-se atualizado com as últimas
                        tendências e inovações através de eventos interativos que conectam teoria e prática.
                        <br><br>
                        <strong>Receber suporte contínuo:</strong> Nossa equipe está aqui para oferecer orientação e
                        assistência sempre que você precisar, garantindo que você nunca esteja sozinho em sua jornada
                        empreendedora.
                        <br><br>
                        <strong>Obter feedback valioso:</strong> Compartilhe suas ideias e receba insights da
                        comunidade, ajudando você a tomar decisões informadas e estratégicas.
                    </p>
                </div>
            </div>
        </div>

    </div>
</body>

</html>

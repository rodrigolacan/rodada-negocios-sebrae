<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template Laravel com Tailwind CSS</title>
    @vite('resources/css/app.css') <!-- Certifique-se de que o Vite está funcionando -->
    <link rel="icon" href="{{ asset('img/logo-conectabiz.ico') }}" type="image/x-icon">

</head>

<body class="bg-[#F9F9F9] text-[#062146]">
    <!-- Navbar -->
    <nav
        class="bg-white fixed w-full top-0 left-0 flex items-center justify-between h-20 border-l-12 border-r-12 border-transparent px-12 shadow-md z-10">
        <!-- Logo -->
        <div class="flex-shrink-0">
            <!-- Logo padrão (desktop) -->
            <a href="#banner" class="flex items-center">
                <img src="{{ asset('img/logo-conectabiz.svg') }}" alt="logo conectabiz" class="h-8 md:block hidden">
            </a>
            <!-- Logo alternativa (móvel) -->
            <a href="#banner" class="flex items-center md:hidden block">
                <img src="{{ asset('img/logo-conectabiz-mobile.svg') }}" alt="logo conectabiz mobile" class="h-8">
            </a>
        </div>
        <!-- Menu items -->
        <div class="hidden md:flex items-center space-x-2">
            <a href="#sobre" class="text-lg hover:bg-gray-200 rounded-full p-2 transition duration-300">Sobre a
                plataforma</a>
            <a href="#como-funciona" class="text-lg  hover:bg-gray-200 rounded-full p-2 transition duration-300">Como
                Funciona?</a>
            <a href="#recursos" class="text-lg hover:bg-gray-200 rounded-full p-2 transition duration-300">Recursos e
                Benefícios</a>
            <!-- Avatar e ENTRAR -->
            <a href="#entrar"
                class="flex items-center text-lg font-semibold hover:bg-gray-200 rounded-full p-2 transition duration-300">
                <img src="{{ asset('img/avatar.svg') }}" alt="avatar login" class="mr-2 h-6 w-6">
                ENTRAR
            </a>
        </div>
        <!-- Mobile Menu Button -->
        <div class="md:hidden flex items-center">
            <button id="menu-toggle" class="focus:outline-none">
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
            class="block text-lg hover:bg-gray-200 rounded-full p-2 transition duration-300 font-bold text-right">Sobre
            a
            plataforma</a>
        <a href="#como-funciona"
            class="block text-lg hover:bg-gray-200 rounded-full p-2 transition duration-300 font-bold text-right">Como
            Funciona?</a>
        <a href="#recursos"
            class="block text-lg hover:bg-gray-200 rounded-full p-2 transition duration-300 font-bold text-right">Recursos
            e Benefícios</a>

        <!-- Linha e Item "ENTRAR" com avatar -->
        <hr class="border-t border-[#D1D5DB]">
        <a href="#entrar"
            class="block text-lg font-bold text-right hover:bg-gray-200 rounded-full p-2 transition duration-300">
            <div class="flex items-center justify-end">
                <img src="{{ asset('img/avatar.svg') }}" alt="avatar login" class="mr-2 h-6 w-6">
                ENTRAR
            </div>
        </a>
    </div>

    <!-- Banner -->
    <div id="banner" class="relative mt-20">
        <img src="{{ asset('img/banner.png') }}" alt="Banner Descrição"
            class="object-cover w-full h-[280px] md:h-[520px] mx-auto object-[94%] md:object-center">

        <!-- Conteúdo do banner em colunas -->
        <div class="absolute top-[100px] left-0 right-0 flex invisible md:visible mx-[100px]">
            <div class="flex flex-col justify-center w-[400px]">
                <img src="{{ asset('img/logo-conectabiz-white.svg') }}" alt="logo white"><br>
                <h1 class="text-2xl font-bold text-white fade-up">Bem-vindo ao Conectabiz!</h1>
                <p class="text-white mt-2 text-justify fade-up">A plataforma que une empreendedores e oportunidades,
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
        <div id="sobre" class="mx-8 md:mx-40">
            <h1 class="font-bold text-3xl md:text-4xl text-center mb-6">
                Sobre a Plataforma ConectaBiz
            </h1>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                <!-- Primeira Div -->
                <div class="flex justify-center md:justify-end">
                    <img src="{{ asset('img/business.svg') }}" alt="Icon 5" class="h-[300px] md:h-[400px]" />
                </div>

                <div>
                    <h2 class="text-lg font-bold">ConectaBiz é mais do que uma plataforma, é a sua porta de entrada
                        para
                        um mundo de oportunidades!</h2><br>
                    <p class="text-justify">
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

            <!-- Segunda Div -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center mt-8">
                <div>
                    <h2 class="text-lg font-bold">Por que escolher o ConectaBiz?</h2><br>
                    <p class="text-justify">
                        Estamos comprometidos em criar um ambiente colaborativo e inovador,
                        onde cada empreendedor pode prosperar. Nossa plataforma é intuitiva,
                        acessível e projetada para atender às suas necessidades,
                        independentemente do estágio do seu negócio.
                    </p></br>
                    <p class="text-justify">
                        Junte-se a nós e descubra como o ConectaBiz
                        pode transformar sua experiência empreendedora!
                    </p>
                </div>
                <div class="flex justify-center md:justify-end">
                    <img src="{{ asset('img/development.svg') }}" alt="Icon 6" class="h-[300px] md:h-[400px]" />
                </div>
            </div>
        </div>
        <!-- Título "Como Funciona o ConectaBiz" -->
        <div id="como-funciona" class="mx-8 md:mx-40">
            <h1 class="font-bold text-3xl md:text-4xl text-center mb-6">
                Como Funciona?
            </h1>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                <!-- Primeira Div -->
                <div class="flex justify-center md:justify-end">
                    <img src="{{ asset('img/pitch.svg') }}" alt="Icon 8" class="h-[300px] md:h-[400px]" />
                </div>

                <div>
                    <h2 class="text-lg font-bold">Uma plataforma intuitiva e acessível</h2><br>
                    <p class="text-justify">
                        O ConectaBiz foi projetado para simplificar a experiência do usuário. Acesse ferramentas e
                        recursos de
                        maneira fácil e intuitiva, de qualquer dispositivo.
                        <br><br>
                        <strong>Passo a passo orientado:</strong> Nosso sistema oferece orientação desde o cadastro até
                        o uso de
                        cada recurso, facilitando o processo para novos usuários.
                        <br><br>
                        <strong>Funcionalidades integradas:</strong> Explore recursos que trabalham juntos, garantindo
                        uma
                        experiência fluida e completa.
                    </p>
                </div>
            </div>
        </div>

        <!-- Título "Recursos do ConectaBiz" -->
        <div id="recursos" class="mx-8 md:mx-40 mt-8">
            <h1 class="font-bold text-3xl md:text-4xl text-center mb-6">
                Recursos e Benefícios
            </h1>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                <!-- Primeira Div -->
                <div>
                    <h2 class="text-lg font-bold">Ferramentas que impulsionam o seu negócio</h2><br>
                    <p class="text-justify">
                        Explore uma série de recursos criados para apoiar seu crescimento:
                        <br><br>
                        <strong>Painel de controle personalizado:</strong> Acompanhe suas métricas e resultados em um
                        único
                        lugar, adaptado às suas necessidades.
                        <br><br>
                        <strong>Suporte automatizado:</strong> Utilize nosso suporte por chatbot e FAQ para respostas
                        rápidas e
                        práticas.
                        <br><br>
                        <strong>Networking simplificado:</strong> Conecte-se facilmente com outros profissionais e
                        amplie sua
                        rede de contatos.
                    </p>
                </div>

                <div class="flex justify-center md:justify-end">
                    <img src="{{ asset('img/networking.svg') }}" alt="Icon 9" class="h-[300px] md:h-[400px]" />
                </div>
            </div>
        </div>

    </div>
    <!-- Footer -->
    <footer class="bg-[#062146] h-[300px] text-white flex flex-col justify-between py-6">
        <div class="mx-8 md:mx-[500px] grid grid-cols-1 md:grid-cols-2 gap-4">
            <!-- Coluna da Navegação Rápida -->
            <div class="text-center md:text-justify flex justify-center md:justify-start items-center">
                <!-- Adicionei flex e justify-center -->
                <div>
                    <h3 class="font-bold text-[#05A0DD]">NAVEGAÇÃO RÁPIDA</h3>
                    <ul class="mt-4 space-y-2">
                        <li><a href="#sobre" class="hover:underline">Sobre a Plataforma</a></li>
                        <li><a href="#como-funciona" class="hover:underline">Como Funciona?</a></li>
                        <li><a href="#recursos" class="hover:underline">Recursos e Benefícios</a></li>
                    </ul>
                </div>
            </div>

            <!-- Coluna das Redes Sociais -->
            <div class="flex flex-col items-center">
                <h3 class="font-bold text-[#05A0DD] text-center">SIGA-NOS NAS REDES SOCIAIS</h3>
                <div class="flex justify-center space-x-4 mt-4">
                    <a href="https://www.youtube.com" target="_blank" class="hover:opacity-80">
                        <img src="{{ asset('img/youtube_icon.svg') }}" alt="YouTube" class="h-6 w-6">
                    </a>
                    <a href="https://www.twitter.com" target="_blank" class="hover:opacity-80">
                        <img src="{{ asset('img/twitter_icon.svg') }}" alt="Twitter" class="h-6 w-6">
                    </a>
                    <a href="https://www.linkedin.com" target="_blank" class="hover:opacity-80">
                        <img src="{{ asset('img/linkedin_icon.svg') }}" alt="LinkedIn" class="h-6 w-6">
                    </a>
                    <a href="https://www.instagram.com" target="_blank" class="hover:opacity-80">
                        <img src="{{ asset('img/instagram_icon.svg') }}" alt="Instagram" class="h-6 w-6">
                    </a>
                    <a href="https://www.facebook.com" target="_blank" class="hover:opacity-80">
                        <img src="{{ asset('img/facebook_icon.svg') }}" alt="Facebook" class="h-6 w-6">
                    </a>
                </div>
            </div>
        </div>

        <!-- Texto de Direitos Autorais -->
        <p class="font-bold uppercase text-center mt-6 mb-5 text-xs md:text-sm">© SEBRAE-RR 2024 - TODOS OS DIREITOS
            RESERVADOS</p>
    </footer>
</body>
@vite('resources/js/app.js') 
</html>

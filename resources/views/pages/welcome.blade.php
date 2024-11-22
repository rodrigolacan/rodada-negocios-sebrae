@extends('layouts.main')

@section('head')
    @include('sections.head')
@endsection

@section('navbar')
    <header>
        <!-- Navbar -->
        <nav
            class="bg-white fixed w-full top-0 left-0 flex items-center justify-between h-20 border-l-12 border-r-12 border-transparent px-12 shadow-md z-10">
            <!-- Logo -->
            <div class="flex-shrink-0">
                @livewire('logo')
            </div>

            <!-- Menu -->
            @livewire('menu', [
                'menuItems' => [['href' => '#sobre', 'text' => 'Sobre a plataforma'], ['href' => '#como-funciona', 'text' => 'Como Funciona?'], ['href' => '#recursos', 'text' => 'Recursos e Benefícios']],
                'showLogin' => true,
            ])
    </header>
@endsection

@section('content')
    <main>
        @livewire('banner', [
            'bannerImage' => 'img/banner.png',
            'bannerAlt' => 'Descrição do banner',
            'logo' => 'img/logo-conectabiz-white.svg',
            'title' => 'Bem-vindo ao Conectabiz!',
            'description' => 'A plataforma que une empreendedores e oportunidades, promovendo conexões valiosas para o crescimento do seu negócio. Aqui, você encontra recursos e informações que fazem a diferença. Descubra, conecte-se e expanda seus horizontes!',
        ])

        <!-- Contêiner principal usando grid -->
        <div class="grid gap-8 mx-4 sm:mx-8 md:mx-20 lg:mx-40 xl:mx-60 mt-8 auto-rows-auto">

            <!-- Contêiner dos cards -->
            <div class="grid grid-cols-2 md:grid-cols-5 gap-4 mx-4">
                @livewire('info-box', ['icon' => 'idea','alt' => 'Icon 1','text' => 'Texto do Card'])
                @livewire('info-box', ['icon' => 'hands','alt' => 'Icon 2','text' => 'Texto do Card'])
                @livewire('info-box', ['icon' => 'profit','alt' => 'Icon 3','text' => 'Texto do Card'])
                @livewire('info-box', ['icon' => 'tools','alt' => 'Icon 4','text' => 'Texto do Card'])
                @livewire('info-box', ['icon' => 'messenger','alt' => 'Icon 5','text' => 'Texto do Card'])
            </div>

            <!-- Seção Por que escolher o ConectaBiz? -->
            <div id="sobre-a-plataforma">
                @livewire('info', [
                    'title' => 'Sobre a Plataforma ConectaBiz',
                    'icon' => 'img/business.svg',
                    'iconAlt' => 'Icon 5',
                    'subtitle' => 'ConectaBiz é mais do que uma plataforma, é a sua porta de entrada para um mundo de oportunidades!',
                    'content' => "
                        Desenvolvida especialmente para empreendedores, nossa plataforma oferece um espaço dinâmico onde você pode:
                        <span class='font-bold'>Conectar-se com outros empresários:</span> Amplie sua rede de contatos, troque experiências e encontre potenciais parceiros de negócios.
                        <span class='font-bold mt-4 block'>Participar de eventos e workshops:</span> Mantenha-se atualizado com as últimas tendências e inovações através de eventos interativos que conectam teoria e prática.
                        <span class='font-bold mt-4 block'>Receber suporte contínuo:</span> Nossa equipe está aqui para oferecer orientação e assistência sempre que você precisar, garantindo que você nunca esteja sozinho em sua jornada empreendedora.
                        <span class='font-bold mt-4 block'>Obter feedback valioso:</span> Compartilhe suas ideias e receba insights da comunidade, ajudando você a tomar decisões informadas e estratégicas.
                    ",
                    'iconPosition' => 'left',
                ])
            </div>
            
            <div id="por-que">
                @livewire('info', [
                    'title' => 'Por que escolher o ConectaBiz?',
                    'icon' => 'img/development.svg',
                    'iconAlt' => 'Icon 6',
                    'subtitle' => '',
                    'content' => "
                        Estamos comprometidos em criar um ambiente colaborativo e inovador,
                        onde cada empreendedor pode prosperar. Nossa plataforma é intuitiva,
                        acessível e projetada para atender às suas necessidades,
                        independentemente do estágio do seu negócio.
                        <span class='mt-4 block'>Junte-se a nós e descubra como o ConectaBiz
                        pode transformar sua experiência empreendedora!</span>
                    ",
                    'iconPosition' => 'right',
                ])
            </div>
            
            <div id="como-funciona">
                @livewire('info', [
                    'title' => 'Como Funciona?',
                    'icon' => 'img/pitch.svg',
                    'iconAlt' => 'Icon 8',
                    'subtitle' => 'Uma plataforma intuitiva e acessível',
                    'content' => "
                        O ConectaBiz foi projetado para simplificar a experiência do usuário. Acesse ferramentas e
                        recursos de maneira fácil e intuitiva, de qualquer dispositivo.
                        <span class='font-bold mt-4 block'>Passo a passo orientado:</span> Nosso sistema oferece orientação desde o cadastro até
                        o uso de cada recurso, facilitando o processo para novos usuários.
                        <span class='font-bold mt-4 block'>Funcionalidades integradas:</span> Explore recursos que trabalham juntos, garantindo
                        uma experiência fluida e completa.
                    ",
                    'iconPosition' => 'left',
                ])
            </div>
            
            <div id="recursos">
                @livewire('info', [
                    'title' => 'Recursos e Benefícios',
                    'icon' => 'img/networking.svg',
                    'iconAlt' => 'Icon 9',
                    'subtitle' => 'Ferramentas que impulsionam o seu negócio',
                    'content' => "
                        Explore uma série de recursos criados para apoiar seu crescimento:
                        <span class='font-bold mt-4 block'>Painel de controle personalizado:</span> Acompanhe suas métricas e resultados em um
                        único lugar, adaptado às suas necessidades.
                        <span class='font-bold mt-4 block'>Suporte automatizado:</span> Utilize nosso suporte por chatbot e FAQ para respostas
                        rápidas e práticas.
                        <span class='font-bold mt-4 block'>Networking simplificado:</span> Conecte-se facilmente com outros profissionais e
                        amplie sua rede de contatos.
                    ",
                    'iconPosition' => 'right',
                ])
            </div>
            
    </main>
@endsection

@section('footer')
    <footer class="mt-5 bg-[#062146] h-[300px] text-white flex flex-col justify-between py-6">
        <div class="mx-8 md:mx-40 lg:mx-60 xl:mx-[500px] grid grid-cols-1 md:grid-cols-2 gap-4">
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
@endsection

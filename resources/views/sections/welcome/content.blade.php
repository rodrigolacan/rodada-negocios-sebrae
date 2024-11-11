<main>
    <x-banner bannerImage="img/banner.png" bannerAlt="Banner Descrição" logo="img/logo-conectabiz-white.svg"
        title="Bem-vindo ao Conectabiz!"
        description="A plataforma que une empreendedores e oportunidades, promovendo conexões valiosas para o crescimento do seu negócio. Aqui, você encontra recursos e informações que fazem a diferença. Descubra, conecte-se e expanda seus horizontes!" />

    <!-- Contêiner principal usando grid -->
    <div class="grid gap-8 mx-4 sm:mx-8 md:mx-20 lg:mx-40 xl:mx-60 mt-8 auto-rows-auto">

        <!-- Contêiner dos cards -->
        <div class="grid grid-cols-2 md:grid-cols-5 gap-4 mx-4">
            <x-card icon="idea" alt="Icon 1" text="Texto do card 1" />
            <x-card icon="hands" alt="Icon 2" text="Texto do card 2" />
            <x-card icon="profit" alt="Icon 3" text="Texto do card 3" />
            <x-card icon="tools" alt="Icon 4" text="Texto do card 4" />
            <x-card icon="messenger" alt="Icon 5" text="Texto do card 5" />
        </div>

        <!-- Seção Sobre a Plataforma ConectaBiz -->
        <div id="sobre">
            <x-info-section title="Sobre a Plataforma ConectaBiz" icon="img/business.svg" iconAlt="Icon 5"
                subtitle="ConectaBiz é mais do que uma plataforma, é a sua porta de entrada para um mundo de oportunidades!"
                content="
    Desenvolvida especialmente para empreendedores, nossa plataforma oferece um espaço dinâmico onde você pode:
    <span class='font-bold'>Conectar-se com outros empresários:</span> Amplie sua rede de contatos, troque experiências e encontre potenciais parceiros de negócios.
    <span class='font-bold mt-4 block'>Participar de eventos e workshops:</span> Mantenha-se atualizado com as últimas tendências e inovações através de eventos interativos que conectam teoria e prática.
    <span class='font-bold mt-4 block'>Receber suporte contínuo:</span> Nossa equipe está aqui para oferecer orientação e assistência sempre que você precisar, garantindo que você nunca esteja sozinho em sua jornada empreendedora.
    <span class='font-bold mt-4 block'>Obter feedback valioso:</span> Compartilhe suas ideias e receba insights da comunidade, ajudando você a tomar decisões informadas e estratégicas.
    "
                iconPosition="left" />
        </div>

        <!-- Seção Por que escolher o ConectaBiz? -->
        <div id="por-que">
            <x-info-section title="Por que escolher o ConectaBiz?" icon="img/development.svg" iconAlt="Icon 6"
                subtitle=""
                content="
    Estamos comprometidos em criar um ambiente colaborativo e inovador,
    onde cada empreendedor pode prosperar. Nossa plataforma é intuitiva,
    acessível e projetada para atender às suas necessidades,
    independentemente do estágio do seu negócio.
    <span class='mt-4 block'>Junte-se a nós e descubra como o ConectaBiz
    pode transformar sua experiência empreendedora!</span>
    "
                iconPosition="right" />
        </div>

        <!-- Seção Como Funciona? -->
        <div id="como-funciona">
            <x-info-section title="Como Funciona?" icon="img/pitch.svg" iconAlt="Icon 8"
                subtitle="Uma plataforma intuitiva e acessível"
                content="
    O ConectaBiz foi projetado para simplificar a experiência do usuário. Acesse ferramentas e
    recursos de maneira fácil e intuitiva, de qualquer dispositivo.
    <span class='font-bold mt-4 block'>Passo a passo orientado:</span> Nosso sistema oferece orientação desde o cadastro até
    o uso de cada recurso, facilitando o processo para novos usuários.
    <span class='font-bold mt-4 block'>Funcionalidades integradas:</span> Explore recursos que trabalham juntos, garantindo
    uma experiência fluida e completa.
    "
                iconPosition="left" />
        </div>

        <!-- Seção Recursos e Benefícios -->
        <div id="recursos">
            <x-info-section title="Recursos e Benefícios" icon="img/networking.svg" iconAlt="Icon 9"
                subtitle="Ferramentas que impulsionam o seu negócio"
                content="
    Explore uma série de recursos criados para apoiar seu crescimento:
    <span class='font-bold mt-4 block'>Painel de controle personalizado:</span> Acompanhe suas métricas e resultados em um
    único lugar, adaptado às suas necessidades.
    <span class='font-bold mt-4 block'>Suporte automatizado:</span> Utilize nosso suporte por chatbot e FAQ para respostas
    rápidas e práticas.
    <span class='font-bold mt-4 block'>Networking simplificado:</span> Conecte-se facilmente com outros profissionais e
    amplie sua rede de contatos.
    "
                iconPosition="right" />
        </div>

    </div>
</main>

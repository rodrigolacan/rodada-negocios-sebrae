<footer class="bg-[#062146] h-[300px] text-white flex flex-col justify-between py-6">
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

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Page</title>
    @vite('resources/css/app.css') <!-- ou o método que você usa para compilar o Tailwind -->
</head>

<body class="bg-custom-radial min-h-screen flex flex-col">
    <nav class="mt-5 mx-10 grid grid-cols-3 items-center">
        <!-- Logo -->
        <div class="flex-shrink-0">
            <x-logo />
        </div>

        <!-- Menus ao centro -->
        <div class="flex justify-center space-x-8 text-[#062146] font-poppins font-semibold">
            <base-account-profile id="AmeiAccountProfile"></base-account-profile>
            <a href="#" class="hover:underline">Dashboard</a>
            <a href="#" class="hover:underline">Eventos</a>
            <a href="#" class="hover:underline">Relatórios</a>
        </div>

        <!-- Círculos à direita -->
        <div class="flex justify-end space-x-3">
            <div class="w-[50px] h-[50px] bg-[#062146] rounded-full"></div>
            <div class="w-[50px] h-[50px] bg-[#062146] rounded-full"></div>
            <div class="w-[50px] h-[50px] bg-[#062146] rounded-full"></div>
        </div>
    </nav>
    <div class="grid grid-cols-[10%_90%] flex-1">
        <!-- Menu Lateral -->
        <div class="mt-3 ml-10 flex flex-col space-y-4">
            <div class="w-[50px] h-[50px] bg-[#E9EDF2] rounded-full shadow-[0px_0px_10px_#7E8184]"></div>
            <div class="w-[50px] h-[50px] bg-[#E9EDF2] rounded-full shadow-[0px_0px_10px_#7E8184]"></div>
            <div class="w-[50px] h-[50px] bg-[#E9EDF2] rounded-full shadow-[0px_0px_10px_#7E8184]"></div>
            <div class="w-[50px] h-[50px] bg-[#E9EDF2] rounded-full shadow-[0px_0px_10px_#7E8184]"></div>
            <div class="w-[50px] h-[50px] bg-[#E9EDF2] rounded-full shadow-[0px_0px_10px_#7E8184]"></div>
            <div class="w-[50px] h-[50px] bg-[#E9EDF2] rounded-full shadow-[0px_0px_10px_#7E8184]"></div>
            <div class="w-[50px] h-[50px] bg-[#E9EDF2] rounded-full shadow-[0px_0px_10px_#7E8184]"></div>
        </div>

        <!-- Imagem com efeito Glassmorphism -->
        <div class="mt-3 mr-10 ml-5 flex flex-col h-full">

            <img src="{{ asset('img/Subtract.svg') }}" alt="Imagem SVG" class="w-auto h-auto object-cover">
        </div>


</body>
@vite('resources/js/keycloack/keycloak.main.js')
@vite('resources/js/pages/home/navbar/navbar.js')
<script src="https://amei.homolog.kubernetes.sebrae.com.br/auth/js/keycloak.js"></script>
<script src="https://base-estatico.sebrae.com.br/web-components/base-web-components-latest.min.js"></script>
</html>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template Laravel com Tailwind CSS</title>
    <script src="https://amei.homolog.kubernetes.sebrae.com.br/auth/js/keycloak.js"></script>
    <script src="https://base-estatico.sebrae.com.br/web-components/base-web-components-latest.min.js"></script>
    @vite('resources/js/keycloack/keycloak.main.js')
    @vite(['resources/css/app.css', 'resources/js/app.js']) <!-- Certifique-se de que o Vite está funcionando -->
    @vite('resources/js/pages/home/navbar/navbar.js')

</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <base-account-profile id="BaSeAccountProfile"></base-account-profile>
    <div class="bg-white shadow-lg rounded-lg p-8 max-w-md text-center">
        <h1 class="text-2xl font-bold text-gray-800 mb-4">Bem-vindo ao Projeto Laravel</h1>
        <p class="text-gray-600 mb-6">Este é um projeto Laravel utilizando Tailwind CSS para estilização.</p>
        <p class="text-gray-500">Você pode reutilizar este código como base para seus projetos.</p>
        <a href="#" class="mt-4 inline-block text-blue-500 hover:text-blue-700 font-semibold">
            Saiba mais
        </a>
    </div>
</body>
</html>

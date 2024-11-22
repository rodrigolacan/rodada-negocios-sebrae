<!DOCTYPE html>
<html lang="pt-BR">

@yield('head')

<body>
    @yield('navbar')

    @yield('content')

    @yield('footer')
</body>
    <script src="https://amei.homolog.kubernetes.sebrae.com.br/auth/js/keycloak.js"></script>
    @vite('resources/js/keycloack/keycloak.main.js')
</html>

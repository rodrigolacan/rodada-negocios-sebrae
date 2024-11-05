<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template Laravel com Tailwind CSS</title>
    @vite('resources/css/app.css') <!-- Certifique-se de que o Vite está funcionando -->
    <link rel="icon" href="{{ asset('img/logo-conectabiz.ico') }}" type="image/x-icon">

</head>

<body>
    <header>
        @yield('header')
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="bg-[#062146] h-[300px] text-white flex flex-col justify-between py-6">
        @yield('footer')
    </footer>
    @vite('resources/js/app.js')
</body>

</html>

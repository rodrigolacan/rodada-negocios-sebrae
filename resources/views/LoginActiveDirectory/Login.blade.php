<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 flex items-center justify-center h-screen">

    <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-sm">
        <div class="flex justify-center mb-6">
            <img src="{{ asset('img/sebrae.svg') }}" alt="Logo Sebrae" class="h-16 w-auto">
        </div>

        <!-- Formulário de login -->
        <form method="POST" action="{{ route('welcome') }}" class="space-y-4">
            @csrf
            <!-- Campo de Usuário -->
            <div>
                <label for="username" class="block text-sm font-medium text-gray-700">Usuário</label>
                <input id="username" type="text"
                    class="mt-1 px-4 py-2 border rounded-lg w-full focus:outline-none focus:ring-2 focus:ring-blue-400"
                    placeholder="Digite seu usuário" required>
            </div>

            <!-- Campo de Senha -->
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Senha</label>
                <input id="password" type="password"
                    class="mt-1 px-4 py-2 border rounded-lg w-full focus:outline-none focus:ring-2 focus:ring-blue-400"
                    placeholder="Digite sua senha" required>
            </div>

            <!-- Botão de Login -->
            <button type="submit"
                class="w-full bg-blue-500 text-white font-semibold py-2 rounded-lg hover:bg-blue-600 transition duration-200">Entrar</button>
            @if ($errors->has('INVALID_USER'))
                <div class="mt-4 text-center text-red-500">
                    Usuário ou Senha inválidos
                </div>
            @endif

            @if ($errors->has('LDAP_ERROR'))
                <div class="mt-4 text-center text-red-500">
                    Impossível se conectar ao servidor
                </div>
            @endif
        </form>

        <!-- Link para Redirecionamento -->
        <div class="text-center mt-6">
            <p class="text-sm text-gray-600">Ou</p>
            <a href="https://app.amei.com.br" class="text-blue-500 font-medium hover:underline">Acessar o utilizando
                AMEI</a>
        </div>
    </div>

</body>

</html>

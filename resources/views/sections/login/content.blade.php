<main class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-sm">
        <div class="flex justify-center mb-1">
            <!-- Logo -->
            <x-logo />
        </div>
        <x-powered-by />

        <!-- Formulário de login -->
        <form method="POST" action="{{ route('LoginService') }}" class="space-y-4">
            @csrf
            <!-- Campo de Usuário -->
            <div>
                <label for="username" class="block text-sm font-medium text-gray-700">Usuário</label>
                <input id="username" type="text"
                    class="mt-1 px-4 py-2 border rounded-lg w-full focus:outline-none focus:ring-2 focus:ring-blue-400"
                    placeholder="Digite seu usuário" name='username' required>
            </div>

            <!-- Campo de Senha -->
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Senha</label>
                <input id="password" type="password"
                    class="mt-1 px-4 py-2 border rounded-lg w-full focus:outline-none focus:ring-2 focus:ring-blue-400"
                    placeholder="Digite sua senha" name='password' required>
            </div>

            <!-- Botão de Login -->
            <button type="submit"
                class="w-full bg-blue-500 text-white font-semibold py-2 rounded-lg hover:bg-blue-600 transition duration-200">Entrar
            </button>

            <!-- Avisos de Erros -->
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
    </div>
</main>

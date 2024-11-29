<form wire:submit.prevent="login">
    @csrf

    <!-- Campo Usuário -->
    <div class="relative mt-6">
        <input type="text" id="username" placeholder="Usuário" wire:model="username"
            class="peer mt-1 w-full border-2 border-gray-300 px-4 py-2 rounded-md placeholder:text-transparent focus:border-blue-600 focus:outline-none" />
        <label for="username"
            class="absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 left-2 origin-left bg-white px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-1/2 peer-focus:scale-75 peer-focus:-translate-y-4 peer-focus:text-blue-600">
            Usuário
        </label>
        @error('username')
            <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
        @enderror
    </div>

    <!-- Campo Senha -->
    <div class="relative mt-6">
        <input type="password" id="password" placeholder="Senha" wire:model="password"
            class="peer mt-1 w-full border-2 border-gray-300 px-4 py-2 rounded-md placeholder:text-transparent focus:border-blue-600 focus:outline-none" />
        <label for="password"
            class="absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 left-2 origin-left bg-white px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-1/2 peer-focus:scale-75 peer-focus:-translate-y-4 peer-focus:text-blue-600">
            Senha
        </label>
        @error('password')
            <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
        @enderror
    </div>

    <!-- Texto "Problemas para acessar sua conta?" -->
    <a href="#">
        <p class="mt-2 text-sm mb-4 font-poppins">Problemas para acessar sua Conta Local?</p>
    </a>

    <!-- Botão Entrar -->
    <div class="my-6">
        <button type="submit"
            class="w-full rounded-md bg-blue-600 px-3 py-4 text-white focus:bg-gray-600 focus:outline-none">
            Entrar
        </button>
    </div>

    <!-- Traço divisor com frase -->
    <div class="my-4 flex items-center">
        <hr class="flex-1 border-gray-300" />
        <p class="mx-4 text-sm text-gray-800 text-center">Ou Acesse com sua conta Sebrae</p>
        <hr class="flex-1 border-gray-300" />
    </div>

    <!-- SVG rodeado por um círculo (link) -->
    <a onclick="loginAmei()" class="flex justify-center cursor-pointer">
        <div class="flex items-center justify-center size-12 p-1 bg-gray-600 rounded-full">
            <img src="{{ asset('img/logo-sebrae-white.svg') }}" alt="">
        </div>
    </a>

    <!-- Texto Criar Conta -->
    <p class="mt-4 text-center text-sm text-gray-500">Não tem uma Conta Sebrae ainda?
        <a href="#!"
            class="font-semibold text-gray-600 hover:underline focus:text-gray-800 focus:outline-none">
            Crie aqui
        </a>.
    </p>

    <!-- Mensagens de erro gerais -->
    @if ($errors->any())
        <div class="mt-4 text-center text-red-500">
            {{ $errors->first() }}
        </div>
    @endif
</form>

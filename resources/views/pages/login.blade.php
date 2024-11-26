@extends('layouts.main')

@section('head')
    @include('sections.head')
@endsection

@section('content')
    <main class="bg-gray-50 flex flex-col items-center justify-center min-h-screen">
        <!-- Logo centralizada -->
        <div class="mt-5 flex justify-center mb-2">
            @livewire('logo')
        </div>

        <!-- Div "Powered by" com logo -->
        <div class="flex justify-center mb-4">
            @livewire('powered-by')
        </div>

        <div
            class="relative mx-auto w-full max-w-md bg-white px-6 pt-10 pb-8 shadow-xl ring-1 ring-gray-900/5 sm:rounded-xl sm:px-10">
            <div class="w-full">
                <div class="text-center">
                    <h1 class="text-3xl font-semibold text-gray-900">Login</h1>
                    <p class="mt-2 text-gray-500">Insira seus dados para acessar sua Conta Local</p>
                </div>
                <div class="mt-5">
                    <form method="POST" action="{{ route('LoginService') }}">
                        @csrf
                        <div class="relative mt-6">
                            <input type="username" name="username" id="username" placeholder="Usuário"
                                class="peer mt-1 w-full border-2 border-gray-300 px-4 py-2 rounded-md placeholder:text-transparent focus:border-blue-600 focus:outline-none"
                                required />
                            <label for="username"
                            class="absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 left-2 origin-left bg-white px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-1/2 peer-focus:scale-75 peer-focus:-translate-y-4 peer-focus:text-blue-600">
                                Usuário
                            </label>
                        </div>
                        <div class="relative mt-6">
                            <input type="password" name="password" id="password" placeholder="Senha"
                                class="peer mt-1 w-full border-2 px-4 py-2 rounded-md placeholder:text-transparent focus:border-blue-600 focus:outline-none"
                                required />
                            <label for="password"
                                class="absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 left-2 origin-left bg-white px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-1/2 peer-focus:scale-75 peer-focus:-translate-y-4 peer-focus:text-blue-600">
                                Senha
                            </label>
                        </div>
                  
                        <!-- Texto "Problemas para acessar sua conta?" -->
                        <a href="#">
                            <p class="mt-2 text-sm mb-4 font-poppins">Problemas para acessar sua Conta Local?</p>
                        </a>
                        <div class="my-6">
                            <button type="submit"
                                class="w-full rounded-md bg-blue-600 px-3 py-4 text-white focus:bg-gray-600 focus:outline-none">Entrar</button>
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

                        <p class="mt-4 text-center text-sm text-gray-500">Não tem uma Conta Sebrae ainda?
                            <a href="#!"
                                class="font-semibold text-gray-600 hover:underline focus:text-gray-800 focus:outline-none">Crie
                                aqui
                            </a>.
                        </p>
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
            </div>
        </div>
    </main>
@endsection

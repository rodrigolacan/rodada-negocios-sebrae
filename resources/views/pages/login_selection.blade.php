@extends('layouts.main')

@section('head')
    @include('sections.head')
@endsection

@section('content')
    <main class="bg-gray-50 flex items-center justify-center min-h-screen">
        <div class="w-[393px] bg-white rounded-md p-4">
            <!-- Logo centralizada -->
            <div class="flex justify-center mb-1">
                <x-logo />
            </div>
            <!-- Div "Powered by" com logo -->
            <x-powered-by />

            <h1 class="text-center text-xl font-light mb-8">Escolha a sua forma de login</h1>
            <div>
                <!-- Opção de login Empresa -->
                <a onclick="loginAmei()" class="block hover:shadow-2xl transition-shadow duration-300 cursor-pointer">
                    <div class="flex items-center hover:scale-105 transform transition-transform duration-300">
                        <div
                            class="h-[160px] rounded-tl-lg w-1/2 bg-white p-4 rounded-tl-md flex justify-center items-center">
                            <h2 class="text-lg font-bold">EMPRESA</h2>
                        </div>
                        <div class="w-1/2 rounded-tr-lg overflow-hidden">
                            <img src="{{ asset('img/enterprise.jpg') }}" alt="Empresa"
                                class="w-[200px] h-[160px] object-cover">
                        </div>
                    </div>
                </a>
                <!-- Opção de login Organizador -->
                <a href="{{ route('login') }}" class="block hover:shadow-2xl transition-shadow duration-300">
                    <div class="flex items-center hover:scale-105 transform transition-transform duration-300">
                        <div class="w-1/2 rounded-bl-lg overflow-hidden">
                            <img src="{{ asset('img/manager.jpg') }}" alt="Organizador"
                                class="w-[200px] h-[160px] object-cover object-[center_30%]">
                        </div>
                        <div class="h-[160px] rounded-br-lg w-1/2 bg-white p-4 flex justify-center items-center">
                            <h2 class="text-lg font-bold">INTERNO</h2>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </main>
@endsection

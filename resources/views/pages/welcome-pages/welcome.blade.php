@extends('layouts.main')

@section('head')
    @include('sections.default.head')
@endsection

@section('navbar')
    @include('sections.welcome.navbar')
@endsection

@section('content')
    @include('sections.welcome.content')
@endsection

@section('footer')
    @include('sections.welcome.footer')
    @vite('resources/js/app.js')
    @vite('resources/js/components/menu.js')
@endsection

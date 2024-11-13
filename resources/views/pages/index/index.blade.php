@extends('layouts.main')

@section('head')
    @include('sections.default.head')
@endsection

@section('navbar')
    @include('sections.app.navbar')
@endsection

@section('content')
    @include('sections.app.content')
    @vite('resources/js/components/menu.js')
    @vite('resources/js/components/dropdown.js')
@endsection
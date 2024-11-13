@extends('layouts.main')

@section('head')
    @include('sections.default.head')
@endsection

@section('navbar')
    @include('sections.app.navbar')
    @vite('resources/js/components/menu.js')
    @vite('resources/js/components/dropdown.js')
@endsection
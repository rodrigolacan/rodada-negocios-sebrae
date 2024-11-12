@extends('layouts.main')

@section('head')
    @include('sections.default.head')
@endsection

@section('navbar')
    @include('sections.app.navbar')
    <x-js-import />
@endsection
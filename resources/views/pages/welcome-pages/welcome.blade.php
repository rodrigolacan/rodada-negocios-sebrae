@extends('layouts.main')

@section('head')
    @include('sections.welcome.head')
@endsection

@section('navbar')
    @include('sections.welcome.navbar')
@endsection

@section('content')
    @include('sections.welcome.content')
@endsection

@section('footer')
    @include('sections.welcome.footer')
@endsection

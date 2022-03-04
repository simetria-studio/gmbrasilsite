@extends('layouts.main')
@section('content')
    <div class="title">
        <h2>
            PRODUTOS E SERVIÇOS
        </h2>
    </div>
    <div class="produtos">
        <div class="banner-prod">
            <img src="{{ asset('assets/img/atlantica.svg') }}" alt="">
        </div>
        <div class="banner-prod">
            <img src="{{ asset('assets/img/lagares.svg') }}" alt="">
        </div>
        <div class="banner-prod">
            <img src="{{ asset('assets/img/beu.svg') }}" alt="">
        </div>
        <div class="banner-prod">
            <img src="{{ asset('assets/img/iconique.svg') }}" alt="">
        </div>
        <div class="banner-prod">
            <img src="{{ asset('assets/img/sis.svg') }}" alt="">
        </div>
        <div class="banner-prod">
            <img src="{{ asset('assets/img/protecao.svg') }}" alt="">
        </div>
        <div class="banner-prod">
            <img src="{{ asset('assets/img/ead.svg') }}" alt="">
        </div>
    </div>
@endsection

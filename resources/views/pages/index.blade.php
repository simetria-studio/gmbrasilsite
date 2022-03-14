@extends('layouts.main')
@section('content')
    <div class="banner animate__animated animate__slideInRight">
        <img src="{{ asset('assets/img/banner.jpg') }}" alt="">
    </div>
    <div class="title">
        <h2>
            PRODUTOS E SERVIÇOS
        </h2>
    </div>
    <div class="btn-call text-center">
       <a href="{{ route('produtos') }}"> <button class=" btn-orange">VER TUDO</button></a>
    </div>
    <div class="banner2 animate__animated animate__slideInRight">
        <img src="{{ asset('assets/img/banner2.jpg') }}" alt="">
    </div>
    <div class="title">
        <h2>
            FORMAS DE GANHOS
        </h2>
    </div>
    <div class="container">
        <div class="form-ganhos">
            <div class="d-flex flex-column">
                <div class="d-flex align-items-center itens mt-3">
                    <div>
                        <img src="{{ asset('assets/img/icons/done.svg') }}" alt="">
                    </div>
                    <div>
                        <h3>INDICAÇÃO DIRETA</h3>
                    </div>
                </div>
                <div class="d-flex align-items-center itens">
                    <div>
                        <img src="{{ asset('assets/img/icons/done.svg') }}" alt="">
                    </div>
                    <div>
                        <h3>BÔNUS GMBANK</h3>
                    </div>
                </div>
                <div class="d-flex align-items-center itens">
                    <div>
                        <img src="{{ asset('assets/img/icons/done.svg') }}" alt="">
                    </div>
                    <div>
                        <h3>RECORRÊNCIA</h3>
                    </div>
                </div>
                <div class="d-flex align-items-center itens">
                    <div>
                        <img src="{{ asset('assets/img/icons/done.svg') }}" alt="">
                    </div>
                    <div>
                        <h3>POOL PARA NACIONAIS</h3>
                    </div>
                </div>
                <div class="d-flex align-items-center itens">
                    <div>
                        <img src="{{ asset('assets/img/icons/done.svg') }}" alt="">
                    </div>
                    <div>
                        <h3>REVENDA</h3>
                    </div>
                </div>
                <div class="d-flex align-items-center itens">
                    <div>
                        <img src="{{ asset('assets/img/icons/done.svg') }}" alt="">
                    </div>
                    <div>
                        <h3>PREMIAÇÕES</h3>
                    </div>
                </div>
                <div class="d-flex align-items-center itens mb-3">
                    <div>
                        <img src="{{ asset('assets/img/icons/done.svg') }}" alt="">
                    </div>
                    <div>
                        <h3>GM POUPANÇA</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="title">
        <h2>
            BÔNUS
        </h2>
    </div>
    <div class="banner2 animate__animated animate__slideInRight">
        <img src="{{ asset('assets/img/banner3.jpg') }}" alt="">
    </div>
    <div class="btn-call text-center">
        <a href="{{ route('bonus') }}"><button class=" btn-orange">VER MAIS</button></a>
    </div>
    <div class="title">
        <h2>
            PLANO DE
            CARREIRA
        </h2>
    </div>
    <div class="container">
        <div class="form-ganhos">
            <div class="d-flex flex-column align-items-center">
                <div class="itens-ponto">
                    <img src="{{ asset('assets/img/start.svg') }}" alt="">

                </div>
                <div class="itens-ponto">
                    <img src="{{ asset('assets/img/prata.svg') }}" alt="">
                </div>
                <div class="itens-ponto">
                    <img src="{{ asset('assets/img/ouro.svg') }}" alt="">
                </div>
                <div class="itens-ponto">
                    <img src="{{ asset('assets/img/platina.svg') }}" alt="">
                </div>
                <div class="itens-ponto">
                    <img src="{{ asset('assets/img/esmeralda.svg') }}" alt="">
                </div>
                <div class="itens-ponto">
                    <img src="{{ asset('assets/img/diamante.svg') }}" alt="">
                </div>
                <div class="itens-ponto">
                    <img src="{{ asset('assets/img/diamantered.svg') }}" alt="">
                </div>
                <div class="itens-ponto">
                    <img src="{{ asset('assets/img/diamanteazul.svg') }}" alt="">
                </div>
                <div class="itens-ponto">
                    <img src="{{ asset('assets/img/diamanteblack.svg') }}" alt="">
                </div>
                <div class="itens-ponto">
                    <img src="{{ asset('assets/img/diamantegold.svg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="btn-call text-center my-4">
       <a href="{{ route('premios') }}"><button class=" btn-orange">VER PRÊMIOS</button></a>
    </div>
@endsection

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/0ab2bcde1c.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link
        href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/main.min.css') }}">
    <title>GMBRASIL VD</title>
</head>
<header>
    <div class="mobile">
        <div class="top">
            <div class="container">
                <div class="row line-top">
                    <div class="logo">
                        <a href="{{ route('index') }}"> <img src="{{ asset('assets/img/logo.png') }}" alt=""></a>
                    </div>
                    <div>
                        <h2>GM BRASIL VD</h2>
                    </div>
                    <div id="active-menu">
                        <img src="{{ asset('assets/img/icons/menu.svg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="menu">
            <div class="header-menu">
                <button class="close"><i class="fas fa-times-circle"></i></button>
            </div>
            <div class="body">
                <div class="list-group">
                    <a href="{{ route('index') }}" class="list-group-item list-group-item-action" aria-current="true">
                        HOME
                    </a>
                    <a href="{{ route('produtos') }}" class="list-group-item list-group-item-action">PRODUTOS E
                        SERVI??OS</a>
                    <a href="{{ route('bonus') }}" class="list-group-item list-group-item-action">B??NUS</a>
                    <a href="{{ route('premios') }}" class="list-group-item list-group-item-action">PR??MIOS</a>
                    <a href="http://app.gmbrasilvd.com.br/" class="list-group-item list-group-item-action">ESCRIT??RIO
                        VIRTUAL</a>
                    <a href="#" class="list-group-item list-group-item-action">LOJA</a>
                    <a class="list-group-item list-group-item-action disabled">CONTATO</a>
                </div>
            </div>
        </div>
    </div>
    <div class="desktop">
        <div class="top">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-dark">
                    <div class="logo">
                        <a href="{{ route('index') }}"> <img src="{{ asset('assets/img/logo.png') }}" alt=""></a>
                    </div>
                    <div class="collapse navbar-collapse menu-desk" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ route('index') }}">HOME</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('produtos') }}">PRODUTOS E
                                    SERVI??OS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('bonus') }}">B??NUS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('premios') }}">PR??MIOS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="http://app.gmbrasilvd.com.br/">ESCRIT??RIO
                                    VIRTUAL</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">LOJA</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">SUPORTE</a>
                            </li>
                        </ul>

                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<main>
    <div class="main">
        @yield('content')
    </div>
</main>
<!-- Footer -->
<footer class="bg-dark text-center text-white">
    <!-- Grid container -->
    <div class="container p-4">

        <!-- Section: Social media -->
        <section class="mb-4">
            <!-- Facebook -->
            <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998" href="#!" role="button"><i
                    class="fab fa-facebook-f"></i></a>

            <!-- Twitter -->
            <a class="btn btn-primary btn-floating m-1" style="background-color: #55acee" href="#!" role="button"><i
                    class="fab fa-twitter"></i></a>

            <!-- Google -->
            {{-- <a class="btn btn-primary btn-floating m-1" style="background-color: #dd4b39" href="#!" role="button"><i class="fab fa-google"></i></a> --}}

            <!-- Instagram -->
            <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac"
                href="https://www.instagram.com/gmbrasil_oficial/" target="_blank" role="button"><i
                    class="fab fa-instagram"></i></a>

            <!-- Linkedin -->
            {{-- <a class="btn btn-primary btn-floating m-1" style="background-color: #0082ca" href="#!" role="button"><i class="fab fa-linkedin-in"></i></a> --}}
            <!-- Github -->
            {{-- <a class="btn btn-primary btn-floating m-1" style="background-color: #333333" href="#!" role="button"><i class="fab fa-github"></i></a> --}}
        </section>
        <!-- Section: Social media -->


        <!-- Section: Form -->
        <section class="">
            <form action="">
                <!--Grid row-->
                <div class="row d-flex justify-content-center">
                    <!--Grid column-->
                    <div class="col-auto">
                        <p class="pt-2">
                            <strong>Inscreva-se para receber novidades</strong>
                        </p>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-5 col-12">
                        <!-- Email input -->
                        <div class="form-outline form-white mb-4">
                            <input type="email" id="form5Example2" class="form-control" />
                            <label class="form-label" for="form5Example2">Email</label>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-auto">

                        <!-- Submit button -->
                        <button type="submit" class="btn btn-outline-light mb-4">
                            Inscrever-se
                        </button>
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->
            </form>
        </section>
        <!-- Section: Form -->



        <!-- Section: Links -->
        <section class="">
            <!--Grid row-->
            <div class="row">
                <!--Grid column-->
                <div class="col-lg-3  col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Links</h5>

                    <ul class="list-unstyled mb-0">
                        <li>
                            <a href="http://app.gmbrasilvd.com.br/" class="text-white">Escrit??rio Virtual</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white">Politicas e Privacidade</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white">Sobre</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white">Suporte e Contato</a>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Contatos</h5>

                    <ul class="list-unstyled mb-0">
                        <li>
                            <a href="#!" class="text-white">(11) 99659-2837</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white">gmbrasiloportunidades@gmail.com</a>
                        </li>
                        {{-- <li>
                            <a href="#!" class="text-white">Link 3</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white">Link 4</a>
                        </li> --}}
                    </ul>
                </div>
                <!--Grid column-->

                <!--Grid column-->

            </div>
            <!--Grid row-->
        </section>
        <!-- Section: Links -->

    </div>
    <!-- Grid container -->
    <div class="whatsapp">
        <a href="https://api.whatsapp.com/send?phone=5531989157673&text=Vim%20pelo%20site" target="_blank"> <img
                src="{{ asset('assets/img/icons/whatsapp.png') }}" alt=""></a>
    </div>
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        ?? 2022 Copyright:
        <a class="text-white" href="#">GMBRASILVD</a>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->

<body>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>

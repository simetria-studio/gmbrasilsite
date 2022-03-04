<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/0ab2bcde1c.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/main.min.css') }}">
    <title>GMBRASIL VD</title>
</head>
<header>
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
                <a href="{{ route('produtos') }}" class="list-group-item list-group-item-action">PRODUTOS E SERVIÇOS</a>
                <a href="{{ route('bonus') }}" class="list-group-item list-group-item-action">BÔNUS</a>
                <a href="#" class="list-group-item list-group-item-action">PREMIOS</a>
                <a href="http://app.gmbrasilvd.com.br/" class="list-group-item list-group-item-action">ESCRITÓRIO VIRTUAL</a>
                <a class="list-group-item list-group-item-action disabled">CONTATO</a>
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
                href="https://www.instagram.com/gmbrasil_oficial/" role="button"><i class="fab fa-instagram"></i></a>

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
                            <a href="#!" class="text-white">Escritório Virtual</a>
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
                        <li>
                            <a href="#!" class="text-white">Link 3</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white">Link 4</a>
                        </li>
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

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        © 2022 Copyright:
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

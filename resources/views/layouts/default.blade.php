<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://kit.fontawesome.com/2260a42856.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/faq.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    @stack('styles')

    <title>@yield('title', 'DigitalMe')</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixe-top">
        <a class="navbar-brand" href="/"> <img class="brand-logo" src="{{ asset('images/dm-logo.svg') }}" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
              <div class="container-fluid">
              <div class="row d-flex justify-content-between">
                @auth
                <div class="col-md-6 col-lg-6">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link" href="/">Descubrir</a>
                        <a class="nav-item nav-link" href="{{ url('/faq') }}">Ayuda</a>
                        <a class="nav-item nav-link" href="{{ url('/profile') }}">Mi perfil</a>
                        <a class="nav-item nav-link" href="{{ url('/posts/new') }}">Nuevo post</a>
                        <a class="nav-item nav-link" href="{{ url('/posts') }}">Vacantes</a>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <button onclick="document.getElementById('logout-form').submit()" type="button" class="btn btn-primary">Cerrar sesion</button>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
                <div class="col-md-3 col-lg-3">
                    <form class="form-inline" action="{{ url('/posts') }}" method="GET">
                    <input class="form-control-search mr-sm-2" name="search" type="search" placeholder="Search..." aria-label="Search">
                    <a class="lupa" href="#"><ion-icon name="search"></ion-icon></a>
                    </form>
                </div>
                @else
                <div class="col-md-4 col-lg-4">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link" href="/">Descubrir</a>
                        <a class="nav-item nav-link" href="{{ url('faq') }}">Ayuda</a>
                        <a class="nav-item nav-link" href="{{ url('register') }}">Registro</a>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <button id="login-button" type="button" class="profile-button btn btn-primary">Iniciar sesión</button>
                    <p class="o">o</p>
                    <a href="{{ route('social.auth', 'google') }}"><img class="logos" src="{{ asset('images/busqueda.png') }}" alt=""></a>
                    <a href="{{ route('social.auth', 'facebook') }}"><img class="logos" src="{{ asset('images/facebook.png') }}" alt=""></a>
                    </div>
                    <div class="col-md-4 col-lg-4">
                    <form class="form-inline" action="{{ url('/posts') }}" method="GET">
                    <input class="form-control-search mr-sm-2" name="search" type="search" placeholder="Search..." aria-label="Search">
                    <a class="lupa" href="#"><ion-icon name="search"></ion-icon></a>
                    </form>
                </div>
                @endif
            </div>
        </div>
      </div>
    </nav>
    @yield('content')

    <footer class="page-footer font-small mdb-color pt-4">
        <div class="container text-center text-md-left">
            <div class="row text-center text-md-left mt-3 pb-3">
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                <h6 class="footer-h6 text-uppercase mb-4 font-weight-bold">Sobre nosotros</h6>
                <p class="footer-text">
                Somos un grupo de desarrolladores cursando en DigitalHouse
                y diseñando nuestro proyecto integrador.
                </p>
            </div>
            <hr class="w-100 clearfix d-md-none">
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                <h6 class="footer-h6 text-uppercase mb-4 font-weight-bold">Soporte</h6>
                <p class="footer-text">
                <a href="/">Contacto</a>
                </p>
                <p class="footer-text">
                <a href="#!">A</a>
                </p>
                <p class="footer-text">
                <a href="#!">B</a>
                </p>
                <p class="footer-text">
                <a href="#!">C</a>
                </p>
            </div>
            <hr class="w-100 clearfix d-md-none">
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                <h6 class="footer-h6  text-uppercase mb-4 font-weight-bold">Links</h6>
                <p class="footer-text">
                <a href="{{ url('/profile')}}">Tu perfil</a>
                </p>
                <p class="footer-text">
                <a href="/">Descubrir</a>
                </p>
                <p class="footer-text">
                <a href="{{ url('/faq') }}">Ayuda</a>
                </p>
                <p class="footer-text">
                <a href="/">Empresas</a>
                </p>
            </div>
            <hr class="w-100 clearfix d-md-none">
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                <h6 class="footer-h6  text-uppercase mb-4 font-weight-bold">Contacto</h6>
                <p class="footer-text">
                <i class="fas fa-home mr-3"></i> Monroe 860</p>
                <p class="footer-text">
                <i class="fas fa-envelope mr-3"></i> digitalme@gmail.com</p>
                <p class="footer-text">
                <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                <p class="footer-text">
                <i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
            </div>
            </div>
            <hr>
            <div class="row d-flex align-items-center">
            <div class="col-md-7 col-lg-8">
                <p class="footer-text text-center text-md-left">© 2018 Copyright:
                <a href="#">
                    <strong> digitalMe.com</strong>
                </a>
                </p>

            </div>
            <div class="col-md-5 col-lg-4 ml-lg-0">
                <div class="text-center text-md-right">
                <ul class="list-unstyled list-inline">
                    <li class="list-inline-item">
                    <a class="btn-floating btn-sm rgba-white-slight mx-1">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    </li>
                    <li class="list-inline-item">
                    <a class="btn-floating btn-sm rgba-white-slight mx-1">
                        <i class="fab fa-twitter"></i>
                    </a>
                    </li>
                    <li class="list-inline-item">
                    <a class="btn-floating btn-sm rgba-white-slight mx-1">
                        <i class="fab fa-google-plus-g"></i>
                    </a>
                    </li>
                    <li class="list-inline-item">
                    <a class="btn-floating btn-sm rgba-white-slight mx-1">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    </li>
                </ul>
                </div>
            </div>
            </div>
        </div>
    </footer>
    <script src="{{ asset('js/main.js') }}"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</body>
</html>

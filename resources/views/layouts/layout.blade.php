<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/layout.css')}}">
    <title>@yield('title')</title>
  </head>
  <body class="d-flex flex-column min-vh-100">
    <!--NavBar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="">
            <img src="{{asset('images/artistas.png')}}" alt="Logo" height="30px">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                <a class="nav-link" href="{{ route('dashboard') }}">Inicio</a>
                </li>

                <div class="dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Cursos</a>

                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{route('curso.create')}}">Crear curso</a>
                        <a class="dropdown-item" href="{{route('user.inscripciones',[Auth::user()])}}">Inscritos</a>

                        @can('create')
                        <a class="dropdown-item" href="{{route('creador.creaciones',[Auth::user()])}}">Creados</a>
                        @endcan
                        
                    </div>
                </div>

                <!--<li class="nav-item">
                    <a class="nav-link" href="#">Enseña</a>
                </li>-->

                @can('admin')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.index') }}">
                            UsersData
                        </a>
                    </li>
                @endcan

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.show', [Auth::user()]) }}"> {{ Auth::user()->name }} <!--Modificación pendiente-->
                        <img src="{{asset('images/egg.png')}}" height="30px" alt="Icono Usuario">
                    </a>
                </li>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                        {{ __('Cerrar sesión') }}
                        </a>
                    </li>
                </form>

            </ul>
        </div>
    </nav>
    <!--/NavBar-->

    @yield('content')

    <!-- Footer -->


    <div class="wrapper flex-grow-1"></div>
    <footer id="footer" class="pb-4 pt-4">
        <div class="container">
            <div class="row text-center">
                <div class="col-12 col-lg">
                    <a href="">Preguntas frecuentes</a>
                </div>
                <div class="col-12 col-lg">
                    <a href="">Contáctanos</a>
                </div>
                <div class="col-12 col-lg">
                    <a href="">Prensa</a>
                </div>
                <div class="col-12 col-lg">
                    <a href="">Términos y concidiones</a>
                </div>
                <div class="col-12 col-lg">
                    <a href="">Privacidad</a>
                </div>
                <div class="col-12 col-lg">
                    <a href="">Estudiantes</a>
                </div>
            </div>
        </div>
    </footer>
    <!--/Footer -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>

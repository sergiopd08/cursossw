@extends('layouts.layout')
@section('title', 'Inicio')

@section('content')

<link rel="stylesheet" href="{{asset('css/home.css')}}">

    <!--Main-Carousel-->
    <main id="main">
    <div id="carousel" class="carousel slide carousel" data-ride="carousel" data-pause="false">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('images/1.png')}}" class="d-block w-100" alt="Family">
            </div>
            <div class="carousel-item">
                <img src="{{asset('images/2.png')}}" class="d-block w-100" alt="Students">
            </div>
            <div class="carousel-item">
                <img src="{{asset('images/3.png')}}" class="d-block w-100" alt="Programmer">
            </div>
            <div class="overlay">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6 text-center text-md-left">
                            <h1>Desarrolla tu potencial</h1>
                            <p class="d-none d-md-block">Aprende las habilidades del futuro el día de hoy. El conocimiento no tiene límites. ¡Inscríbete ya!</p>
                            <a href="#" class="btn btn-outline-light">Quiero enseñar</a>
                            <button type="button" class="btn btn-cursos">Más información</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </main>
    <!--/Main-Carousel-->

    <!---->
    <div class="container mt-4 mb-4">
        <div class="row text-center">
            <div class="col-4">
                <div class="card m-auto" style="width: 18rem;">
                        @foreach ($cursos as $curso)
                            <div class="card-header">
                                <h6>{{ $curso->nombre }}</h6>
                            </div>

                            <div class="card-body">
                                <a href="{{ route('curso.show', [$curso->id]) }}" class="btn btn-secondary mb-2">Ver</a>
                            </div>

                            <ul class="list-group list-group-item">
                                <li class="list-group-item">{{ $curso->categoria }}</li>
                            </ul>
                        @endforeach
                </div>
            </div>
        </div>
    </div>
    <!---->

@endsection

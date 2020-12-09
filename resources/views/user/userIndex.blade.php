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

    @if ( session()->has('message') )
        <div class="alert alert-success text-center">
            {{ session()->get('message') }}
        </div>
    @endif

    <!---->
    <div class="container mt-4 mb-4">
        <div class="row text-center">
            @foreach ($users as $user)
            <div class="col col-md-6 col-lg-4 mt-4">
                <div class="card m-auto" style="width: 18rem;">
                    <div class="card-header" id="card-h">
                        <h6>{{ $user->name }}</h6>
                    </div>
                    <ul class="list-group list-group-item">
                        <li class="list-group-item"><b>Email:</b> {{ $user->email }}</li>
                    </ul>
                    <ul class="list-group list-group-item">
                        <li class="list-group-item"><b>Edad:</b> {{ $user->edad }}</li>
                    </ul>
                    <ul class="list-group list-group-item">
                        <li class="list-group-item"><b>Ocupación:</b> {{ $user->ocupacion }}</li>
                    </ul>
                    <div class="card-body">
                        <a href="{{ route('user.show', [$user]) }}" class="btn btn-secondary mb-2" id="btn-ver">Ver</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!---->

@endsection

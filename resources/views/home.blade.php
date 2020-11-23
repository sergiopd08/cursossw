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

  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">Prepárate</h1>
      <p class="lead">Aquí podrás encontrar cursos que te herán un mejor profesionista.</p>
      <a class="btn btn-primary btn-lg" href="#" role="button">Aprende</a>
    </div>
  </div>
  
@endsection
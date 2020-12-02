@extends('layouts.layout')
@section('title','Curso de')
<link rel="stylesheet" href="{{asset('css/cursoShow.css')}}">

@section('content')

<!--Jumbotron-->
<div class="container-jumbotron">
  <div class="cover jumbotron jumbotron-fluid mt-2" id="cover">
      <div class="container-fluid">
          <div class="row align-items-center">
              <div class="col-5">
                  <h1 class="display-4 text-uppercase" id="nombre-curso">{{ $curso->nombre }}</h1>
                  <p class="lead" id="desc-curso">{{ $curso->descripcion }}</p>
                  <a href="#" class="btn btn-outline-secondary">Compartir</a>
                  <a href="#" class="btn btn-outline-secondary">Añadir a favoritos</a>
              </div>
              <div class="col-1">
              </div>
              <div class="col-sm-12 col-lg-6 col-md-6 text-center">
                  <div class="card m-auto" style="width: 18rem;">
                      <div class="card-header">
                          {{ $curso->costo }}
                      </div>
                      <div class="card-body">
                          <a href="#" class="btn btn-primary mb-2">Incribirse ahora</a>
                          <a href="#" class="btn btn-warning">Agregar al carrito</a>
                      </div>
                      <ul class="list-group list-group-item">
                          <li class="list-group-item">{{ $curso->categoria }}</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<!--/Jumbotron-->

<div class="container mb-4">
  <div class="row">
      <div class="col-12 text-center text-uppercase">
          <small>Información del</small>
          <h2>Curso</h2>
      </div>
  </div>
  <div class="row mb-3">
      <div class="col-12">
          <ul class="list-group list-group-flush">
              <li class="list-group-item">Idioma: {{ $curso->idioma }} </li>
              <li class="list-group-item">Aprendizajes: {{ $curso->aprendizajes }} </li>
              <li class="list-group-item">Requisitos: {{ $curso->requisitos }} </li>
          </ul>
      </div>
  </div>
  <div class="row mt-3">
      <div class="col-12">
          <div class="card">
              <h5 class="card-header">Enseña en SW</h5>
              <div class="card-body">
                  <h5 class="card-title">Crea contenido</h5>
                  <p class="card-text">Crea un curso en vídeo en línea, llega a estudiantes de todo el mundo y gana dinero</p>
                  <a href="#" class="btn btn-primary">Vamos</a>
              </div>
          </div>
      </div>
  </div>
</div>

<!--Content
<div class="container">
  <div class="row align-items-center mb-4">
      <div class="col text-center text-uppercase">

      </div>
      <div class="col-12">
          <ul class="list-group list-group-flush">
              <li class="list-group-item">Idioma: </li>
              <li class="list-group-item">Aprendizajes: </li>
              <li class="list-group-item">Requisitos: </li>
          </ul>
      </div>
  </div>
</div>-->

<div class="container" id="teach">

</div>
<!--/Content-->


@endsection

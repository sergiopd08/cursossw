@extends('layouts.layout')
@section('title','Crear curso')

<link rel="stylesheet" href="{{asset('css/cursoCreate.css')}}">

@section('content')

 <!--Main-Carousel-->
 <main id="main">
    <div id="carousel" class="carousel slide carousel" data-ride="carousel" data-pause="false">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('images/curso1.png')}}" class="d-block w-100" alt="Maestro">
            </div>
            <div class="carousel-item">
                <img src="{{asset('images/curso2.png')}}" class="d-block w-100" alt="Programador">
            </div>
            <div class="carousel-item">
                <img src="{{asset('images/curso3.png')}}" class="d-block w-100" alt="Contador">
            </div>
            <div class="overlay">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6 text-center text-md-left">
                            <h1>Ayuda a crear un mejor futuro</h1>
                            <p class="d-none d-md-block">Al transmitir tus conocimientos en esta plataforma, te desarrollas profesionalmente y ayudas a otros a ser mejores.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!--/Main-Carousel-->

<!--Form-->
<section id="crear-curso" class="mt-4 mb-4">
    <div class="container">
        <div class="row align-items-start">
            <div class="col text-center text-uppercase">
                <small>Crear un</small>
                <h2>curso</h2>
            </div>
        </div>
        <form>
            <div class="form-group row">
                <label for="exampleInputEmail1">Nombre del curso</label>
                <input type="text" class="form-control" id="nombreCurso">
            </div>
            <div class="form-group row">
                <label for="costoCurso">Costo:</label>
                <input type="number" class="form-control" id="costoCurso" step="0.1">
            </div>
            <div class="form-group row">
                <label for="descripcionCurso">Descripcion:</label>
                <textarea class="form-control" rows="4" cols="50" id="descripcionCurso"></textarea>
            </div>
            <div class="form-group row">
                <label for="idioma">Idioma</label>
                <input type="text" class="form-control" id="idiomaCurso">
            </div>
            <div class="form-group row">
                <label for="aprendizajeCurso">Aprendizajes a desarrollar:</label>
                <textarea class="form-control" rows="4" cols="50" id="aprendizajeCurso"></textarea>
            </div>
            <div class="form-group row">
                <label for="requisitosCurso">Requisitos:</label>
                <textarea class="form-control" rows="4" cols="50" id="requisitosCurso"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Crear curso</button>
        </form>
    </div>
</section>
<!--/Form-->

@endsection

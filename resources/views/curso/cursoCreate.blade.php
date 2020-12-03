@extends('layouts.layout')
@section('title','Crear curso')

<link rel="stylesheet" href="{{asset('css/curso/cursoCreate.css')}}">

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
                            <p class="d-none d-md-block">Al transmitir tus conocimientos en esta plataforma, te desarrollas profesionalmente y ayudas a otros a desarrollarse.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!--/Main-Carousel-->

<!---->
<div class="container mb-4">
    <div class="row">
        <div class="col text-center text-uppercase mb-4 mt-4">
            <small>Crear un</small>
            <h2>curso</h2>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card">
                <h6 class="card-header text-center">Crear curso</h6>

                @if ( $errors->any() )
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('curso.store') }}" method="POST" >

                <div class="container">
                        @csrf
                        <div class="row mt-2">
                            <div class="col-8">
                                <label for="nombre">* Nombre del curso:</label>
                                <input value="{{ old('nombre') ?? $curso->nombre ?? '' }}" for="nombre" name="nombre" type="text" class="form-control" id="nombreCurso">
                            </div>
                            <div class="col-1">
                                <!--Espacio-->
                            </div>
                            <div class="col-3">
                                <label for="costo">* Costo:</label>
                                <input value="{{old('costo') ?? $curso->costo ?? ''}}" for="costo" name="costo" type="number" class="form-control" id="costoCurso" step="1">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <label for="descripcion">Descripción:</label>
                                <textarea for="descripcion" name="descripcion" class="form-control" rows="4" cols="50" id="descripcionCurso"> {{old('descripcion') ?? $curso->descripcion ?? ''}} </textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <label for="idioma">* Idioma:</label>
                                <input value="{{old('idioma') ?? $curso->idioma ?? ''}}" for="idioma" name="idioma" type="text" class="form-control" id="idiomaCurso">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="categoria">Categoría</label>
                                <select class="custom-select" for="categoria" name="categoria" id="categoria">

                                    @if ( empty(old('categoria')) )
                                        <option value="">--Seleccione una opción--</option>
                                        <option value="Ciencia y tecnologia">Ciencia y técnología</option>
                                        <option value="Arte">Arte</option>
                                        <option value="Humanidades">Humanidades</option>
                                        <option value="Negocios">Negocios</option>
                                    @else

                                        <option value="{{ old('categoria') }}"> {{ old('categoria') }} </option>

                                        @if ( old('categoria') != "Ciencia y tecnologia")
                                            <option value="Ciencia y tecnologia">Ciencia y técnología</option>
                                        @endif
                                        @if ( old('categoria') != "Arte")
                                            <option value="Arte">Arte</option>
                                        @endif
                                        @if ( old('categoria') != "Humanidades")
                                            <option value="Humanidades">Humanidades</option>
                                        @endif
                                        @if ( old('categoria') != "Negocios")
                                            <option value="Negocios">Negocios</option>
                                        @endif

                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <label for="aprendizaje">Aprendizaje:</label>
                                <textarea for="aprendizaje" name="aprendizaje" class="form-control" rows="4" cols="50" id="aprendizajeCurso"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <label for="requisitos">Requisitos:</label>
                                <textarea for="requisitos" name="requisitos" class="form-control" rows="4" cols="50" id="requisitosCurso"></textarea>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col mt-2 mb-3">
                                <button type="submit" class="btn btn-success">Crear curso</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!---->


@endsection

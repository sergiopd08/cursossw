@extends('layouts.layout')
@section('title','Ajustes de curso')

<link rel="stylesheet" href="{{asset('css/cursoSettings.css')}}">


@section('content')

<!---->
<div class="container mb-4">
    <div class="row">
        <div class="col text-center text-uppercase mb-4 mt-4">
            <small>información y</small>
            <h2>Ajustes</h2>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card">
                <h6 class="card-header text-center">{{ $curso->nombre }}</h6>

                    <div class="container">
                        <div class="row mt-2">
                            <div class="col-8">
                                    <label for="nombre">Nombre del curso:</label>
                                    <input for="nombre" name="nombre" value="{{ $curso->nombre }}" type="text" class="form-control" id="nombreCurso" readonly>
                            </div>
                            <div class="col-1">
                                <!--Espacio-->
                            </div>
                            <div class="col-3">
                                <label for="costo">Costo:</label>
                                <input for="costo" name="costo" value="{{ $curso->costo }}" type="number" class="form-control" id="costoCurso" step="1" readonly>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <label for="descripcion">Descripción:</label>
                                <textarea for="descripcion" name="costo" class="form-control" rows="4" cols="50" id="descripcionCurso" readonly> {{ $curso->descripcion }} </textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <label for="idiomaCurso">Idioma:</label>
                                <input for="idioma" name="idioma" value="{{ $curso->idioma }}" type="text" class="form-control" id="idiomaCurso" readonly>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <label for="aprendizaje">Aprendizaje:</label>
                                <textarea class="form-control" rows="4" cols="50" id="aprendizajeCurso" readonly></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <label for="requisitos">Requisitos:</label>
                                <textarea for="requisitos" name="requisitos" class="form-control" rows="4" cols="50" id="requisitosCurso" readonly> {{ $curso->requisitos }} </textarea>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col mt-2 mb-3">

                                <button type="button" class="btn btn-warning"> <a href="{{ route('curso.modify', [$curso]) }}"> Modificar </a> </button>

                                <form action="{{ route('curso.destroy', [$curso]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form>
                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </div>
</div>
<!---->


@endsection

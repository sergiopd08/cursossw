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
                <h6 class="card-header text-center">Ajustes</h6>
                <div class="container">
                    <div class="row mt-2">
                        <div class="col-8">
                            <form>
                                <label for="nombreCurso">Nombre del curso:</label>
                                <input type="text" class="form-control" id="nombreCurso" readonly>
                            </form>
                        </div>
                        <div class="col-1">
                            <!--Espacio-->
                        </div>
                        <div class="col-3">
                            <label for="costoCurso">Costo:</label>
                            <input type="number" class="form-control" id="costoCurso" step="1" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <label for="descripcionCurso">Descripción:</label>
                            <textarea class="form-control" rows="4" cols="50" id="descripcionCurso" readonly></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <label for="idiomaCurso">Idioma:</label>
                            <input type="text" class="form-control" id="idiomaCurso" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <label for="aprendizajeCurso">Aprendizaje:</label>
                            <textarea class="form-control" rows="4" cols="50" id="aprendizajeCurso" readonly></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <label for="requisitosCurso">Requisitos:</label>
                            <textarea class="form-control" rows="4" cols="50" id="requisitosCurso" readonly></textarea>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col mt-2 mb-3">
                            <button type="button" class="btn btn-warning">Modificar</button>
                            <button type="button" class="btn btn-danger">Eliminar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!---->


@endsection
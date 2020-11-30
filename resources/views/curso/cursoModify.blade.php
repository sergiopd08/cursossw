@extends('layouts.layout')
@section('title','Modificar curso')
@section('content')

<!---->
<div class="container mb-4">
    <div class="row">
        <div class="col text-center text-uppercase mb-4 mt-4">
            <small>Datos para</small>
            <h2>Actualizar</h2>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card">
                <h6 class="card-header text-center">Ajustes</h6>
                <div class="container">
                    <div class="row mt-2">
                        <div class="col-1">
                            <form>
                                <label for="idCurso">ID</label>
                                <input type="number" class="form-control" id="idCurso" readonly>

                            </form>
                        </div>
                        <div class="col-8">
                            <label for="nombreCurso">Nombre del curso:</label>
                            <input type="text" class="form-control" id="nombreCurso">
                        </div>
                        <div class="col-3">
                            <label for="costoCurso">Costo:</label>
                            <input type="number" class="form-control" id="costoCurso" step="1">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <label for="descripcionCurso">Descripción:</label>
                            <textarea class="form-control" rows="4" cols="50" id="descripcionCurso"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <label for="idiomaCurso">Idioma:</label>
                            <input type="text" class="form-control" id="idiomaCurso">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <label for="aprendizajeCurso">Aprendizaje:</label>
                            <textarea class="form-control" rows="4" cols="50" id="aprendizajeCurso"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <label for="requisitosCurso">Requisitos:</label>
                            <textarea class="form-control" rows="4" cols="50" id="requisitosCurso"></textarea>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col mt-2 mb-3">
                            <button type="button" class="btn btn-info">Guardar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!---->


@endsection
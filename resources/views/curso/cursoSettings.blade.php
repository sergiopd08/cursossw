@extends('layouts.layout')
@section('title','Ajustes de curso')

<link rel="stylesheet" href="{{asset('css/cursoSettings.css')}}">


@section('content')

<div class="hero">
    <div class="form-box">
        <form>
            <div class="row align-items-center">
                <div class="col text-center text-uppercase">
                    <small>Ajustes de</small>
                    <h2>Curso</h2>
                </div>
            </div>
            <div class="form-group row">
                <label for="nombreCurso" class="col-sm-2 col-form-label">Nombre:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputNombre">
                </div>
            </div>
            <div class="form-group row">
                <label for="fechaCurso" class="col-sm-2 col-form-label">Fecha de creación:</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="fechaCurso">
                </div>
            </div>
            <div class="form-group row">
                <label for="costoCurso" class="col-sm-2 col-form-label">Costo:</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="costoCurso" step=".1">
                </div>
            </div>
            <div class="form-group row">
                <label for="descripcionCurso" class="col-sm-2 col-form-label">Descripción:</label>
                <div class="col-sm-10">
                    <textarea id="descripcionCurso" class="form-control" rows="5" cols="50"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="idiomaCurso" class="col-sm-2 col-form-label">Idioma:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="idiomaCurso">
                </div>
            </div>
            <div class="form-group row">
                <label for="aprendizajeCurso" class="col-sm-2 col-form-label">Aprendizaje:</label>
                <div class="col-sm-10">
                    <textarea id="aprendizajeCurso" class="form-control" rows="5" cols="50"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="requisitosCurso" class="col-sm-2 col-form-label">Requisitos:</label>
                <div class="col-sm-10">
                    <textarea id="requisitosCurso" class="form-control" rows="5" cols="50"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10 justify-content-center">
                    <button type="submit" class="btn btn-info">Modificar</button>
                    <button type="submit" class="btn btn-danger">Eliminar curso</button>
                </div>
            </div>
        </form>
    </div>

@endsection
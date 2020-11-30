@extends('layouts.layout')
@section('title', 'Unirse al equipo')

<link rel="stylesheet" href="{{asset('css/css/creador/creadorCreate.css')}}">
@section('content')
    <!---->
    <div class="container mt-4 mb-5">
        <div class="row">
            <div class="col">
                <div class="card">
                    <h6 class="card-header">Únete al equipo</h6>
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <form>
                                    <label for="descripcionCreador">Cuéntanos sobre ti</label>
                                    <textarea id="descripcionCreador" rows="4" cols="50" class="form-control"></textarea>
                                </form>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8 mt-3">
                                <form>
                                    <label for="instCreador">Elige tu institución (Si no aparece puedes crearla)</label>
                                    <select class="form-control">
                                        <option>Seleccione una opción</option>
                                    </select>
                                </form>
                            </div>
                            <div class="col-4 mt-5 mb-4">
                                <button type="button" class="btn btn-secondary">Crear institución</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-4">
                                <button type="button" class="btn btn-success">Unirse</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---->
@endsection
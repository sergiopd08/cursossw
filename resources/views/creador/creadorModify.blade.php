@extends('layouts.layout')
@section('title','Creador - Modificar')
@section('content')

    <div class="container mb-5">
        <div class="row">
            <div class="col">
                <div class="card">
                    <h6 class="card-header">Datos de creador</h6>
                    <div class="container">
                        <div class="row mt-2">
                            <div class="col-2 mt-3">
                                <form>
                                    <label for="idCreador">ID:</label>
                                    <input type="number" class="form-control" id="idCreador" readonly>
                                </form>
                            </div>
                            <div class="col-7 mt-3">
                                <form>
                                    <label for="instCreador">Institución:</label>
                                    <select class="form-control">
                                        <option>Seleccione una opción</option>
                                    </select>
                                </form>
                            </div>
                            <div class="col-3 mt-5">
                                <button type="button" class="btn btn-success">Crear nueva institución</button>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col">
                                <form>
                                    <label for="descCreador">Descripción:</label>
                                    <textarea id="descCreador" cols="50" rows="4" class="form-control"></textarea>
                                </form>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col">
                                <button type="button" class="btn btn-success">Guardar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
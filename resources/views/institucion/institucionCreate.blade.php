@extends('layouts.layout')
@section('title', 'Afiliar institucion')
@section('content')

<div class="container mt-4 mb-4">
    <div class="row">
        <div class="col">
            <div class="card">
                <h6 class="card-header">Datos de la institución</h6>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <form>
                                <label for="institucionNombre">Nombre</label>
                                <input type="text" id="institucionNombre" class="form-control">
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <form>
                                <label for="institucionDir">Dirección</label>
                                <input type="text" id="institucionDir" class="form-control">
                            </form>
                        </div>
                    </div>
                    <div class="row mt-3 mb-4">
                        <div class="col">
                            <button type="button" class="btn btn-success">Crear isntitución</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@extends('layouts.layout')
@section('title', 'Afiliar institucion')
@section('content')

<div class="container mt-4 mb-4">
    <div class="row">
        <div class="col">

            @if ( $errors->any() )
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="card">
                <h6 class="card-header">Datos de la institución</h6>

                <form action="{{ route('institucion.store') }}" method="POST">
                    @csrf
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                    <label for="nombre">Nombre</label>
                                    <input for="nombre" name="nombre" value="{{ old('nombre') ?? $institucion->nombre ?? '' }}" type="text" id="institucionNombre" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <form>
                                    <label for="direccion">Dirección</label>
                                    <input for="direccion" name="direccion" value="{{ old('direccion') ?? $institucion->direccion ?? '' }}" type="text" id="institucionDir" class="form-control">
                                </form>
                            </div>
                        </div>
                        <div class="row mt-3 mb-4">
                            <div class="col">
                                <button type="submit" class="btn btn-success">Crear Institución</button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@extends('layouts.layout')
@section('title', 'Modificar usuario')
@section('content')

<div class="container-fluid">
    <div class="jumbotron jumbotron-fluid" id="user-jumbo">
        <div class="container-fluid align-self-center">
            <div class="row">
                <div class="col-12 d-flex justify-content-center mb-3">
                    <img src="{{asset('images/perfilUsuario.png')}}" style="width: 100px">
                </div>
                <div class="col-12 d-flex justify-content-center">
                    <h6>{{ $user->name }}</h6>
                </div>
                <div class="col-12 d-flex justify-content-center">
                    <h6>ID: {{ $user->id }} </h6>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid" id="mid-bar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Ajustes <span class="sr-only">(current)</span></a>
                </li>
                <!--<li class="nav-item">
                    <a class="nav-link" href="#">Cursos</a>
                </li>-->
            </ul>
        </div>
    </nav>
</div>

<div class="container" id="user-info">

    @if ( $errors->any() )
        <div class="alert alert-danger text-center">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row">
        <div class="col-lg-3 col-sm-12 mb-4">
            <div class="card">
                <h6 class="card-header">Ajustes de usuario</h6>
                <nav class="nav nav-tabs flex-column">
                    <a href="{{route('user.show', [$user])}}" class="nav-link">Ver perfil</a>
                    <a href="{{route('user.edit', [$user])}}" class="nav-link">Modificar perfil</a>

                    <form action="{{ route('user.destroy', [$user]) }}" method="POST" id="deleteUser">
                        @csrf
                        @method('DELETE')
                    </form>

                    <button form="deleteUser"  style="text-align: left; color: blue" class="nav-link" > Eliminar cuenta</button>
                </nav>
            </div>
        </div>
        <div class="col-lg-1">
            <!--Espacio-->
        </div>
        <div class="col-lg-8">
            <div class="card">
                <h6 class="card-header">Información de usuario</h6>
                <form action="{{ route('user.update', [$user]) }}" method="POST">
                    @csrf
                    @method('PATCH')

                    <div class="container">
                        <div class="row mt-3">
                            <div class="col-3">
                                <form>
                                    <div class="form-group">
                                        <label for="id-input">ID:</label>
                                        <input value="{{ $user->id }}" type="number" class="form-control" id="id-input" readonly>
                                    </div>
                                </form>
                            </div>
                            <div class="col-2">
                                <!--Espacio-->
                            </div>
                            <div class="col-7">
                                    <div class="form-group">
                                        <label for="nombre-input">Nombre:</label>
                                        <input value="{{ old('name') ?? $user->name ?? '' }}" for="name" name="name" type="text" class="form-control" id="id-input">
                                    </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="correo-input">Email:</label>
                                    <input name="email" for="email" value="{{ old('email') ?? $user->email ?? '' }}" type="text" class="form-control" id="correo-input">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="date-input">Ocupación:</label>
                                    <input name="ocupacion" for="ocupacion" value="{{ old('ocupacion') ?? $user->ocupacion ?? '' }}" type="text" class="form-control" id="ocupacion-input">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="edad-input">Edad:</label>
                                    <input name="edad" for="edad" value="{{ old('edad') ?? $user->edad ?? '' }}" type="number" class="form-control" id="edad-input">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="edad-input">Nombre de Institución Afiliada:</label>
                                    <input value="{{ $institucion->nombre }}" type="text" class="form-control" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="edad-input">Dirección de Institución Afiliada:</label>
                                    <input value="{{ $institucion->direccion }}" type="text" class="form-control" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-warning" data-toggle="popover">Guardar cambios</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection

@extends('layouts.layout')
@section('title', 'Creador - Ajustes')
@section('content')

    <!--/NavBar-->
    <div class="container-fluid">
        <div class="jumbotron jumbotron-fluid" id="user-jumbo">
            <div class="container-fluid align-self-center">
                <div class="row">
                    <div class="col-12 d-flex justify-content-center mb-3">
                        <img src="icon.png" style="width: 100px">
                    </div>
                    <div class="col-12 d-flex justify-content-center">
                        <h6>Nombre</h6>
                    </div>
                    <div class="col-12 d-flex justify-content-center">
                        <h6>ID: </h6>
                        <h6> # </h6>
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
        <div class="row">
            <div class="col-lg-3 col-sm-12">
                <div class="card">
                    <h6 class="card-header">Ajustes de usuario</h6>
                    <nav class="nav nav-tabs flex-column">
                        <a href="#" class="nav-link">Ver perfil de usuario</a>
                        <a href="#" class="nav-link">Modificar Información de creador</a>
                        <a href="#" class="nav-link">Ver cursos</a>
                    </nav>
                </div>
            </div>
            <div class="col-lg-1">
                <!--Espacio-->
            </div>
            <div class="col-lg-8">
                <div class="card">
                    <h6 class="card-header">Información de usuario</h6>
                    <div class="container">
                        <div class="row mt-3">
                            <div class="col-3">
                                <form>
                                    <div class="form-group">
                                        <label for="id-input">ID:</label>
                                        <input type="number" class="form-control" id="id-input" readonly>
                                    </div>
                                </form>
                            </div>
                            <div class="col-2">
                                <!--Espacio-->
                            </div>
                            <div class="col-7">
                                <form>
                                    <div class="form-group">
                                        <label for="nombre-input">Nombre:</label>
                                        <input type="text" class="form-control" id="id-input" readonly>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="correo-input">Email:</label>
                                    <input type="text" class="form-control" id="correo-input" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="date-input">Fecha de creación:</label>
                                    <input type="date" class="form-control" id="date-input" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="edad-input">Edad:</label>
                                    <input type="number" class="form-control" id="edad-input" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-5">
        <div class="row">
            <div class="col">
                <div class="card">
                    <h6 class="card-header">Datos de creador</h6>
                    <div class="container">
                        <div class="row mt-2">
                            <div class="col-3">
                                <form>
                                    <label for="idCreador">ID:</label>
                                    <input type="number" class="form-control" id="idCreador" readonly>
                                </form>
                            </div>
                            <div class="col-1">
                                <!--Espacio-->
                            </div>
                            <div class="col-8">
                                <form>
                                    <label for="instCreador">Institución:</label>
                                    <input type="text" class="form-control" id="instCreador" readonly>
                                </form>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col">
                                <form>
                                    <label for="descCreador">Descripción:</label>
                                    <textarea id="descCreador" cols="50" rows="4" class="form-control" readonly></textarea>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
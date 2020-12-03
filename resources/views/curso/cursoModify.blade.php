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

            @if ( $errors->any() )
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('curso.update', [$curso]) }}" method="POST">
                @csrf
                @method('PATCH')

                <div class="card">
                    <h6 class="card-header text-center">{{ $curso->nombre }}</h6>
                    <div class="container">
                        <div class="row mt-2">
                            <div class="col-1">
                                <label for="idCurso">ID</label>
                                <input value="{{ $curso->id }}" type="number" class="form-control" id="idCurso" readonly>
                            </div>
                            <div class="col-8">
                                <label for="nombre">Nombre del curso:</label>
                                <input for="nombre" name="nombre" value="{{ old('nombre') ?? $curso->nombre ?? ''}}"  type="text" class="form-control" id="nombreCurso">
                            </div>
                            <div class="col-3">
                                <label for="costo">Costo:</label>
                                <input for="costo" name="costo" value="{{old('costo') ?? $curso->costo ?? ''}}" type="number" class="form-control" id="costoCurso" step="1">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <label for="descripcion">Descripción:</label>
                                <textarea for="descripcion" name="descripcion" class="form-control" rows="4" cols="50" id="descripcionCurso"> {{old('descripcion') ?? $curso->descripcion ?? ''}} </textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <label for="idioma">Idioma:</label>
                                <input for="idioma" name="idioma" value="{{old('idioma') ?? $curso->idioma ?? ''}}" type="text" class="form-control" id="idiomaCurso">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <label for="aprendizajes">Aprendizaje:</label>
                                <textarea for="aprendizajes" name="aprendizajes" class="form-control" rows="4" cols="50" id="aprendizajeCurso"> {{old('aprendizajes') ?? $curso->aprendizajes ?? ''}} </textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <label for="requisitos">Requisitos:</label>
                                <textarea for="requisitos" name="requisitos" class="form-control" rows="4" cols="50" id="requisitosCurso"> {{old('requisitos') ?? $curso->requisitos ?? ''}} </textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="categoria">Categoría</label>

                                <select class="custom-select" for="categoria" name="categoria" id="categoria">

                                    @if ( empty(old('categoria')) )

                                        <option value="{{ $curso->categoria }}"> {{ $curso->categoria }} </option>

                                        @if ( $curso->categoria != "Ciencia y tecnologia")
                                            <option value="Ciencia y tecnologia">Ciencia y técnología</option>
                                        @endif
                                        @if ( $curso->categoria != "Arte")
                                            <option value="Arte">Arte</option>
                                        @endif
                                        @if ( $curso->categoria != "Humanidades")
                                            <option value="Humanidades">Humanidades</option>
                                        @endif
                                        @if ( $curso->categoria != "Negocios")
                                            <option value="Negocios">Negocios</option>
                                        @endif

                                    @else

                                        <option value="{{ old('categoria') }}"> {{ old('categoria') }} </option>

                                        @if ( old('categoria') != "Ciencia y tecnologia")
                                            <option value="Ciencia y tecnologia">Ciencia y técnología</option>
                                        @endif
                                        @if ( old('categoria') != "Arte")
                                            <option value="Arte">Arte</option>
                                        @endif
                                        @if ( old('categoria') != "Humanidades")
                                            <option value="Humanidades">Humanidades</option>
                                        @endif
                                        @if ( old('categoria') != "Negocios")
                                            <option value="Negocios">Negocios</option>
                                        @endif

                                    @endif
                                </select>

                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col mt-2 mb-3">
                                <button type="submit" class="btn btn-info">Guardar</button>
                            </div>
                        </div>
                    </div>

            </form>

            </div>
        </div>
    </div>
</div>
<!---->


@endsection

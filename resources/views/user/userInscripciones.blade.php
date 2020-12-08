@extends('layouts.layout')
@section('title', 'Mis cursos')

<link rel="stylesheet" href="{{asset('css/css/creador/cursosInscritos.css')}}">
@section('content')

    <!--Content-->
    <div class="container">
        <div clas="row">
            <div class="col text-center text-uppercase mb-4 mt-4">
                <small>Mi</small>
                <h2>Aprendizaje</h2>
            </div>
        </div>
        <div clas="row">
            <div class="col-4 text-center mb-4">
                @foreach ($user->cursos as $curso)

                    <div class="card m-auto" style="width: 18rem;">
                        <div class="card-header">
                            <h6> {{ $curso->nombre }} </h6>
                        </div>
                        <div class="card-body">
                            <a href="{{ route('curso.show', [$curso]) }}" class="btn btn-secondary mb-2">Ver</a>
                        </div>
                        <ul class="list-group list-group-item">
                            <li class="list-group-item">{{ $curso->categoria }}</li>
                        </ul>
                    </div>
                    </br>

                @endforeach
            </div>
        </div>
    </div>
    <!--/Content-->

@endsection

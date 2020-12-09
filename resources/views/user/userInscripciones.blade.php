@extends('layouts.layout')
@section('title', 'Mis cursos')

<link rel="stylesheet" href="{{asset('css/user/cursosInscritos.css')}}">
@section('content')



<!--Content-->
<div class="container">
    <div clas="row">
        <div class="col text-center text-uppercase mb-4 mt-4">
            <small>Mi</small>
            <h2>Aprendizaje</h2>
        </div>
    </div>
</div>


<div class="container">
    <div class="row text-center">
        @foreach($user->cursos as $curso)
        <div class="col col-md-6 col-lg-4 mt-4 mb-4">
            <div class="card m-auto" style="width: 18rem;">
                <div class="card-header" id="card-h">
                    <h6>{{ $curso->nombre }}</h6>
                </div>
                <div class="card-body">
                    <a href="{{ route('curso.show', [$curso]) }}" class="btn btn-secondary mb-2" id="btn-ver">Ver</a>
                </div>
                <ul class="list-group list-group-item">
                    <li class="list-group-item">{{ $curso->categoria }}</li>
                </ul>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection

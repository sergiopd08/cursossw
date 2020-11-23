@extends('layouts.layout')
@section('title','Curso de')
<link rel="stylesheet" href="{{asset('css/cursoShow.css')}}">

@section('content')

<div class="row row-cols-1 row-cols-md-4">
    <div class="col mb-4">
      <div class="card" style="width: 18rem;">
        <img src="{{asset('images/books.jpeg')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
      </div>
    </div>
  </div>


@endsection
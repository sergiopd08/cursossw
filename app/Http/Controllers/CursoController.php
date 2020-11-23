<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index() {
        return view ('curso.cursoIndex');
    }

    public function create() {
        return view ('curso.cursoCreate');
    }

    public function show() {
        return view ('curso.cursoShow');
    }

    public function edit(){
        return view ('curso.cursoSettings');
    }
}

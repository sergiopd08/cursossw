<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        $cursos = Curso::get();

        return view('home', compact('cursos'));
    }
}

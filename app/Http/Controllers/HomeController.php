<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $cursos = Curso::get();

        return view('home', compact('cursos'));
    }

    public function home()
    {
        return redirect()->route('index');
    }
}

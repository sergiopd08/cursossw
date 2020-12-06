<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Gate;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursos = Curso::get();

        return view('home', compact('cursos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Curso.cursoCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request;
        //dd($request->categoria);

        $request->validate([
            'nombre' => 'required | string | min:5',
            'costo' => 'required | numeric',
            'descripcion' => 'string | nullable',
            'idioma' => 'required | string | min:4',
            'aprendizajes' => 'string | nullable',
            'requisitos' => 'string | nullable',
            'categoria' => 'string | required'
        ]);

        Curso::create( $request->all() );

        return redirect()->route('curso.index')->with('message', 'Curso creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function show(Curso $curso)
    {
        return view('Curso.cursoShow', compact('curso'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function edit(Curso $curso)
    {
        return view('Curso.cursoSettings', compact('curso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Curso $curso)
    {
        $request->validate([
            'nombre' => 'required | string | min:5',
            'costo' => 'required | numeric',
            'descripcion' => 'string | nullable',
            'idioma' => 'required | string | min:4',
            'aprendizajes' => 'string | nullable',
            'requisitos' => 'string | nullable',
            'categoria' => 'string | required'
        ]);

        Curso::where('id', $curso->id)->update($request->except('_method', '_token'));

        return redirect()->route('curso.show', [$curso])->with('message', 'Curso modificado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function destroy(Curso $curso)
    {
        $curso->delete();

        return redirect()->route('curso.index')->with('message', 'El curso ha sido ELIMINADO');
    }

    public function modify(Curso $curso)
    {
        Gate::authorize('admin'); // Gate para sólo admin

        return view('Curso.cursoModify', compact('curso'));
    }
}

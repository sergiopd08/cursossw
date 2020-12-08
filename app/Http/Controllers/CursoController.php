<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Auth;
use App\Models\Creador;

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
            'categoria' => 'required'
        ]);

        $curso = Curso::create( $request->all() );

        //$curso->users()->attach( Auth::user()->id );

        Creador::create([
            'user_id' => Auth::user()->id
        ]);

        $curso->creadores()->attach(Auth::user()->id);

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
        $bool_inscrito = false;
        $bool_creado = false;

        if ( sizeof( DB::select('select curso_id from curso_user where curso_id = ? and user_id = ?', [$curso->id, Auth::user()->id]) ) == 0 )
        {
            $bool_inscrito = true;
        }

        if ( sizeof(DB::select('select curso_id from creador_curso where curso_id = ? and creador_id = ?', [$curso->id, Auth::user()->id]) ) == 0 )
        {
            $bool_creado = true;
        }

        return view('Curso.cursoShow', compact('curso', 'bool_inscrito', 'bool_creado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function edit(Curso $curso)
    {
        $this->authorize('update', [Curso::class, $curso]);

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
            'categoria' => 'required'
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
        $this->authorize('update', [Curso::class, $curso]);
        return view('Curso.cursoModify', compact('curso'));
    }

    public function exportPdf()
    {
        $cursos = Curso::get();
        $pdf = PDF::loadView('pdf.pdfCursos', compact('cursos'));
        return $pdf->download('cursos.pdf');
    }

    public function cancelarSuscripcion (Curso $curso)
    {
        DB::delete('delete from curso_user where curso_id = ? and user_id = ?', [$curso->id, Auth::user()->id]);

        return redirect()->route('curso.show', compact('curso'));
    }

    public function inscribirse(Curso $curso)
    {
        $curso->users()->attach( Auth::user()->id );

        return redirect()->route('curso.show', compact('curso'));
    }
}

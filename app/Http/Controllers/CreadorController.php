<?php

namespace App\Http\Controllers;

use App\Models\Creador;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

class CreadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if ( Creador::find( Auth::user()->id ) ) {
            echo "Es creador";
        }
        else {
            echo "No es creador";
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Creador  $creador
     * @return \Illuminate\Http\Response
     */
    public function show(Creador $creador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Creador  $creador
     * @return \Illuminate\Http\Response
     */
    public function edit(Creador $creador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Creador  $creador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Creador $creador)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Creador  $creador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Creador $creador)
    {
        //
    }

    public function creaciones(Creador $creador)
    {
        //Gate::authorize('admin'); // Gate para sólo admin
        return view('creador.creadorCreaciones', compact('creador'));
    }
}

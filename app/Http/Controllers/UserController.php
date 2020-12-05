<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Institucion;
use Illuminate\Support\Facades\Hash;
use Laravel\Fortify\Rules\Password;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::get();

        foreach ($users as $user){
            echo $user->name;
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
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'confirmed', 'min: 8'],
            'edad' => ['required'],
            'ocupacion' => ['required', 'string'],

            'nombre' => ['required', 'string', 'unique:instituciones'],
            'direccion' => ['required', 'string']
        ]);

        //User::create($request->all());

        Institucion::create([
            'nombre' => $request->nombre,
            'direccion' => $request->direccion
        ]);

        // dd(Institucion::where('nombre', $request->nombre)->get('id'));
        $institucion = Institucion::where('nombre', $request->nombre)->get()->toArray();

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'edad' => $request->edad,
            'ocupacion' => $request->ocupacion,
            'institucion_id' => $institucion[0]['id']
        ]);

        return redirect()->route('login')->with('message', 'Usuario registrado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('user.userSettings', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('user.userModify', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'edad' => ['required'],
            'ocupacion' => ['required', 'string'],
        ]);

        User::where('id', $user->id)->update($request->except('_method', '_token'));

        return redirect()->route('user.show', [$user])->with('message', 'Usuario modificado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('login')->with('message', 'El usuario ha sido ELIMINADO');
    }
}

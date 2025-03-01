<?php

namespace App\Actions\Fortify;

use App\Models\Institucion;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'edad' => ['required'],
            'ocupacion' => ['required', 'string'],

            'nombre'=>['required', 'string', 'unique:instituciones'],
            'direccion' =>['required', 'string']
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'edad' => $input['edad'],
            'ocupacion' => $input['ocupacion'],

            Institucion::create([
                'nombre' => $input['nombre'],
                'direccion' =>$input['direccion'],
            ])
        ]);

    }
}

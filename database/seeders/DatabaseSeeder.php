<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Curso;
use App\Models\Creador;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Curso::factory()
        ->times(21)
        ->create();
        
        Creador::factory()
        ->times(10)
        ->create();

        $creadores = Creador::all();
        Curso::all()->each(function($curso) use ($creadores){
            $curso->creadores()->attach(
                $creadores->random(rand(1,1))->pluck('id')->toArray()
            );
        });

        $cursos = Curso::all();
        User::all()->each(function($user) use ($cursos){
            $user->cursos()->attach(
                $cursos->random(rand(1,1))->pluck('id')->toArray()
            );
        });
    }
}

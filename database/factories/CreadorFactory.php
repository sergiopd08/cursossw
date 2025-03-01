<?php

namespace Database\Factories;

use App\Models\Creador;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CreadorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Creador::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "user_id"=>User::factory()
                    ->create()
        ];
    }
}

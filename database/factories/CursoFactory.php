<?php

namespace Database\Factories;

use App\Models\Curso;
use Illuminate\Database\Eloquent\Factories\Factory;

class CursoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Curso::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre'=>$this->faker->sentence(),
            'costo'=>$this->faker->randomDigit(),
            'descripcion'=>$this->faker->paragraph(),
            'idioma'=>$this->faker->randomElement(['Español','Inglés']),
            'aprendizajes'=>$this->faker->sentence(),
            'requisitos'=>$this->faker->sentence(),
            'categoria'=>$this->faker->randomElement(['Ciencia y Tecnología','Arte','Humanidades','Negocios']),
        ];
    }
}

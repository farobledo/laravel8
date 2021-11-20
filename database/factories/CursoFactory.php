<?php

namespace Database\Factories;

use App\Models\curso;

use Illuminate\Database\Eloquent\Factories\Factory;

class CursoFactory extends Factory
{
/**
     * modelo
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
            'name' => $this->faker->sentence(),
            'descripcion'=> $this->faker->paragraph(),
            'categoria' => $this->faker->randomElement(['desarrollo web', 'diseño web'])
        ];
    }
}

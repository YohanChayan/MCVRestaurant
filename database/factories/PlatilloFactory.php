<?php

namespace Database\Factories;

use App\Models\Platillo;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlatilloFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Platillo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [

            'nombre' => $this->faker->state(), 
            'ingredientes' => $this->faker->word(6, true),
            'precio' => $this->faker->randomNumber(3, false),
            'disponibilidad' => $this->faker->boolean(),

            // 'nombre' => '',
            // 'ingredientes' => '',
            // 'precio' => '',
            // 'disponibilidad' => '',

            // 'nombre' => '',
            // 'ingredientes' => '',
            // 'precio' => '',
            // 'disponibilidad' => '',

            // 'nombre' => '',
            // 'ingredientes' => '',
            // 'precio' => '',
            // 'disponibilidad' => '',

            // 'nombre' => '',
            // 'ingredientes' => '',
            // 'precio' => '',
            // 'disponibilidad' => '',

            // 'nombre' => '',
            // 'ingredientes' => '',
            // 'precio' => '',
            // 'disponibilidad' => '',

            // 'nombre' => '',
            // 'ingredientes' => '',
            // 'precio' => '',
            // 'disponibilidad' => '',

            // 'nombre' => '',
            // 'ingredientes' => '',
            // 'precio' => '',
            // 'disponibilidad' => '',

            // 'nombre' => '',
            // 'ingredientes' => '',
            // 'precio' => '',
            // 'disponibilidad' => '',

            // 'nombre' => '',
            // 'ingredientes' => '',
            // 'precio' => '',
            // 'disponibilidad' => '',

            // 'nombre' => '',
            // 'ingredientes' => '',
            // 'precio' => '',
            // 'disponibilidad' => '',

            // 'nombre' => '',
            // 'ingredientes' => '',
            // 'precio' => '',
            // 'disponibilidad' => '',

            // 'nombre' => '',
            // 'ingredientes' => '',
            // 'precio' => '',
            // 'disponibilidad' => '',

            // 'nombre' => '',
            // 'ingredientes' => '',
            // 'precio' => '',
            // 'disponibilidad' => '',

            // 'nombre' => '',
            // 'ingredientes' => '',
            // 'precio' => '',
            // 'disponibilidad' => '',

            // 'nombre' => '',
            // 'ingredientes' => '',
            // 'precio' => '',
            // 'disponibilidad' => '',

            // 'nombre' => '',
            // 'ingredientes' => '',
            // 'precio' => '',
            // 'disponibilidad' => '',

            // 'nombre' => '',
            // 'ingredientes' => '',
            // 'precio' => '',
            // 'disponibilidad' => '',

            // 'nombre' => '',
            // 'ingredientes' => '',
            // 'precio' => '',
            // 'disponibilidad' => '',

            // 'nombre' => '',
            // 'ingredientes' => '',
            // 'precio' => '',
            // 'disponibilidad' => '',

            // 'nombre' => '',
            // 'ingredientes' => '',
            // 'precio' => '',
            // 'disponibilidad' => '',
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Mesero;
use Illuminate\Database\Eloquent\Factories\Factory;

class MeseroFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Mesero::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name(),
            'apellido' => $this->faker->lastName(),
            'email' => $this->faker->unique()->safeEmail(),
            'telefono' => $this->faker->phoneNumber(),
            'sueldo' => '2000',
            
        ];
    }
}

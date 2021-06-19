<?php

namespace Database\Factories;

use App\Models\Mesa;
use Illuminate\Database\Eloquent\Factories\Factory;

class MesaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Mesa::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // 'area' => $this->faker->unique()->text(10),
            'area' => 'azotea1',
            'area' => 'azotea2',
            'area' => 'azotea3',
            'area' => 'azotea4',
            'area' => 'azotea5',
            'area' => 'area centro principal1',
            'area' => 'area centro principal2',
            'area' => 'area centro principal3',
            'area' => 'area centro principal4',
            'area' => 'area centro principal5',
            'area' => 'entrada1',
            'area' => 'entrada2',
            'area' => 'entrada3',
            'area' => 'entrada4',
            'area' => 'entrada5',
            'area' => 'patio externo1',
            'area' => 'patio externo2',
            'area' => 'patio externo3',
            'area' => 'patio externo4',
            'area' => 'patio externo5',

        ];
    }
}

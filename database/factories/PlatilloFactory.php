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

            // 'nombre' => 'Asado negro',
            // 'ingredientes' => 'Carne de res cocida con piloncillo y especias.',
            // 'precio' => '60',
            // 'disponibilidad' => true,

            // 'nombre' => 'Arepa frita',
            // 'ingredientes' => 'Masa frita hecha a base de harina de maíz.',
            // 'precio' => '50',
            // 'disponibilidad' => true,

            // 'nombre' => 'Pabellón criollo',
            // 'ingredientes' => 'Carne de res picante desmenuzada sobre arroz caliente, acompañada de frijoles negros.',
            // 'precio' => '80',
            // 'disponibilidad' => true,

            // 'nombre' => 'Tequeño',
            // 'ingredientes' => 'Queso enrollado con una tira de masa de harina de trigo frita.',
            // 'precio' => '35',
            // 'disponibilidad' => true,

            // 'nombre' => 'Sancocho',
            // 'ingredientes' => 'Sopa con pollo, cebolla, cebollín, yuca y pimentón.',
            // 'precio' => '50',
            // 'disponibilidad' => true,

            // 'nombre' => 'Ropa vieja',
            // 'ingredientes' => 'Carne de res desmenuzada con base de salsa de tomate. Contiene pimiento rojo, cebolla y ajo.',
            // 'precio' => '40',
            // 'disponibilidad' => true,

            // 'nombre' => 'Arroz congrí',
            // 'ingredientes' => 'Arroz cocinado con frijoles.',
            // 'precio' => '35',
            // 'disponibilidad' => true,

            // 'nombre' => 'Picadillo de res',
            // 'ingredientes' => 'Carne de res molida preparada con papas, zanahoria y aceitunas.',
            // 'precio' => '45',
            // 'disponibilidad' => true,

            // 'nombre' => 'Yuca con mojo',
            // 'ingredientes' => 'Yuca preparada con un mojo de aceite, ajo, cebolla, sal y limón.',
            // 'precio' => '25',
            // 'disponibilidad' => true,

            // 'nombre' => 'Ajiaco',
            // 'ingredientes' => 'Caldo espeso con carne de cerdo, maíz, yuca, malanga y calabaza.',
            // 'precio' => '50',
            // 'disponibilidad' => true,

            // 'nombre' => 'Pozole',
            // 'ingredientes' => 'Maíz cocido con carne. Se acompaña con aguacate, lechuga, rábano y chile en salsa.',
            // 'precio' => '45',
            // 'disponibilidad' => true,

            // 'nombre' => 'Enchilada verde',
            // 'ingredientes' => 'Tortilla suave de maiz rellena de pollo y queso. Cubierta por una salsa de tomate.',
            // 'precio' => '15',
            // 'disponibilidad' => true,

            // 'nombre' => 'Cochinita pibil',
            // 'ingredientes' => 'Carne de cerdo adobada con achiote. Acompañada con salsa de cebolla morada curtida en jugo de naranja agria.',
            // 'precio' => '60',
            // 'disponibilidad' => true,

            // 'nombre' => 'Taco al pastor',
            // 'ingredientes' => 'Tortilla de maíz con carne de cerdo adobada cocinada en un trompo.',
            // 'precio' => '11',
            // 'disponibilidad' => true,

            // 'nombre' => 'Chilaquiles',
            // 'ingredientes' => 'Totopos bañados en una salsa de chile roja. Acompañado de quesillo, carne, aguacate, huevos y frijoles.',
            // 'precio' => '50',
            // 'disponibilidad' => true,
        ];
    }
}

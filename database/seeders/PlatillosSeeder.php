<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PlatillosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\Platillo::factory(1)->create();
        DB::table('platillos')->insert(
            [ 'nombre' =>'Asado negro',
              'ingredientes' => 'Carne de res cocida con piloncillo y especias.', 
              'precio' => '60', 
              'disponibilidad' => true
            ]);

        DB::table('platillos')->insert(
            [ 'nombre' =>'Arepa frita', 
              'ingredientes' => 'Masa frita hecha a base de harina de maíz.', 
              'precio' => '50', 
              'disponibilidad' => true
            ]);

        DB::table('platillos')->insert(
            [ 'nombre' =>'Pabellón criollo', 
              'ingredientes' => 'Carne de res picante desmenuzada sobre arroz caliente, acompañada de frijoles negros.', 
              'precio' => '80', 
              'disponibilidad' => true
            ]);

        DB::table('platillos')->insert(
            [ 'nombre' =>'Tequeño', 
              'ingredientes' => 'Queso enrollado con una tira de masa de harina de trigo frita.', 
              'precio' => '35', 
              'disponibilidad' => true
            ]);

        DB::table('platillos')->insert(
            [ 'nombre' =>'Sancocho', 
              'ingredientes' => 'Sopa con pollo, cebolla, cebollín, yuca y pimentón.', 
              'precio' => '50', 
              'disponibilidad' => true
            ]);

        DB::table('platillos')->insert(
            [ 'nombre' =>'Ropa vieja', 
                'ingredientes' => 'Carne de res desmenuzada con base de salsa de tomate. Contiene pimiento rojo, cebolla y ajo.', 
                'precio' => '40', 
                'disponibilidad' => true
            ]);

        DB::table('platillos')->insert(
            [ 'nombre' =>'Arroz congrí', 
                'ingredientes' => 'Arroz cocinado con frijoles.', 
                'precio' => '35', 
                'disponibilidad' => true
            ]);

        DB::table('platillos')->insert(
            [ 'nombre' =>'Picadillo de res', 
                'ingredientes' => 'Carne de res molida preparada con papas, zanahoria y aceitunas.', 
                'precio' => '45', 
                'disponibilidad' => true
            ]);

        DB::table('platillos')->insert(
            [ 'nombre' =>'Yuca con mojo', 
                'ingredientes' => 'Yuca preparada con un mojo de aceite, ajo, cebolla, sal y limón.', 
                'precio' => '25', 
                'disponibilidad' => true
            ]);

        DB::table('platillos')->insert(
            [ 'nombre' =>'Ajiaco', 
                'ingredientes' => 'Caldo espeso con carne de cerdo, maíz, yuca, malanga y calabaza.', 
                'precio' => '50', 
                'disponibilidad' => true
            ]);

        DB::table('platillos')->insert(
            [ 'nombre' =>'Pozole', 
                'ingredientes' => 'Maíz cocido con carne. Se acompaña con aguacate, lechuga, rábano y chile en salsa.', 
                'precio' => '45', 
                'disponibilidad' => true
            ]);

        DB::table('platillos')->insert(
            [ 'nombre' =>'Enchilada verde', 
                'ingredientes' => 'Tortilla suave de maiz rellena de pollo y queso. Cubierta por una salsa de tomate.', 
                'precio' => '15', 
                'disponibilidad' => true
            ]);

        DB::table('platillos')->insert(
            [ 'nombre' =>'Cochinita pibil', 
                'ingredientes' => 'Carne de cerdo adobada con achiote. Acompañada con salsa de cebolla morada curtida en jugo de naranja agria.', 
                'precio' => '60', 
                'disponibilidad' => true
            ]);

        DB::table('platillos')->insert(
            [ 'nombre' =>'Taco al pastor', 
                'ingredientes' => 'Tortilla de maíz con carne de cerdo adobada cocinada en un trompo.', 
                'precio' => '11', 
                'disponibilidad' => true
            ]);

        DB::table('platillos')->insert(
            [ 'nombre' =>'Chilaquiles', 
                'ingredientes' => 'Totopos bañados en una salsa de chile roja. Acompañado de quesillo, carne, aguacate, huevos y frijoles.', 
                'precio' => '50', 
                'disponibilidad' => true
            ]);
        
        


    }
}

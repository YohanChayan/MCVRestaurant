<?php

namespace Database\Seeders;

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
        \App\Models\Platillo::factory(15)->create();
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MeserosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Mesero::factory(10)->create();
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class MesaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\Mesa::factory(1)->create();

        DB::table('mesas')->insert([ 'area' =>'azotea1']);
        DB::table('mesas')->insert([ 'area' =>'azotea2']);
        DB::table('mesas')->insert([ 'area' =>'azotea3']);
        DB::table('mesas')->insert([ 'area' =>'azotea4']);
        DB::table('mesas')->insert([ 'area' =>'azotea5']);
        DB::table('mesas')->insert([ 'area' =>'area centro principal1']);
        DB::table('mesas')->insert([ 'area' =>'area centro principal2']);
        DB::table('mesas')->insert([ 'area' =>'area centro principal3']);
        DB::table('mesas')->insert([ 'area' =>'area centro principal4']);
        DB::table('mesas')->insert([ 'area' =>'area centro principal5']);
        DB::table('mesas')->insert([ 'area' =>'entrada1']);
        DB::table('mesas')->insert([ 'area' =>'entrada2']);
        DB::table('mesas')->insert([ 'area' =>'entrada3']);
        DB::table('mesas')->insert([ 'area' =>'entrada4']);
        DB::table('mesas')->insert([ 'area' =>'entrada5']);
        DB::table('mesas')->insert([ 'area' =>'patio externo1']);
        DB::table('mesas')->insert([ 'area' =>'patio externo2']);
        DB::table('mesas')->insert([ 'area' =>'patio externo3']);
        DB::table('mesas')->insert([ 'area' =>'patio externo4']);
        DB::table('mesas')->insert([ 'area' =>'patio externo5']);
    }
}

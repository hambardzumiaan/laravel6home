<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cars')->insert([
            'name' => 'BMW',
            'model' => 'F10',
            'power' => '320',
            'km' => '7777',
            'price' => '20000',
            'year' => '2015',
        ]);
    }
}

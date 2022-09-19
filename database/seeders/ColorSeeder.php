<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('colors')->insert([
            ['name' => 'Red'],
            ['name' => 'OrangeRed'],
            ['name' => 'Gold'],
            ['name' => 'DeepPink'],
            ['name' => 'Purple'],
            ['name' => 'LimeGreen'],
            ['name' => 'DarkOliveGreen'],
            ['name' => 'DodgerBlue'],
            ['name' => 'Gray'],
            ['name' => 'Black']
        ]);
    }
}

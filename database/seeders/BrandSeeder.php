<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            ['name' => 'Jack&Jones'],
            ['name' => 'Selected'],
            ['name' => 'Only&Sons'],
            ['name' => 'Scotch&Soda'],
            ['name' => 'Levis'],
            ['name' => 'Adidas'],
            ['name' => 'Reebok'],
            ['name' => 'Puma'],
            ['name' => 'Nike'],
            ['name' => 'Gap']
        ]);
    }
}

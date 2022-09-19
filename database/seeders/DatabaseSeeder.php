<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Clothing;
use App\Models\ClothingColor;
use App\Models\ClothingSize;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\client::factory(10)->create();

        // \App\Models\client::factory()->create([
        //     'name' => 'Test client',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            CategorySeeder::class,
            BrandSeeder::class,
            ColorSeeder::class,
            SizeSeeder::class,
            UserSeeder::class,
        ]);
        Clothing::factory(100)->create();
    }
}

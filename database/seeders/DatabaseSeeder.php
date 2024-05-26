<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this-> call([
            BrandSeeder::class,
            CategorySeeder::class,
        ]);
        \App\Models\Product::factory( 100)->create();
        \App\Models\User::factory(10)->create();

    }
}

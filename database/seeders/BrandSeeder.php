<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use function PHPUnit\Framework\name;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [
            ['name' => 'samsung'],
            ['name' => 'apple'],
            ['name' => 'sony'],
            ['name' => 'hp'],
            ['name' => 'huaewei'],
            ['name' => 'lenovo'],
            ['name' => 'acer'],
            ['name' => 'dell'],
        ];

        foreach ($brands as $brand) {
            $obj = new Brand();
            $obj -> name = $brand['name'];
            $obj -> save();
        }
    }
}

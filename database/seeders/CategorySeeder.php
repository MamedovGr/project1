<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name'=> 'monitors'],
            ['name' => 'pk_duzujiler'],
            ['name'=> 'mobil_devices'],
            ['name' => 'toplayjylar'],
            ['name'=> 'periferies'],
            ['name' => 'notebooks'],
            ['name'=> 'printers'],
            ['name' => 'network_devices'],
        ];

        foreach ($categories as $category) {
            $obj = new Category();
            $obj->name = $category['name'];
            $obj->save();
        }
    }


}

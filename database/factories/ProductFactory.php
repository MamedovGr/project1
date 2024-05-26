<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use App\Models\Brand;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $brand = DB::table('brands')->inRandomOrder()->first();
        $category = DB::table('categories')->inRandomOrder()->first();
        return [
            'brand_id' => $brand->id,
            'category_id' => $category->id,
            'name' => fake()-> streetName(),
            'description' => fake()->paragraph(),
            'image' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.amazon.ca%2FAndroid-Smartphone-Unlocked-Cellphones-18x9-5x5cm%2Fdp%2FB0BXP4MMDY&psig=AOvVaw06_oEYsBv7dKTb2Xi5TFWU&ust=1716771666955000&source=images&cd=vfe&opi=89978449&ved=0CBIQjRxqFwoTCPDU8L2PqoYDFQAAAAAdAAAAABAt',
            'price' => rand(400, 1500),
//            'created_at' => $createdAt,
//            'updated_at' => Carbon::parse($createdAt)->addDays(rand(0, 6))->addHours(rand(0, 23)),
        ];
    }
}

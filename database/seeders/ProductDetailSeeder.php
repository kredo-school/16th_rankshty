<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            $productId = $faker->numberBetween(1, 10);

            DB::table('product_details')->insert([
                'product_id' => $productId,
                'size' => $faker->randomElement(['S', 'M', 'L', 'XL']),
                'color' => $faker->colorName,
                'unit_price' => $faker->numberBetween(100, 100000),
                'unit_cost' => $faker->numberBetween(50, 50000),
                'model_number' => $faker->numerify('PRD#####'),
                'stock_quantity' => $faker->randomNumber(3),
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ]);
        }
    }
}

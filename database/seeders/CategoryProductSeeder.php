<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            $productId = $faker->numberBetween(1, 10);
            $mainCategoryId = $faker->numberBetween(1, 10);


            DB::table('category_product')->insert([
                'product_id' => $productId,
                'main_category_id' => $mainCategoryId,
            ]);
        }
    }
}

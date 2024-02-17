<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            $statusNumber = $faker->numberBetween(1, 3);
            $sellerId = $faker->numberBetween(1, 10);
            $imageCount = $faker->numberBetween(1, 5);

            $images = [];
            for ($i = 1; $i <= $imageCount; $i++) {
                $images["image{$i}"] = $faker->imageUrl;
            }

            for ($i = $imageCount + 1; $i <= 5; $i++) {
                $images["image{$i}"] = null;
            }

            DB::table('products')->insert([
                'status' => $statusNumber,
                'seller_id' => $sellerId,
                'image_1' => $images['image1'],
                'image_2' => $images['image2'],
                'image_3' => $images['image3'],
                'image_4' => $images['image4'],
                'image_5' => $images['image5'],
                'description' => $faker->paragraph(5),
                'product_name' => $faker->name,
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ]);
        }
    }
}

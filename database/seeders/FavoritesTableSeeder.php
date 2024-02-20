<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class FavoritesTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            \DB::table('favorites')->insert([
                'user_id'    => $faker->randomDigitNotNull,
                'product_id' => $faker->randomDigitNotNull,
            ]);
        }
    }
}

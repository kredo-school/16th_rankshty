<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class FavoritesTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        $uniqueCombinations = [];

        for ($i = 0; $i < 10; $i++) {
            do {
                $buyer = \DB::table('users')->where('role_id', 2)->inRandomOrder()->first();
                $product_id = $faker->numberBetween(1, 10);
                $combination = $buyer->id . '-' . $product_id;
            } while (in_array($combination, $uniqueCombinations));



            \DB::table('favorites')->insert([
                'user_id' => $buyer->id,
                'product_id' => $product_id,
            ]);

            $uniqueCombinations[] = $combination;
        }
    }
}

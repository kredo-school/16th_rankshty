<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            $buyer = DB::table('users')->where('role_id', 2)->inRandomOrder()->first();
            $productId = $faker->numberBetween(1, 10);


            DB::table('carts')->insert([
                'buyer_id' => $buyer->id,
                'product_id' => $productId,
            ]);
        }
    }
}

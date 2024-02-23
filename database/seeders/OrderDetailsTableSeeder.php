<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\OrderDetails;

class OrderDetailsTableSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            \DB::table('order_details')->insert([
                'order_id'            => $faker->numberBetween(1, 10),
                'product_details_id'  => $faker->numberBetween(1, 10),
                'quantity'            => $faker->numberBetween(1, 10),
                'unitPrice'           => $faker->randomFloat(2, 10, 100),
                'discount'            => $faker->numberBetween(0, 20),
            ]);
        }
    }
}

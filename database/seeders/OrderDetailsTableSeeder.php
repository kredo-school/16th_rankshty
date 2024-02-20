<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\OrderDetails;

class OrderDetailsSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            \DB::table('order_details')->insert([
                'order_id'            => $faker->numberBetween(1, 100),
                'product_details_id'  => $faker->numberBetween(1, 50),
                'quantity'            => $faker->numberBetween(1, 10),
                'unitPrice'           => $faker->randomFloat(2, 10, 100),
                'discount'            => $faker->numberBetween(0, 20),
                'created_at'          => now(),
                'updated_at'          => now(),
            ]);
        }
    }
}

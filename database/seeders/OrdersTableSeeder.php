<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use App\Models\Orders;

class OrdersTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            DB::table('orders')->insert([
                'buyer_id'      => $faker->numberBetween(1, 10),
                'seller_id'     => $faker->numberBetween(1, 10),
                'address_id'    => $faker->numberBetween(1, 2),
                'freight'       => $faker->randomFloat(2, 10, 50),
                'shipped_date'  => $faker->dateTimeThisMonth,
                'ordered_at'    => $faker->dateTimeThisMonth,
                'order_date'  => $faker->dateTimeThisMonth,
                'required_date' => $faker->dateTimeThisMonth,
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use App\Models\Orders;

class OrderSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            $buyer = DB::table('users')->where('role_id', 2)->inRandomOrder()->first();
            $seller = DB::table('users')->where('role_id', 3)->inRandomOrder()->first();

            DB::table('orders')->insert([
                'buyer_id'      => $buyer->id,
                'seller_id'     => $seller->id,
                'address_id'    => $faker->numberBetween(1, 2),
                'freight'       => $faker->randomFloat(2, 10, 50),
                'shipped_date'  => $faker->dateTimeThisMonth,
                'required_date' => $faker->dateTimeThisMonth,
                'ordered_date'  => now(),
            ]);
        }
    }
}

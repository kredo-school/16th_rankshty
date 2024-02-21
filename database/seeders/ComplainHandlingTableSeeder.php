<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComplainHandlingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert
        ([
            [
                'body'     => 'About Shipping',
                'user_id'    => '1',
                'product_id' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'body'     => 'About company A',
                'user_id'    => '2',
                'product_id' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'body'     => 'About company B',
                'user_id'    => '3',
                'product_id' => '3',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}

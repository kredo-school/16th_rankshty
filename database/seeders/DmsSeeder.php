<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DMS;

class DmsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $dms = [
            ['sender_id' => 1, 'receiver_id' => 2, 'product_id' => 1, 'body' => 'Hello'],
            ['sender_id' => 2, 'receiver_id' => 1, 'product_id' => 1, 'body' => 'Hi'],
            ['sender_id' => 1, 'receiver_id' => 2, 'product_id' => 2, 'body' => 'Hello'],
            ['sender_id' => 2, 'receiver_id' => 1, 'product_id' => 2, 'body' => 'Hi'],
        ];

        foreach ($dms as $dm) {
            DMS::create($dm);
        }
    }
}

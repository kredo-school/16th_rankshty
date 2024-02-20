<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Follow;

class FollowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $follows = [
            [
                'buyer_id' => 1,
                'seller_id' => 2,
            ],
            [
                'buyer_id' => 2,
                'seller_id' => 1,
            ],
        ];
        
        foreach ($follows as $follow) {
            Follow::create($follow);

        }
    
    }
}

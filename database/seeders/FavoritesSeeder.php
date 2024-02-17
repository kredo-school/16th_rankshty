<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class FavoritesSeeder extends Seeder
{
    public function run(): void
    {
       $favorites = [
       [
        'user_id' => 1,
        'product_id' => 1,
       ],
       [
        'user_id'=> 2,
        'product_id' => 2,
       ],
    ];
    foreach($favorites as $favorite) 
    {
        DB::table('favorites')->insert($favorite);
    }

    }
}

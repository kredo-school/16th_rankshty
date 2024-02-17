<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Orders; 

class OrdersTableSeeder extends Seeder
{
   
    public function run(): void
    {
        Orders::factory(10)->create();
    }
}

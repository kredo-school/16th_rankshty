<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewsTableSeeder extends Seeder
{
    private $review;
    
    public function ___construct(Review $review)
    {
        $this->review = $review; 
    }

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $reviews = 
        [
            [
                'username'            =>    'EmilyJones22',
                'first_name'          =>    'Emily',
                'last_name'           =>    'Jones',
                'password '           =>    '12345678',
                'email'               =>    'emily-jones58@gmail.com',
                'avatar'              =>    'tomato',
                'introduction'        =>    'Hello, I am Emily.', 
                'business_name'       =>    'Emily Jones',
                'credit_card_number'  =>    '13954987530947',
                'role_id'             =>    'buyer',
                'last_login_at'       =>    '2023.12.30',
                'last_logout_at'      =>    '2023.12.30',
                'created_at'          =>     Now(),
                'updated_at'          =>     now()
            ],

     
        ];

        $this->user->insert($users);
    }
}


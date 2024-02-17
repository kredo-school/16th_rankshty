<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB; // Import DB facade

class ReviewsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1,10) as $index){
            $picture_1Path = $this->generateRandomPicture_1($faker); 
            $picture_2Path = $this->generateRandomPicture_2($faker); 
            $picture_3Path = $this->generateRandomPicture_3($faker); 
            $picture_4Path = $this->generateRandomPicture_4($faker); 
            $picture_5Path = $this->generateRandomPicture_5($faker); 

            DB::table('reviews')->insert([
                'user_id'           => $faker->numberBetween(1, 100), 
                'product_id'        => $faker->numberBetween(1, 100),
                'review_title'      => $faker->sentence,
                'description'       => $faker->paragraph,
                'rating_star_mark'  => $faker->numberBetween(1, 5),
                'picture_1'         => $picture_1Path,
                'picture_2'         => $picture_2Path,
                'picture_3'         => $picture_3Path,
                'picture_4'         => $picture_4Path,
                'picture_5'         => $picture_5Path,
                'created_at'        => now(),
                'updated_at'        => now(),
            ]);
        }
    }

    private function generateRandomPicture_1($faker)
    {
        $picture_1 = $faker->image('public/storage/picture_1s', 200, 200, 'people', false);
        return 'picture_1s/' . pathinfo($picture_1, PATHINFO_BASENAME);
    }

    private function generateRandomPicture_2($faker)
    {
        $picture_2 = $faker->image('public/storage/picture_2s', 200, 200, 'people', false);
        return 'picture_2s/' . pathinfo($picture_2, PATHINFO_BASENAME);
    }
   
    private function generateRandomPicture_3($faker)
    {
        $picture_3 = $faker->image('public/storage/picture_3s', 200, 200, 'people', false);
        return 'picture_3s/' . pathinfo($picture_3, PATHINFO_BASENAME);
    }

    private function generateRandomPicture_4($faker)
    {
        $picture_4 = $faker->image('public/storage/picture_4s', 200, 200, 'people', false);
        return 'picture_4s/' . pathinfo($picture_4, PATHINFO_BASENAME);
    }

    private function generateRandomPicture_5($faker)
    {
        $picture_5 = $faker->image('public/storage/picture_5s', 200, 200, 'people', false);
        return 'picture_5s/' . pathinfo($picture_5, PATHINFO_BASENAME);
    }
}


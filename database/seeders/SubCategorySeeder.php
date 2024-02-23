<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            $mainCategoryId = $faker->numberBetween(1, 10);
            $mainCategoryName = DB::table('main_categories')->where('id', $mainCategoryId)->value('name');
            $subCategoryName = $mainCategoryName . ' Subcategory';


            DB::table('sub_categories')->insert([
                'name' => $subCategoryName,
                'main_category_id' => $mainCategoryId,
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ]);
        }
    }
}

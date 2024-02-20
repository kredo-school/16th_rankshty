<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Block;

class BlockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $blocks = [
            [
                'blocker_id' => 1,
                'blocked_id' => 2,
            ],
            [
                'blocker_id' => 2,
                'blocked_id' => 1,
            ],
        ];

        foreach ($blocks as $block) {
            Block::create($block);

        }

    }
}

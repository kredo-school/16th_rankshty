<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Dms;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dms>
 */
class DmsFactory extends Factory
{   
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Dms::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'sender_id' => $this->faker->numberBetween(1, 10),
            'receiver_id' => $this->faker->numberBetween(1, 10),
            'product_id' => $this->faker->numberBetween(1, 10),
            'body' => $this->faker->sentence(5),
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Wine>
 */
class WineFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name' => fake()->word(),
            'type_id' => function () {
                return \App\Models\Winetype::factory()->create()->id;
            },
            'vineyard_id' => function () {
                return \App\Models\Vineyard::factory()->create()->id;
            },
            'rating' => fake()->randomFloat(2, 1, 5), //null,min, max
            'price' => fake()->randomFloat(2, 40, 500),
            'image' => fake()->imageUrl(),
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Food;
use App\Models\Restaurant;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Menu>
 */
class MenuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'foodId' => Food::all()->random()->id,
            'restaurantId' => Restaurant::all()->random()->id,
            'price' => fake()->numberBetween(2000,15000)
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Menu;
use App\Models\Order;
use App\Models\Restaurant;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order_Item>
 */
class Order_ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'orderId' => Order::all()->random()->id,
            'menuId' => Menu::all()->random()->id,
            'qty' => fake()->numberBetween(1,5)
        ];
    }
}

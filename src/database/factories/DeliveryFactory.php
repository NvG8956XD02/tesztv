<?php

namespace Database\Factories;

use App\Models\Courier;
use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Delivery>
 */
class DeliveryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'orderId' => Order::all()->random()->id(),
            'startDate' => fake()->dateTime(),
            'courierId' => Courier::all()->random()->id()
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Payment;
use App\Models\User;
use App\Models\Restaurant;
use App\Models\Status;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $Randuser = optional(User::inRandomOrder()->first());
        return [
            'userId' => $Randuser->id,
            'restaurantId' => Restaurant::all()->random()->id,
            'orderDate' => now(),
            'deliverDate' => NULL,
            'address' => fake()->address(),
            'statusId' => Status::all()->random()->id,
            'paymentId' => Payment::all()->random()->id 
        ];
    }
}

<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Order;
use App\Models\Order_Item;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(CategorySeeder::class);
        $this->call(StatusSeeder::class);
        $this->call(PaymentSeeder::class);

        $this->call(CourierSeeder::class);
        $this->call(RestaurantSeeder::class);
        $this->call(UserSeeder::class);

        $this->call(FoodSeeder::class);
        $this->call(MenuSeeder::class);
        $this->call(OrderSeeder::class);
        $this->call(Order_ItemSeeder::class);
        $this->call(DeliverySeeder::class);
    }
}

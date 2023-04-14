<?php

namespace Database\Seeders;

use App\Models\Order_Item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Order_ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Order_Item::factory()->count(5)->create();
    }
}

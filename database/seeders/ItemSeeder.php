<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 50; $i++) {
            $purchase_price = rand(1000, 10000);
            Item::create([
                'category_id' => rand(1, 5),
                'name' => fake()->word(),
                'brand' => fake()->word(),
                'purchase_price' => $purchase_price,
                'selling_price' => $purchase_price + rand(100, 2000),
                'stock' => rand(3, 50),
            ]);
        }
    }
}

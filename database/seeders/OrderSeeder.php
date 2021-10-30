<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::where('is_admin', false)->get();
        $products = Product::all();
        for ($i=0; $i < 1000; $i++) { 
            $user = $users->random();
            $product = $products->random();
            Order::factory()->count(1)->state([
                'user_id' => $user->id,
                'product_id' => $product->id,
                'product_price' => $product->price,
                'product_name' => $product->name,
            ])->create();
        }
    }
}

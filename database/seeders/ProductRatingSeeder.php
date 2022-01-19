<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\ProductRating;
use Illuminate\Database\Seeder;

class ProductRatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $orderFinished = Order::where('status', 'finished')->get();
        
        foreach ($orderFinished as $order) {
            ProductRating::create([
                'score' => rand(1, 10),
                'product_id' => $order->product_id,
                'order_id' => $order->id,
                'user_id' => $order->user_id
            ]);
        }
    }
}

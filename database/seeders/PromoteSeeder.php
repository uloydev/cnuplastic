<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Promote;
use App\Models\User;
use Illuminate\Support\Carbon;

class PromoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::where('role', 'seller')->get();
        $statuses = collect(['requested', 'accepted', 'rejected']);
        foreach( $users as $user ){
            $products = Product::inRandomOrder()->limit(5)->get();
            foreach (   $products as $product ){
                Promote::create([
                    'product_id' => $product->id,
                    'user_id' => $user->id,
                    'promote_start' => Carbon::now(),
                    'promote_end' => Carbon::today()->addDays(3),
                    'status' => $statuses->random()
                ]);
            }
        }
    }
}

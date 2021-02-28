<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\ProductCategory;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductCategory::factory()
            ->times(6)
            ->has(
                Product::factory()
                        ->times(10)
                        ->state(function (array $attributes, ProductCategory $category) {
                            return ['product_category_id' => $category->id];
                        })
            )
            ->create();
    }
}

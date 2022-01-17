<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(3),
            'image' => $this->faker->randomElement([
                'public/img/bicycle.jpg',
                'public/img/cbr.jpg',
                'public/img/ducati.jpg',
                'public/img/ferrari.jpg',
            ]),
            'description' => $this->faker->paragraph(7),
            'price' => $this->faker->numberBetween(10000, 100000),
            'stock' => $this->faker->numberBetween(10, 50),
            'product_category_id' => $this->faker->numberBetween(1, 6),
            'is_promo' => $this->faker->boolean(10),
            'is_best_seller' => $this->faker->boolean(10),
        ];
    }
}

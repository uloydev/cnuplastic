<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_name' => '',
            'product_price' => 0,
            'product_id' => 1,
            'user_id' => 2,
            'quantity' => $this->faker->numberBetween(1, 10),
            'price_total' => 100000,
            'status' => $this->faker->randomElement(['paid', 'unpaid', 'finished']),
        ];
    }
}

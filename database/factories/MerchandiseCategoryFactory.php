<?php

namespace Database\Factories;

use App\Models\MerchandiseCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class MerchandiseCategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MerchandiseCategory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(2),
        ];
    }
}

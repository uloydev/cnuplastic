<?php

namespace Database\Factories;

use App\Models\Faq;
use Illuminate\Database\Eloquent\Factories\Factory;

class FaqFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Faq::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category' => $this->faker->randomElement(config('app.faq_enum')),
            'title' => $this->faker->sentence(3),
            'detail' => $this->faker->paragraph(4),
            'is_pinned' => $this->faker->boolean()
        ];
    }
}

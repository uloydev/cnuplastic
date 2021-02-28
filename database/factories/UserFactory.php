<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'identity_id' => 123456789,
            'faculty' => 'ilmu komputer',
            'profession' => 'mahasiswa',
            'avatar' => 'https://picsum.photos/200/200',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'role' => 'seller',
            'remember_token' => Str::random(10),
            'store' => 'toko '. $this->faker->name,
            'whatsapp' => $this->faker->numerify('############') ,
            'store_description' => $this->faker->text,
        ];
    }
}

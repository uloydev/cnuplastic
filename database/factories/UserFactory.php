<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
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
            'identity_id' => $this->faker->unique()->numerify('############'),
            'faculty' => 'ilmu komputer',
            'profession' => 'mahasiswa',
            // 'avatar' => 'https://via.placeholder.com/200',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'role' => 'seller',
            'remember_token' => Str::random(10),
            'store' => 'Toko '. $this->faker->sentence(3),
            'whatsapp' => $this->faker->numerify('############') ,
            'store_description' => $this->faker->text,
        ];
    }
}

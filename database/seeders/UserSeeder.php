<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@upnvj.ac.id',
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ]);
        User::factory()->count(2)->state(['role' => 'admin'])->create();
        User::factory()->count(10)->create();
    }
}

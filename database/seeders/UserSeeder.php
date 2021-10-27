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
            'email' => 'admin@mail.com',
            'password' => Hash::make('password'),
            'is_admin' => true
        ]);
        User::factory()->count(50)->create();
    }
}

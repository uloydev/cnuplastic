<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
                'name' => 'adminjempolan',
                'email' => 'adminjempolan@upnvj.ac.id',
                'role' => 'admin',
                'password' => Hash::make('adminjempolan'),
            ],
            [
                'name' => 'bariq dharmawan',
                'email' => 'sanchez77rodriguez@gmail.com',
                'role' => 'user',
                'password' => Hash::make('barqibarqibar'),
            ]
        ]);
    }
}

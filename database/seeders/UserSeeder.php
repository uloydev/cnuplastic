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
        if (env('APP_ENV') == 'production') {
            User::insert([
                [
                    'name' => 'admin jempol',
                    'email' => 'jempolupnvj01@gmail.com',
                    'role' => 'admin',
                    'password' => Hash::make('@jempol2021@')
                ],
                [
                    'name' => 'admin pti',
                    'email' => 'developerbemupnvj@gmail.com',
                    'role' => 'admin',
                    'password' => Hash::make('@jempol2021@')
                ],
                [
                    'name' => 'admin bem',
                    'email' => 'bem@upnvj.ac.id',
                    'role' => 'admin',
                    'password' => Hash::make('@jempol2021@')
                ]
            ]);
        } else {
            User::insert([
                [
                    'name' => 'admin',
                    'email' => 'admin@upnvj.ac.id',
                    'role' => 'admin',
                    'password' => Hash::make('password'),
                    'whatsapp' => '08512232723'
                ],
                [
                    'name' => 'admin2',
                    'email' => 'admin2@upnvj.ac.id',
                    'role' => 'admin',
                    'password' => Hash::make('password'),
                    'whatsapp' => '08512232723'
                ]
            ]);
            User::factory()->count(50)->create();
        }
    }
}

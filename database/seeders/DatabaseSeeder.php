<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        $this->call([
            UserSeeder::class,
            CarouselSeeder::class,
            FaqSeeder::class
        ]);

        if (config('app.env') == 'local') {
            $this->call([
                ProductSeeder::class,
                PromoteSeeder::class,
                FeedbackSeeder::class,
            ]);
        }
    }
}

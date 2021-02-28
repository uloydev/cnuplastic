<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Merchandise;
use App\Models\MerchandiseCategory;

class MerchandiseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MerchandiseCategory::factory()
            ->times(6)
            ->has(
                Merchandise::factory()
                        ->times(10)
                        ->state(function (array $attributes, MerchandiseCategory $category) {
                            return ['merchandise_category_id' => $category->id];
                        })
            )
            ->create();
    }
}

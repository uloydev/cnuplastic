<?php

namespace Database\Seeders;

use App\Models\PaymentSetting;
use Illuminate\Database\Seeder;

class PaymentSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PaymentSetting::create([
            'number' => '1270010537825',
            'holder_name' => 'Muhammad Bariq Dharmawan',
            'bank' => 'Mandiri'
        ]);
    }
}

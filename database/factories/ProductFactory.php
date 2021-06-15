<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(3),
            'image' => $this->faker->randomElement([
                'public/img/product/iphone6s.jpeg',
                'public/img/product/motor.webp'
            ]),
            'description' => $this->faker->paragraph(7),
            'price' => $this->faker->numberBetween(10000, 100000),
            'product_category_id' => $this->faker->numberBetween(1, 6),
            'user_id' => $this->faker->numberBetween(3, 12),
            'link_shopee' => 'https://shopee.co.id/Xiaomi-Monitor-Gaming-144Hz-34-inch-Curved-WQHD-Original-LED-Versi-China-Global-i.11766100.4459530108',
            'link_tokopedia' => 'https://www.tokopedia.com/halomanid/xiaomi-ultra-wide-curved-gaming-monitor-1440p-144hz-free-sync-34-inch-china-version',
            'link_bukalapak' => 'https://www.bukalapak.com/p/komputer/monitor/3tvysid-jual-xiaomi-monitor-gaming-curved-34-inch-144hz-wqhd-3440-1440-tv-led-lcd',
            'link_lazada' => 'https://www.lazada.co.id/products/xiaomi-monitor-gaming-curved-34-inch-144hz-wqhd-original-i3026396514-s5378314860.html',
            'link_instagram' => 'https://www.instagram.com/wahyu.002/',
        ];
    }
}

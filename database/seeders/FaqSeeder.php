<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faqs = [
            "general" => [
                [
                    "title" => "Apa itu JEMPOL UPNVJ?",
                    "detail" => "JEMPOL = Jembatan Penjual Online UPNVJ, merupakan wadah yang disediakan untuk para wirausahawan di UPNVJ agar lebih mudah memperjualbelikan produk/jasa yang ditawarkan."
                ],
                [
                    "title" => "Apa perbedaan antara JEMPOL di Instagram dan di Website?",
                    "detail" => "Instagram digunakan sebagai wadah mempromosikan usaha-usaha milik Sivitas akademisi UPN Veteran Jakarta, sedangkan pada Website digunakan sebagai wadah aktivitas jual beli jasa/produk melalui pasar daring (marketplace)."
                ],
                [
                    "title" => "Apa yang disediakan di Marketplace Jempol?",
                    "detail" => "• Fitur untuk berjualan dengan mudah
                    • Fitur untuk dapat menghubungi penjual
                    • Fitur untuk menjual merchandise
                    • Fitur untuk request promosi"
                ]
            ],
            "seller" => [
                [
                    "title" => "Siapa saja yang dapat berjualan di Marketplace Jempol?",
                    "detail" => "Semua Sivitas Akademisi UPNVJ"
                ],
                [
                    "title" => "Apa keuntungan berjualan di Marketplace Jempol?",
                    "detail" => "• Lebih mudah dan efisien
                    • Menjangkau target pasar yang lebih luas"
                ],
                [
                    "title" => "Apakah ada biaya pendaftaran untuk penjual?",
                    "detail" => "Tidak ada"
                ]
            ],
            "buyer" => [
                [
                    "title" => "Produk apa saja yang terdapat di Marketplace Jempol?",
                    "detail" => "Everything! You can put any good things in here. Selama tidak melanggar hukum di Indonesia."
                ],
            ]
        ];

        foreach($faqs as $category => $faq) {
            foreach($faq as $item) {
                Faq::create($item + ["category" => $category]);
            }
        }
    }
}

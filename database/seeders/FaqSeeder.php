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
            [
                "title" => "Apa itu CNU Plastic?",
                "is_pinned" => true,
                "detail" => "CNU Plastic adalah perusahaan CV Catur Naga Utama yang  memproduksi produk industri plastik yang menjual berbagai macam kebutuhan dan juga keinginan pelanggan untuk kemasan bisnis sesuai dengan kebutuhan."
            ],
            [
                "title" => "Produk apa saja yang terdapat di CNU Plastic?",
                "is_pinned" => true,
                "detail" => "CNU Plastic menjual berbagai macam kebutuhan dengan material plastic untuk banyak kategori seperti rumah tangga, makanan, minuman, kesehatan, spray, kosmetik, dan lainnya."
            ],
            [
                "title" => "Bagaimana cara berbelanja di CNU Plastic?",
                "is_pinned" => true,
                "detail" => "1) Pilih produk yang ingin dibeli atau di order
                2) Kemudian di bagian bawah ada button order now kemudian klik
                3) Selanjutnya pembeli mengklik button berapa yang ingin di order setelah ketahuan jumlahnya, maka pembeli dapat melihat no rek yang tertera
                4) Pembeli mentransfer jumlah yang sudah dikalkulasikan ke no rek yang tersedia
                5) Selanjutnya pembeli mengisi form dan juga menguplaod bukti pembayaran
                6) Selesai, dan no resi akan dikirimkan melalui whats app dan email"
            ]
        ];

        foreach ($faqs as $faq) {
            Faq::create($faq);
        }
    }
}

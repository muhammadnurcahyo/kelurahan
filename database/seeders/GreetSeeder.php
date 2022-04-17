<?php

namespace Database\Seeders;

use App\Models\Greet;
use Illuminate\Database\Seeder;

class GreetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $greets = [
            [
                'position' => 'Lurah',
                'name' => 'Hernawan Zudanto, S.E',
                'img' => 'IMG-20211022-WA0001_kades.jpg',
                'greeting' => '<p class=\"MsoNormal\" style=\"text-align: justify;\"><span lang=\"IN\">Dengan adanya website di BUM Desa / BUM Kalurahan \"LUHUR SEMBADA\" ini, kami dari Pemerintah Kalurahan Sidoluhur sangat mendukung karena banyak memberikan Informasi dari kegiatan BUMDesa untuk khususnya bagi masyarakat Sidoluhur dan umumnya masyarakat luas. Selain itu dapat memberikan dampak positif demi kemajuan BUMDesa dan Pemerintah Kalurahan Sidoluhur. Keberadaan website agar dapat digunakan secara maksimal untuk mendukung kegiatan BUMDesa. </span></p>\r\n<p class=\"MsoNormal\" style=\"text-align: justify;\"><span lang=\"IN\">Semoga dapat bermanfaat.&nbsp;</span></p>\r\n<p class=\"MsoNormal\" style=\"text-align: justify;\"><span lang=\"IN\">Terima Kasih...</span></p>',
            ],
            [
                'position' => 'Direktur',
                'name' => 'Ir. HARJANTO',
                'img' => 'WhatsApp Image 2021-10-17 at 15.47.28_kades.jpeg',
                'greeting' => '<p class=\"MsoNormal\" style=\"text-align: justify;\"><span lang=\"IN\" style=\"mso-ansi-language: IN;\">Selamat datang di Website kami BUM Desa / BUM Kalurahan \"LUHUR SEMBADA\" Kalurahan Sidoluhur, Kapanewon Godean, Kabupaten Sleman, D.I.Yogyakarta. Website ini dimaksudkan sebagai sarana publikasi untuk memberikan informasi dan gambaran BUM Desa / BUM Kalurahan &ldquo;LUHUR SEMBADA&rdquo; kepada masyarakat. Melalui keberadaan website ini kiranya masyarakat dapat mengetahui seluruh informasi tentang kegiatan usaha, bidang usaha, serta produk dari BUMDesa&nbsp;</span>/ BUM Kalurahan&nbsp;&nbsp;&ldquo;LUHUR SEMBADA&rdquo;.</p>\r\n<p class=\"MsoNormal\" style=\"text-align: justify;\"><span lang=\"IN\" style=\"mso-ansi-language: IN;\">Kritik dan Saran terhadap kekurangan dan kesalahan yang ada sangat kami harapkan guna penyempurnaan website ini dimasa yang akan datang. Semoga website ini dapat memberikan manfaat bagi kita semua.</span></p>\r\n<p class=\"MsoNormal\" style=\"text-align: justify;\"><span lang=\"IN\" style=\"mso-ansi-language: IN;\">Terima kasih.</span></p>',
            ],
        ];
        foreach ($greets as $key => $data) {
            $greet = new Greet();
            $greet->position = $data['position'];
            $greet->name = $data['name'];
            $greet->slug = 'sambutan-'.\Illuminate\Support\Str::slug($data['position']);
            $greet->img = $data['img'];
            $greet->greeting = $data['greeting'];
            $greet->save();
        }
    }
}

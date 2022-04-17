<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blogs = [
            [
                'title' => 'Pupuk UREA \"PETRO\"',
                'category_id' => Category::where('name', 'Unit Usaha Perdagangan')->first()->id,
                'desc' => '<p>Pupuk UREA \"PETRO\" ini mempunyai berat bersih 50 Kg/Sak.</p>\r\n<p>Kandungan N (Nitrogen) didalamnya 46%.</p>\r\n<p><strong>Harga per Sak Rp300.000,-</strong></p>\r\n<p><strong>Harga ecer Rp6.000/Kg</strong></p>\r\n<p style=\"margin-bottom: 80px;\"><a href=\"https://wa.me/62895614609090?text=Hai%20BUMDesa,%20izin%20bertanya\" target=\"_blank\" rel=\"noopener\"><button class=\"btn btn-primary\"> Pesan Sekarang </button></a></p>',
                'img' => 'imgonline-com-ua-resize-lRfVFFnbhrCk7xo_1635190269.jpg',
            ],
            [
                'title' => 'Unit Usaha Pengelolaan Sampah / Pengambilan Sampah Kolektif',
                'category_id' => Category::where('name', 'Unit Usaha Pengelolaan Sampah')->first()->id,
                'desc' => '<p class=\"MsoNoSpacing\" style=\"text-align: justify;\"><span lang=\"EN-US\" style=\"font-size: 12.0pt; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin;\">Usaha perantara (<em>brokering</em>) yang memberikan jasa pelayanan kepada warga</span><span lang=\"IN\" style=\"font-size: 12.0pt; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; mso-ansi-language: IN;\"> Sidoluhur melalui Unit usaha jasa pengelolaan dan atau pengangkutan (kolektif) sampah rumah tangga, kantor, warung, penginapan (kontrakan / kamar kos). Unit usaha ini merupakan perpanjangan tangan Pemerintah Kalurahan Sidoluhur dalam memberikan solusi aktif (setelah himbauan-himbauan / larangan yang telah dilakukan) dalam rangka penanggulangan masalah sampah yang akan menimbulkan gangguan lingkungan ataupun masalah sosial.&nbsp;</span></p>\r\n<p class=\"MsoNoSpacing\" style=\"text-align: justify;\">&nbsp;</p>\r\n<p>&nbsp;</p>',
                'img' => 'imgonline-com-ua-CompressToSize-YAdybfu2ISUfPhc_1649908234.jpg',
            ],
            [
                'title' => 'Pupuk UREA \"MESTAC\"',
                'category_id' => Category::where('name', 'Unit Usaha Perdagangan')->first()->id,
                'desc' => '<p>Pupuk UREA \"MESTAC\" ini mempunyai berat bersih 25 Kg/Sak.</p>\r\n<p>Kandungan N (Nitrogen) didalamnya 26%. Butiran besar (Granule) akan mempermudah dalam aplikasi penaburannya.</p>\r\n<p><strong>Harga per Sak Rp150.000,-</strong></p>\r\n<p><strong>Harga ecer Rp6.000/Kg</strong></p>\r\n<p style=\"margin-bottom: 80px;\"><a href=\"https://wa.me/62895614609090?text=Hai%20BUMDesa,%20izin%20bertanya\" target=\"_blank\" rel=\"noopener\"><button class=\"btn btn-primary\">Pesan Sekarang</button></a></p>',
                'img' => 'imgonline-com-ua-resize-9WJ2OQfE0Zxn_1635190636.jpg',
            ],
            [
                'title' => 'Pupuk Organik \"PATIGAN\"',
                'category_id' => Category::where('name', 'Unit Usaha Perdagangan')->first()->id,
                'desc' => '<p style=\"box-sizing: border-box; margin: 0px 0px 15px; padding: 0px; border: 0px; outline: 0px; font-size: 15px; background: #ffffff; line-height: 1.6; color: #5d5c5c; font-family: Poppins, sans-serif;\">Pupuk Organik \"PATIGAN\"&nbsp; ini mempunyai berat bersih 40 Kg/Sak.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 15px; padding: 0px; border: 0px; outline: 0px; font-size: 15px; background: #ffffff; line-height: 1.6; color: #5d5c5c; font-family: Poppins, sans-serif;\">Mengandung arang aktif sebagai penambat N (Nitrogen). Super kompos ini berguna untuk memperbaiki struktur tanah. Sangat efektif jika dikombinasikan dengan Pupuk NPK. Pupuk PATIGAN ini sudah terdaftar di DEPTAN 02.03.2016.154</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 15px; padding: 0px; border: 0px; outline: 0px; font-size: 15px; background: #ffffff; line-height: 1.6; color: #5d5c5c; font-family: Poppins, sans-serif;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px; background: transparent; font-weight: bold;\">Harga per Sak Rp35.000,-</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 15px; padding: 0px; border: 0px; outline: 0px; font-size: 15px; background: #ffffff; line-height: 1.6; color: #5d5c5c; font-family: Poppins, sans-serif;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px; background: transparent; font-weight: bold;\">Harga ecer Rp - /Kg</span></p>',
                'img' => 'imgonline-com-ua-resize-zLV7IhlhJ0JCs9_1635191331.jpg',
            ],
            [
                'title' => 'Pupuk NPK \"PELANGI\"',
                'category_id' => Category::where('name', 'Unit Usaha Perdagangan')->first()->id,
                'desc' => '<p style=\"box-sizing: border-box; margin: 0px 0px 15px; padding: 0px; border: 0px; outline: 0px; font-size: 15px; background: #ffffff; line-height: 1.6; color: #5d5c5c; font-family: Poppins, sans-serif;\">Pupuk NPK \"PELANGI\"&nbsp; ini mempunyai berat bersih 20 Kg/Sak.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 15px; padding: 0px; border: 0px; outline: 0px; font-size: 15px; background: #ffffff; line-height: 1.6; color: #5d5c5c; font-family: Poppins, sans-serif;\"><span style=\"background-color: transparent;\">Pupuk NPK 16 16 16 memiliki kandungan Hara 16% N, 16% P<sub>2</sub>O<sub>5</sub>, 16% K<sub>2</sub>O sehingga ini termasuk golongan pupuk komplit.</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 15px; padding: 0px; border: 0px; outline: 0px; font-size: 15px; background: #ffffff; line-height: 1.6; color: #5d5c5c; font-family: Poppins, sans-serif;\"><span style=\"background-color: transparent; font-weight: bold;\">Harga per Sak Rp165.000,-</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 15px; padding: 0px; border: 0px; outline: 0px; font-size: 15px; background: #ffffff; line-height: 1.6; color: #5d5c5c; font-family: Poppins, sans-serif;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px; background: transparent; font-weight: bold;\">Harga ecer Rp 8.500 /Kg</span></p>',
                'img' => 'imgonline-com-ua-resize-VZjhEzIg07Ovc_1635192060.jpg',
            ],
            [
                'title' => 'Pupuk \"PHOSKA\"',
                'category_id' => Category::where('name', 'Unit Usaha Perdagangan')->first()->id,
                'desc' => '<p style=\"box-sizing: border-box; margin: 0px 0px 15px; padding: 0px; border: 0px; outline: 0px; font-size: 15px; background: #ffffff; line-height: 1.6; color: #5d5c5c; font-family: Poppins, sans-serif;\">Pupuk \"PHOSKA\"&nbsp; ini mempunyai berat bersih 50 Kg/Sak.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 15px; padding: 0px; border: 0px; outline: 0px; font-size: 15px; background: #ffffff; line-height: 1.6; color: #5d5c5c; font-family: Poppins, sans-serif;\">Butiran besar (Granule) berwarna merah. Mengandung MgO 15%, CaO 15%, CaCO3 15%</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 15px; padding: 0px; border: 0px; outline: 0px; font-size: 15px; background: #ffffff; line-height: 1.6; color: #5d5c5c; font-family: Poppins, sans-serif;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px; background: transparent; font-weight: bold;\">Harga per Sak Rp130.000,-</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 15px; padding: 0px; border: 0px; outline: 0px; font-size: 15px; background: #ffffff; line-height: 1.6; color: #5d5c5c; font-family: Poppins, sans-serif;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px; background: transparent; font-weight: bold;\">Harga ecer Rp 3.000/Kg</span></p>',
                'img' => 'imgonline-com-ua-resize-0xViDf4BdcnvZKn_1635192770.jpg',
            ],
            [
                'title' => 'Pupuk TSP \"LADANG SUBUR 36\"',
                'category_id' => Category::where('name', 'Unit Usaha Perdagangan')->first()->id,
                'desc' => '<p style=\"box-sizing: border-box; margin: 0px 0px 15px; padding: 0px; border: 0px; outline: 0px; font-size: 15px; background: #ffffff; line-height: 1.6; color: #5d5c5c; font-family: Poppins, sans-serif;\"><strong>Pupuk TSP \"LADANG SUBUR 36\"&nbsp;</strong> ini mempunyai berat bersih 50 Kg/Sak.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 15px; padding: 0px; border: 0px; outline: 0px; font-size: 15px; background: #ffffff; line-height: 1.6; color: #5d5c5c; font-family: Poppins, sans-serif;\">Butiran besar <em>(Granule)</em> berwarna abu-abu. Mengandung CaO 42,07%, MgO 19,88%, CaCO3 102,64%</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 15px; padding: 0px; border: 0px; outline: 0px; font-size: 15px; background: #ffffff; line-height: 1.6; color: #5d5c5c; font-family: Poppins, sans-serif;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px; background: transparent; font-weight: bold;\">Harga per Sak Rp110.000,-</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 15px; padding: 0px; border: 0px; outline: 0px; font-size: 15px; background: #ffffff; line-height: 1.6; color: #5d5c5c; font-family: Poppins, sans-serif;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px; background: transparent; font-weight: bold;\">Harga ecer Rp 3.000/Kg</span></p>',
                'img' => 'imgonline-com-ua-resize-RxQ8SsdpeN_1635193084.jpg',
            ],
            [
                'title' => 'Air Minum Dalam Kemasan \"DAXU\"',
                'category_id' => Category::where('name', 'Unit Usaha Perdagangan')->first()->id,
                'desc' => '<p><strong>Air Minum Dalam Kemasan \"DAXU\" </strong>berasal dari sumber air Kaliurang - Sleman Yogyakarta, diproduksi oleh PDAM Sleman. Seluruh produk DAXU ini sudah teruji kelayakaannya dan terjamin kualitasnya (BADAN POM RI 255212001058)</p>\r\n<p>Harga DAXU&nbsp;</p>\r\n<p>- 120ml Cup Kecil / Rp16.000 /Dus isi 45</p>\r\n<p>- 240ml Gelas (Cup) / Rp23.000 /Dus isi 48</p>\r\n<p>- 330ml Botol (Kecil) / Rp30.000 /Dus isi 24</p>\r\n<p>- 600ml Botol (Sedang) / Rp35.000 /Dus isi 24</p>',
                'img' => 'imgonline-com-ua-CompressToSize-SEli8ZjJEsjdeh_1649910105.jpg',
            ],
            [
                'title' => 'Himbauan dari Direktur BUM Kalurahan \"LUHUR SEMBADA\" Sidoluhur',
                'category_id' => Category::where('name', 'Kegiatan yang akan datang')->first()->id,
                'desc' => '<p>Himbauan dari Direktur BUM kalurahan \"LUHUR SEMBADA\" Sidoluhur</p>\r\n<p>\".... meski sedang pandemi, jangan kendor tetap jalankan giat ekonomi produktif.\" Ir. HARJANTO (Direktur BUM kalurahan \"LUHUR SEMBADA\" Sidoluhur</p>',
                'img' => 'Giat Ekonomi Produktif oleh Ir. Harjanto_1635194781.jpg',
            ],
            [
                'title' => 'BUMKal Luhur Sembada Sidoluhur Serahkan LPJ dan Proker ke Dinas PMK Sleman',
                'category_id' => Category::where('name', 'Kegiatan BUMKal')->first()->id,
                'desc' => '<p>Jogjakeren.com &ndash; Badan Usaha Milik Kalurahan (BUMKal) Luhur Sembada, Sidoluhur, Godean, Sleman melalui Direktur Ir. Harjanto menyerahkan Laporan Pertanggungjawaban (LPJ) dan program kerja tahun 2022-2023 ke Dinas Pemberdayaan Masyarakat dan Kalurahan (PMK) Kabupaten Sleman, Kamis (31/3/2022). Penyerahan turut didampingi Sekretaris BUMKal Putut Purnawanto, A.Md. dan KaBag Unit Pengelolaan Sampah Anang Wisnu Marbangun. Sejak diberi amanah sebagai Direktur BUMKal pada Oktober 2020, ia bersama timnya berkesempatan untuk menyerahkan laporan tahunan tahun 2021, &ldquo;Alhamdulillah LPJ kami diterima dengan baik dari Dinas PMK Sleman,&rdquo; katanya. Sebelumnya, Pemerintah Kalurahan Sidoluhur menggelar musyawarah Kalurahan Sidoluhur yang membahas perkembangan BUMKal Luhur Sembada, Selasa (29/3/2022) lalu. Beberapa poin yang dibahas di antaranya laporan pertanggungjawaban pengelolaan BUM Desa Luhur Sembada tahun 2021, penyusunan rencana program kerja BUM Kalurahan Luhur Sembada Sidoluhur tahun 2022 dan penyusunan rancangan peraturan Kalurahan Sidoluhur tentang pendirian Badan Usaha Milik Kalurahan Luhur Sembada Sidoluhur. Diketahui, usaha BUM Desa Luhur Sembada terdiri dari unit usaha jasa boga/catering service, unit usaha perdagangan, unit usaha pengelolaan sampah, unit usaha pertanian dan perikanan, dan unit usaha jasa pembayaran.</p>\r\n<p><em>https://jogjakeren.com/bumkal-luhur-sembada-sidoluhur-serahkan-lpj-dan-proker-ke-dinas-pmk-sleman/</em></p>',
                'img' => 'imgonline-com-ua-CompressToSize-Aotq5dx4dKZxwN_1649911753.jpg',
            ],
        ];
        foreach ($blogs as $key => $data) {
            $blog = new Blog();
            $blog->title = $data['title'];
            $blog->slug = Str::slug($data['title']);
            $blog->category_id = $data['category_id'];
            $blog->img = $data['img'];
            $blog->desc = $data['desc'];
            $blog->save();
        }
    }
}

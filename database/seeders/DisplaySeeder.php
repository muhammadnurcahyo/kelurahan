<?php

namespace Database\Seeders;

use App\Models\Display;
use Illuminate\Database\Seeder;

class DisplaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $display = new Display();
        $display->name = 'Luhur Sembada';
        $display->motto = 'Website Resmi BUM Kalurahan "Luhur Sembada" Sidoluhur yang memberikan tentang berita terbaru BUM Kalurahan "Luhur Sembada" Sidoluhur hari ini, Termasuk event/kegiatan, product, dan unit usahanya.';
        $display->logo = 'imgonline-com-ua-CompressToSize-cHXptN5QKhjmHd9u_logo.jpg';
        $display->save();
    }
}

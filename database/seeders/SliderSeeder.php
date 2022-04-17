<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sliders = [
            [
                'title' => 'Selamat Datang di BUMDesa Luhur Sembada',
                'img' => 'unitt_1634462695.jpg',
                'url' => 'https://bumdesaluhursembada.com/about/5',
            ],
            [
                'title' => 'jangan kendor tetap jalankan giat ekonomi produktif',
                'img' => 'imgonline-com-ua-CompressToSize-y3XVj2hMyL_1649908954.jpg',
                'url' => 'https://bumdesaluhursembada.com/berita/22',
            ],
        ];

        foreach ($sliders as $key => $data) {
            $slider = new Slider();
            $slider->title = $data['title'];
            $slider->url = $data['url'];
            $slider->img = $data['img'];
            $slider->save();
        }
    }
}

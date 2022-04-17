<?php

namespace Database\Seeders;

use App\Models\Social;
use Illuminate\Database\Seeder;

class SocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $socials = [
            [
                'name' => '0895614609090',
                'icon' => 'fab fa-whatsapp',
                'link' => 'https://wa.me/62895614609090?text=Hai%20BUMDesa,%20izin%20bertanya',
            ],
            [
                'name' => 'bumdes.luhursembada@gmail.com',
                'icon' => 'fas fa-envelope',
                'link' => 'mailto:bumdes.luhursembada@gmail.com',
            ],
            [
                'name' => 'BLS Sidoluhur',
                'icon' => 'fab fa-facebook-f',
                'link' => 'https://web.facebook.com/bls.sidoluhur',
            ],
        ];

        foreach ($socials as $key => $data) {
            $social = new Social();
            $social->name = $data['name'];
            $social->icon = $data['icon'];
            $social->link = $data['link'];
            $social->save();
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Unit Usaha Pengelolaan Sampah',
                'kind' => 'produk',
            ],
            [
                'name' => 'Kegiatan BUMKal',
                'kind' => 'lainya',
            ],
            [
                'name' => 'Unit Usaha Jasa Boga',
                'kind' => 'produk',
            ],
            [
                'name' => 'Unit Usaha Perdagangan',
                'kind' => 'produk',
            ],
            [
                'name' => 'Kegiatan yang akan datang',
                'kind' => 'lainya',
            ],
        ];
        foreach ($categories as $key => $data) {
            $category = new Category();
            $category->name = $data['name'];
            $category->slug = Str::slug($data['name']);
            $category->kind = $data['kind'];
            $category->save();
        }
    }
}

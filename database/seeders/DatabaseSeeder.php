<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // DUmmy User
        $user = new \App\Models\User();
        $user->name ='cahyo';
        $user->phone = '';
        $user->address = '';
        $user->img = '';
        $user->email = 'cahyo@mailinator.com';
        $user->password = Hash::make('semuabisa');
        $user->email_verified_at = now();
        $user->save();

        // Kategori
        $category = new \App\Models\Category();
        $category->category = 'Pemuda Desa';
        $category->slug = 'pemuda-desa';
        $category->kind = 1;
        $category->save();
        // Blog
        $blog = new Blog();
        $blog->title = 'Cara Cepat Kaya';
        $blog->slug = 'cara-cepat-kaya';
        $blog->category_id = $category->id;
        $blog->img = 'desc';
        $blog->desc = 'desc';
        $blog->save();
        // Slider
    }
}

<?php

namespace Database\Seeders;

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
        $this->call(AccountSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(BlogSeeder::class);
        $this->call(SliderSeeder::class);
        $this->call(AboutSeeder::class);
        $this->call(GreetSeeder::class);
        $this->call(DisplaySeeder::class);
    }
}

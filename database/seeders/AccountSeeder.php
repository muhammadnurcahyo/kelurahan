<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Administrator',
                'email' => 'admin@codeinaja.net',
                'password' => bcrypt('semuabisa'),
                'img' => null,
                'phone' => '081706543241',
                'address' => 'fakfak',
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}

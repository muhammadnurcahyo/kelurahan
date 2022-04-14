<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
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
               'name'=>'ini akun Admin',
               'email'=>'admin@example.com',
               'password'=> bcrypt('123456'),
               'img'=>'img.jpg',
               'phone'=>'081706543241',
               'address'=>'fakfak'
            ]
            
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}

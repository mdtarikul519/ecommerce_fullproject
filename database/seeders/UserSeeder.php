<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       User::truncate();
       User::create([
        'role_id' => '1',
        'name' => 'tarek',
        'email' => 'tarikulmd519@gmail.com',
        'phone' => 01721251533,
        'image' => 'quiz/sorif.png',
        'password' => bcrypt('12345678')
    ]);

    User::create([
        'role_id' => '2',
        'name' => 'sorif',
        'email' => 'sorif@gmail.com',
        'phone' => 01721251533,
        'image' => 'quiz/sorif.png',
        'password' =>bcrypt('12345678')
    ]);
    User::create([
        'role_id' => '3',
        'name' => 'joton',
        'email' => 'joton@gmail.com',
        'phone' => 01721251533,
        'image' => 'quiz/sorif.png',
        'password' =>bcrypt('12345678')
    ]);
    }
}

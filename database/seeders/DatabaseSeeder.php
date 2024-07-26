<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Http\Controllers\admin;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Kategori;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

            $data =[
[

    'name'=>'vincent',
    'username'=>'vincent',
    'is_admin'=>'1',
    'email' =>'admin@gmail.com',
    'password'=>bcrypt('123456789')
],[
    'name'=>'user',
    'username'=>'user_laravel',
    'is_admin'=>'0',
    'email' =>'user_laravel@gmail.com',
    'password'=>bcrypt('123456789')
    
    ]
];
foreach ($data as $key => $val) {
    User::create($val);
}
$data = [
    ['nama_kategori' => 'roti'],
    ['nama_kategori' => 'cokelat'],
    ['nama_kategori' => 'minuman'],
];

foreach ($data as $item) {
    Kategori::create($item);
}
    }
}
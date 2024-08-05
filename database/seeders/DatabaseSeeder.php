<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Barang;
use App\Models\Kategori;
use App\Http\Controllers\admin;
use Illuminate\Database\Seeder;


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

    'name'=>'OWNER',
    'username'=>'OWENR',
    'is_admin'=>'1',
    'email' =>'owner@gmail.com',
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
             ['nama_kategori' => 'dessert'],
             ['nama_kategori' => 'chocolate'],
             ['nama_kategori' => 'beverage'],
        ];

        foreach ($data as $item) {
             Kategori::create($item);
        }


        $barang =[
            ['title' =>'raisin bread'],
            ['berat_barang' =>'100(g)'], 
            ['deskripsi'=>'bread with raisin on it'],            
            ['harga' =>'50.00'],
            ['Kategori'=>'1'],
            ['user_id'=>'1'],
        ];


        foreach($barang as $barangs){
            Barang::create($barangs);
        }

    }
}
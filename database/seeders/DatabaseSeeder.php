<?php

namespace Database\Seeders;

use App\Models\admin;
use App\Models\User;
use App\Models\Barang;
use App\Models\Kategori;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seed data untuk User (Owner dan User biasa)
        $users = [
                [
                    'name' => 'vincent',
                    'username' => 'vincent',
                    'role' => 'admin',
                    'email' => 'vincentluhulima600@gmail.com',
                    'password' => bcrypt('vincent11'),
                ],
                [
                    'name' => 'vincent1',
                    'username' => 'vincent2', // Ubah username agar unik
                    'role' => 'user',
                    'email' => 'vincentluhulima6010@gmail.com',
                    'password' => bcrypt('vincent11'),
                ],
        ];
    
        // Loop untuk membuat User jika email belum ada di database
        foreach ($users as $user) {
            if (!User::where('email', $user['email'])->exists()) {
                User::create($user);
            }
        }
    
        // Seed data untuk Admin
        // $admin = [
        //     [
        //         'name' => 'vicnent',
        //         'username' => 'vincent',
        //         'email' => 'vincentluhulima6010@gmail.com',
        //         'password' => bcrypt('vincent11'),
        //     ]
        // ];
    
        // // Loop untuk membuat Admin jika email belum ada di database
        // foreach ($admin as $admins) {
        //     if (!admin::where('email', $admins['email'])->exists()) {
        //         admin::create($admins); // Menggunakan model User, bukan admin controller
        //     }
        // }
    
        // Seed data untuk Kategori
        $categories = [
            ['nama_kategori' => 'roti'],
            ['nama_kategori' => 'dessert'],
            ['nama_kategori' => 'chocolate'],
            ['nama_kategori' => 'beverage'],
        ];
    
        // Loop untuk membuat Kategori
        foreach ($categories as $category) {
            Kategori::create($category);
        }
    }
    
}

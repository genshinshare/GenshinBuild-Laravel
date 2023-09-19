<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    public function run()
    {
        // Data pengguna contoh
        $users = [
            [
                'name' => 'Admin',
                'email' => 'Admin@example.com',
                'password' => Hash::make('12345678'),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];

        // Masukkan data ke dalam tabel users
        DB::table('users')->insert($users);
    }
}
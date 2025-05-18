<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Admin
        User::create([
            'name' => 'Admin Repairin',
            'email' => 'admin@repairin.com',
            'password' => Hash::make('password'),
            'role' => 'admin'
        ]);

        // Teknisi
        for ($i = 1; $i <= 5; $i++) {
            User::create([
                'name' => "Teknisi $i",
                'email' => "teknisi$i@repairin.com",
                'password' => Hash::make('password'),
                'role' => 'teknisi'
            ]);
        }

        // Pelanggan
        for ($i = 1; $i <= 5; $i++) {
            User::create([
                'name' => "Pelanggan $i",
                'email' => "pelanggan$i@repairin.com",
                'password' => Hash::make('password'),
                'role' => 'pelanggan'
            ]);
        }
    }
}

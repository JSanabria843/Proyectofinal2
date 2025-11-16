<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Admin
        User::create([
            'name' => 'Administrador',
            'email' => 'admin@example.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin'
        ]);

        // Usuario general
        User::create([
            'name' => 'Usuario General',
            'email' => 'user@example.com',
            'password' => Hash::make('user123'),
            'role' => 'user'
        ]);
    }
}


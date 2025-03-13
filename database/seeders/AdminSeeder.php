<?php

namespace database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminSeeder extends Seeder
{
 
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'phone' => '123456789',  // Asegúrate de que estos campos existen en tu DB
            'locality' => 'Madrid',
            'role' => 'admin',
        ]);
    }
}

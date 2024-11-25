<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Amina',
            'email' => 'amina@gmail.com',
            'password' => '12345678', // Mot de passe sécurisé
            'role' => 'admin',
        ]);
       
        
    }
}

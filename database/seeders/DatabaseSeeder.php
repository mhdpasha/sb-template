<?php

namespace Database\Seeders;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'no_induk' => '12510',
            'nama' => 'Muhamad Pasha Albara',
            'email' => 'pasha@gmail.com',
            'password' => Hash::make('pasha'),
            'role' => 'pustakawan' 
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Creating Super Admin User
        $superAdmin = User::create([
            'name' => 'Administrator', 
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123')
        ]);
        $superAdmin->assignRole('Super Admin');

        // Creating Admin User
        $petugas = User::create([
            'name' => 'petugas', 
            'email' => 'petugas@gmail.com',
            'password' => Hash::make('petugasl123')
        ]);
        $petugas->assignRole('Petugas');

       
    }
}
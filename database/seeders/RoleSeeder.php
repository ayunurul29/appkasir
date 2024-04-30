<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => 'Super Admin']);
        $petugas = Role::create(['name' => 'Petugas']);
      
        $petugas->givePermissionTo([
            'create-user',
            'edit-user',
            'delete-user',
            'create-pelanggan',
            'edit-pelanggan',
            'delete-pelanggan',
            'create-penjualan',
            'edit-penjualan',
            'delete-penjualan',
            'create-detail',
            'edit-detail',
            'delete-detail',
            'create-product',
            'edit-product',
            'delete-product',
        ]);

      
    }
}
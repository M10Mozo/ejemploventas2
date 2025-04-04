<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $superAdmin = User::create(attributes: [
            'name' => 'Super Admin', 
            'email' => 'superadmin@gmail.com',
            'password' => Hash::make('Admin123$')
        ]);

        $superAdmin->assignRole('Super Admin');

        $admin = User::create([
            'name' => 'Administrador', 
            'email' => 'admin@gmail.com',
            'password' => Hash::make('Admin123$')
        ]);

        $admin->assignRole('Admin');

        $anthony = User::create([
            'name' => 'Moises', 
            'email' => 'moisesmozo123@gmail.com',
            'password' => Hash::make('A&A060418')
        ]);
        $anthony->assignRole('user');
    }
}

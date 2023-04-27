<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@app.com',
            'password' => bcrypt('Gr3sikMi9@s')
        ]); 
        
        $admin->assignRole('admin');

        $user = User::create([
            'name' => 'user',
            'email' => 'user@app.com',
            'password' => bcrypt('Us3rMi9@s')
        ]); 
        
        $user->assignRole('user');
    }
}

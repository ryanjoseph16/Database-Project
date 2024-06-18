<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use DB;
class UsersTableSeeder extends Seeder
{
    
    public function run(): void
    {
        
        DB::table('users')->insert([

            [
                'name' => 'Admin',
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('!234Qwer'),
                'role' => 'admin',
                'status' => 'active',
            ],

            [
                'name' => 'User',
                'username' => 'user',
                'email' => 'user@gmail.com',
                'password' => Hash::make('!234Qwer'),
                'role' => 'user',
                'status' => 'active',
            ],
        ]);
    }
}

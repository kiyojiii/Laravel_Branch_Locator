<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
                // Admin

                [
                    'firstname' => 'Admin',
                    'lastname' => '00',
                    'username' => 'admin',
                    'email' => 'admin@gmail.com',
                    'password' => Hash::make('qwer12345'),
                    'role' => 'admin',
                    'status' => 'active', 
                ],
                // Agent

                [
                    'firstname' => 'Agent',
                    'lastname' => '007',
                    'username' => 'agent',
                    'email' => 'agent@gmail.com',
                    'password' => Hash::make('qwer12345'),
                    'role' => 'agent',
                    'status' => 'active', 
                ],
                // User

                [
                    'firstname' => 'Clint Joshua',
                    'lastname' => 'Garcia',
                    'username' => 'cjgarcia',
                    'email' => 'pogi@gmail.com',
                    'password' => Hash::make('qwer12345'),
                    'role' => 'user',
                    'status' => 'active', 
                ]
            ]);
    }
}

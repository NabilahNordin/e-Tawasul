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
         // Create a student user
        User::create([
            'name' => 'Student ',
            'email' => 'student@test.com',
            'password' => bcrypt('student1234'), // Hash password
            'role' => 'student', // Set role as 'student'
        ]);


        // Create an admin user
        User::create([
            'name' => 'Admin',
            'email' => 'admin@test.com',
            'password' => bcrypt('admin1234'), // Hash password
            'role' => 'admin', // Set role as 'admin'
        ]);

        // Create a next of kin user
        User::create([
            'name' => 'Kin',
            'email' => 'kin@test.com',
            'password' => bcrypt('kin1234'), // Hash password
            'role' => 'kin', // Set role as 'kin'
        ]);
    }
}

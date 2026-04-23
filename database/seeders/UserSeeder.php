<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create a student user
        $user = User::create([
            'name' => 'Student ',
            'email' => 'student@test.com',
            'password' => bcrypt('student1234'), // Hash password

        ]);
        $user->assignRole(Role::where('name', 'student')->first());



        // Create an admin user
        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@test.com',
            'password' => bcrypt('admin1234'), // Hash password

        ]);
        $user->assignRole(Role::where('name', 'admin')->first());

        // Create a next of kin user
        $user = User::create([
            'name' => 'Kin',
            'email' => 'kin@test.com',
            'password' => bcrypt('kin1234'), // Hash password

        ]);
        $user->assignRole(Role::where('name', 'kin')->first());
    }
}

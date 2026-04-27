<?php

namespace Database\Seeders;

use App\Models\Kin;
use App\Models\Student;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Schema::disableForeignKeyConstraints();
        DB::table('users')->truncate();
        Schema::enableForeignKeyConstraints();


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
         // Create a Kin record linked to the kin user by email
        $kin = Kin::create([
            'First_Name' => 'Ahmad',
            'Last_Name' => 'Ali',
            'Relationship_to_student' => 'Parent',
            'Email' => 'kin@test.com',
            'Access_Level' => 'full',
        ]);

        // Create a Student record linked to the kin
        Student::create([
            'Last_Name' => 'Firdaus',
            'Email' => 'student@test.com',
            'Status' => 'Active',
            'Guardian_ID' => $kin->Kin_ID,
        ]);
    }
}

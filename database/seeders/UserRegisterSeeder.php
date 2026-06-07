<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserRegisterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
        {
            // একাধিক ইউজারের ডাটা অ্যারে আকারে সাজানো হলো
            $users = [
                [
                    'name' => 'Super Admin',
                    'email' => 'admin@gmail.com',
                    'password' => Hash::make('1234567890'),
                    'role' => 1,
                    'type' => 'super_admin',
                    'slug' => 'super-admin',
                ],
                [
                    'name' => 'Branch User',
                    'email' => 'branch@gmail.com',
                    'password' => Hash::make('1234567890'),
                    'role' => 2,
                    'type' => 'branch',
                    'slug' => 'branch-user',
                ],
                [
                    'name' => 'University User',
                    'email' => 'university@gmail.com',
                    'password' => Hash::make('1234567890'),
                    'role' => 2,
                    'type' => 'university',
                    'slug' => 'university-user',
                ],
                [
                    'name' => 'Staff User',
                    'email' => 'staff@gmail.com',
                    'password' => Hash::make('1234567890'),
                    'role' => 3,
                    'type' => 'staff',
                    'slug' => 'staff-user',
                ],
                [
                    'name' => 'Student',
                    'email' => 'student@gmail.com',
                    'password' => Hash::make('1234567890'),
                    'role' => 0,
                    'type' => 'student',
                    'slug' => 'studnet',
                ],
            ];

            // লুপ চালিয়ে ডাটাবেজে ইনসার্ট করা হচ্ছে
            foreach ($users as $user) {
                User::create($user);
            }
        }
}

<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::updateOrCreate([
            'name' => 'Super Admin',
            'email' => 'superadmin@gmail.com',
            'password' => bcrypt('Test@321'),
            'gender' => 'M',
            'is_active' => '1',
            'role_id' => 1,
        ]);
        User::updateOrCreate([
            'name' => 'Teacher',
            'email' => 'teacher@gmail.com',
            'password' => bcrypt('Test@321'),
            'gender' => 'M',
            'is_active' => '1',
            'role_id' => 2,
        ]);
        User::updateOrCreate([
            'name' => 'Student',
            'email' => 'student@gmail.com',
            'password' => bcrypt('Test@321'),
            'gender' => 'M',
            'is_active' => '1',
            'role_id' => 3,
        ]);
    }
}

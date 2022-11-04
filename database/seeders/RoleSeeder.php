<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::updateOrCreate([
            'title' => 'Super Admin',
            'type' => 'super_admin'
        ]);
        Role::updateOrCreate([
            'title' => 'Teacher',
            'type' => 'teacher'
        ]);
        Role::updateOrCreate([
            'title' => 'Student',
            'type' => 'student'
        ]);
    }
}

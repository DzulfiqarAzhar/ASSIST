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
        User::create([
            'name'          =>  'Admin',
            'email'         =>  'example@gmail.com',
            'role_id'       =>  1,
            'group_id'      =>  1,
            'password'      =>  bcrypt('password'),
            'created_by'    =>  'System',
            'updated_by'    =>  '',
        ]);
    }
}

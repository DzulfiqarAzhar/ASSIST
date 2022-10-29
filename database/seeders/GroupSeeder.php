<?php

namespace Database\Seeders;

use App\Models\Group;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Group::create([
            'name'          =>  'Admin',
            'role_id'       =>  1,
            'created_by'    =>  'System',
            'updated_by'    =>  '',
        ]);
    }
}

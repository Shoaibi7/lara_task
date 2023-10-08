<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => 'ADMIN','guard_name'=>'web']);
        Role::create(['name' => 'COMPANY','guard_name'=>'web']);
        Role::create(['name' => 'USER','guard_name'=>'web']);
    }
}

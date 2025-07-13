<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            ['name' => 'CEO', 'desc' => null, 'active' => true],
            ['name' => 'CTO', 'desc' => null, 'active' => true],
            ['name' => 'Backend', 'desc' => null, 'active' => true],
            ['name' => 'Frontend', 'desc' => null, 'active' => true],
            ['name' => 'Mobile Dev', 'desc' => null, 'active' => true],
            ['name' => 'Project Manager', 'desc' => null, 'active' => true],
            ['name' => 'UI/UX', 'desc' => null, 'active' => true],
            ['name' => 'DIgital Marketing', 'desc' => null, 'active' => true],
            ['name' => 'Finance', 'desc' => null, 'active' => true],
            ['name' => 'Bisnis Dev', 'desc' => null, 'active' => true],
        ];

        DB::table('role')->insert($roles);
    }
}

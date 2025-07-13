<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technologies = [
            ['name' => 'Laravel', 'image' => 'default.png', 'desc' => ''],
            ['name' => 'Python', 'image' => 'default.png', 'desc' => ''],
            ['name' => 'FLutter', 'image' => 'default.png', 'desc' => ''],
            ['name' => 'Vue', 'image' => 'default.png', 'desc' => ''],
            ['name' => 'Tailwind CSS', 'image' => 'default.png', 'desc' => ''],
            ['name' => 'FIlament', 'image' => 'default.png', 'desc' => ''],
            ['name' => 'MySql', 'image' => 'default.png', 'desc' => ''],
            ['name' => 'PostgreSql', 'image' => 'default.png', 'desc' => ''],
            ['name' => 'PHP', 'image' => 'default.png', 'desc' => ''],
            ['name' => 'Javascript', 'image' => 'default.png', 'desc' => ''],
            ['name' => 'Golang', 'image' => 'default.png', 'desc' => ''],
            ['name' => 'Java', 'image' => 'default.png', 'desc' => ''],
            ['name' => 'Springs Boot', 'image' => 'default.png', 'desc' => ''],
            ['name' => 'React', 'image' => 'default.png', 'desc' => ''],
            ['name' => 'Nuxt.js', 'image' => 'default.png', 'desc' => ''],
            ['name' => 'Next.js', 'image' => 'default.png', 'desc' => ''],
        ];

        DB::table('technology')->insert($technologies);
    }
}

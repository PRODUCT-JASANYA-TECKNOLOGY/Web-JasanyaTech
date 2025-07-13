<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Web', 'context' => 'product', 'desc' => ''],
            ['name' => 'Mobile', 'context' => 'product', 'desc' => ''],
            ['name' => 'Design Tamplate', 'context' => 'product', 'desc' => ''],
            ['name' => 'UI/UX', 'context' => 'product', 'desc' => ''],
            ['name' => 'ERP', 'context' => 'product', 'desc' => ''],
            ['name' => 'Tailwind Compoment', 'context' => 'product', 'desc' => ''],
            ['name' => 'Video Pembelajaran', 'context' => 'product', 'desc' => ''],
            ['name' => 'E-Book', 'context' => 'product', 'desc' => ''],
            ['name' => 'Saas', 'context' => 'product', 'desc' => ''],
            ['name' => 'Konsultasi', 'context' => 'product', 'desc' => ''],
        ];

        foreach ($categories as $category) {
            DB::table('category')->insert($category);
        }
    }
}

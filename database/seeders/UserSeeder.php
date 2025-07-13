<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
                "id" => 1,
                'name' => 'admin',
                'email' => "admin@gmail.com",
                'password' => bcrypt('P@ssw0rd'),      
            ],
        ];
        User::insert($user);
    }
}

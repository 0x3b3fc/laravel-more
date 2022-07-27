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
        User::truncate();
        User::create([
            'name'=> "Admin",
            'email'=> "admin@admin",
            'password'=> bcrypt('admin123'),
        ]);
        User::create([
            'name'=> "ahmed",
            'email'=> "ahmed@user",
            'password'=> bcrypt('ahmed123'),
        ]);
    }
}

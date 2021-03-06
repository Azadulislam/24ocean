<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = [
            ['user_name' => 'Admin', 'email' => 'admin@gmail.com', 'profile'=> 'profile.png', 'is_verified'=> 1, 'password' => Hash::make('admin')]
        ];
        Admin::insert($admin);
    }
}

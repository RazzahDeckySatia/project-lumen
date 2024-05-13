<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        user::create([
            'email' => 'decky27@gmail.com',
            'username' => 'decky27',
            'role' => 'admin',
            'password' => Hash::make('123'),
        ]);
    }
}

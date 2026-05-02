<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@nimsarado.com'],
            [
                'name' => 'Nimsara Dolamula',
                'password' => Hash::make('themiya125'),
                'role' => 'admin',
            ]
        );
    }
}
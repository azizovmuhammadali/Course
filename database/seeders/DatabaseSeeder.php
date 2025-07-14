<?php

namespace Database\Seeders;

use App\Models\Role;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
    $manager = User::factory()->create([
    'name'     => 'Manager',
    'email'    => 'manager@example.com',
    'password' => Hash::make('123456'),
    'role'  => 'manager'
]);

$admin = User::factory()->create([
    'name'     => 'Admin',
    'email'    => 'admin@example.com',
    'password' => Hash::make('123456'),
    'role'  => 'admin'
]);
}
}
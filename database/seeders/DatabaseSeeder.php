<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $user = User::factory()->create([
            'name' => 'Superadministrator',
            'email' => 'superadmin@csms.com',
            'password' => Hash::make('admin12345'),
            'userType' => 'superadministrator',
        ]);

        // Create Database for Roles and User_Role
        $this->call(LaratrustSeeder::class);

        // Attach Role for User
        $user->attachRole('superadministrator');
    }
}

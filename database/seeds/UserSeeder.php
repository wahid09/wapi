<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::updateOrCreate([
            'name' => 'Super Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password')
        ]);

        User::updateOrCreate([
            'name' => 'User',
            'email' => 'user@user.com',
            'password' => Hash::make('password')
        ]);
    }
}
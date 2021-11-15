<?php

namespace Database\Seeders;

use App\Models\User;
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
        $user = [
            'name' => 'User',
            'email' => 'user@user.com',
            'password' => bcrypt('password')
        ];

        User::create($user);
    }
}

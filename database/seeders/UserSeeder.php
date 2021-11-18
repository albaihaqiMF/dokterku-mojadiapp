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
        $admin = [
            'id' => 'USER01',
            'name' => 'Petugas',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'),
            'roleId' => 'STAFF',
            'phoneNumber' => '0834234234234'
        ];
        $user = [
            'id' => 'USER02',
            'name' => 'User',
            'email' => 'user@user.com',
            'password' => bcrypt('password'),
            'roleId' => 'PASIEN',
            'phoneNumber' => '0834234234236'
        ];
        $dokter = [
            'id' => 'USER03',
            'name' => 'Dokter',
            'email' => 'dokter@dokter.com',
            'password' => bcrypt('password'),
            'roleId' => 'DOKTER',
            'phoneNumber' => '0834234234237',
            'specialistId' => 'UMUM'
        ];


        User::create($admin);
        User::create($dokter);
        User::create($user);
    }
}

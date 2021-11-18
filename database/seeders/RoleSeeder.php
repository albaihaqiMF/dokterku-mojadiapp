<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['id' => 'STAFF', 'name' => 'petugas']);
        Role::create(['id' => 'DOKTER', 'name' => 'dokter']);
        Role::create(['id' => 'PASIEN', 'name' => 'pasien']);
    }
}

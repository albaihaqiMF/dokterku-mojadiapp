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
        Role::create(['name' => 'petugas']);    //  id = 1
        Role::create(['name' => 'dokter']);     //  id = 2
        Role::create(['name' => 'pasien']);     //  id = 3
    }
}

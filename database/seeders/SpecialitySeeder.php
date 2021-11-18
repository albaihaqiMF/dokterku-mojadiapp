<?php

namespace Database\Seeders;

use App\Models\Speciality;
use Illuminate\Database\Seeder;

class SpecialitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Speciality::create(['id' => 'UMUM', 'name' => 'dokter umum']);
        Speciality::create(['id' => 'GIGI', 'name' => 'dokter gigi']);
        Speciality::create(['id' => 'KULIT', 'name' => 'dokter kulit']);
    }
}

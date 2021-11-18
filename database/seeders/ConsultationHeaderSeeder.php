<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\ConsultationHeader;
use Illuminate\Database\Seeder;

class ConsultationHeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            'id' => 'HEADER01',
            'time' => '15:00',
            'date' => Carbon::parse('18-11-2021'),
            'maximumSlot' => '5',
            'description' => 'test',
            'doctorId' => 'USER03'
        ];

        ConsultationHeader::create($data);
    }
}

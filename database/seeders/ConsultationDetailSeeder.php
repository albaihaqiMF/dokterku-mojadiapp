<?php

namespace Database\Seeders;

use App\Models\ConsultationDetail;
use Illuminate\Database\Seeder;

class ConsultationDetailSeeder extends Seeder
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
            'id' => 'DETAIL01',
            'queue' => '1',
            'complaint' => 'test',
            'summary' => 'test',
            'isCancelled' => 'false',
            'consultationHeaderId' => 'HEADER01',
            'userId' => 'USER01'
        ];

        ConsultationDetail::create($data);
    }
}

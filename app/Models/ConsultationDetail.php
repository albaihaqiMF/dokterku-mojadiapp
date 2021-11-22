<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsultationDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'queue', 'consultationHeaderId', 'statusId', 'patientId'
    ];

    public function consultationHeader()
    {
        return $this->belongsTo(ConsultationHeader::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}

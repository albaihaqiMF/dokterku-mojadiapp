<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsultationDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'queue', 'consultationHeaderId'
    ];

    public function consultationHeader()
    {
        return $this->belongsTo(ConsultationHeader::class);
    }
}

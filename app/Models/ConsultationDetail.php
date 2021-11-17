<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsultationDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'queue', 'consultationHeaderId', 'complaint', 'summary', 'isCancelled', 'userId'
    ];

    public function consultationHeader()
    {
        return $this->belongsTo(ConsultationHeader::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsultationHeader extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'time', 'date', 'maximumSlot', 'specialistId', 'doctorId', 'description'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

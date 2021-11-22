<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsultationHeader extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'day', 'timeStart', 'timeEnd', 'date', 'timeStampId', 'roomId', 'maximumSlot', 'doctorId', 'description'
    ];

    public function timeStamp()
    {
        return $this->belongsTo(TimeStamp::class);
    }

    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
}

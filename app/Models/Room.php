<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'name', 'statusId'
    ];

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}

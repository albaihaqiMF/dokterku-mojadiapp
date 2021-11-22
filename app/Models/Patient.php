<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'userId', 'address', 'phoneNumber', 'birthDate', 'gender', 'height', 'imageUrl'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

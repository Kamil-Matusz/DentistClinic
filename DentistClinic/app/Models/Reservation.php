<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Reservation extends Model
{
    use HasFactory;
     protected $fillable = [
        'serviceId',
        'bookerName',
        'bookerSurname',
        'reservationDate'
    ];

    public function services(): HasMany
    {
        return $this->hasMany(Service::class);
    }
}

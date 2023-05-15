<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Reservation extends Model
{
    use HasFactory;
     protected $fillable = [
        'serviceId',
        'bookerName',
        'bookerSurname',
        'reservationDate',
        'userId',
        'dentistId'
    ];

    public function services(): HasMany
    {
        return $this->hasMany(Service::class);
    }

    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }

    public function dentists(): HasMany
    {
        return $this->hasMany(Dentist::class);
    }
}

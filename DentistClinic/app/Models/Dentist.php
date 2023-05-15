<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Dentist extends Model
{
    use HasFactory;
    protected $fillable = [
        'dentistName',
        'userId'
    ];

    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }

    public function dentists(): BelongsTo
    {
        return $this->belongsTo(Reservation::class);
    }
}

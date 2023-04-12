<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class ServiceType extends Model
{
    use HasFactory;
    protected $fillable = [
        'type_name',
    ];

    public function services(): HasMany
    {
        return $this->hasMany(Service::class);
    }
}

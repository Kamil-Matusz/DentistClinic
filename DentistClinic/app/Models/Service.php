<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
        'description',
        'type_id'
    ];

    public function type(): BelongsTo
    {
        return $this->belongsTo(ServiceType::class);
    }

    public function hasType(): bool
    {
        return !is_null($this->type);
    }

    public function isSelectedCategory(int $category_id): bool
    {
        return $this->hasCategory() && $this->category->id == $category_id;
    }
}

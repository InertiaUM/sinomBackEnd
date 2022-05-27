<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\{BelongsTo, HasMany};

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'composition',
        'usage',
    ];

    /**
     * Get the company that owns the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    /**
     * Get all of the profits for the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function profits(): HasMany
    {
        return $this->hasMany(Profit::class);
    }

    /**
     * Get all of the ratings for the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ratings(): HasMany
    {
        return $this->hasMany(Rating::class);
    }
}

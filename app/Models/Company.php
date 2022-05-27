<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\{Builder, Model};
use Illuminate\Database\Eloquent\Relations\HasMany;

class Company extends Model
{
    use HasFactory;

    public const FOLDER = 'loa/';

    protected $fillable = [
        'name',
        'email',
        'address',
        'loa',
    ],
    $hidden = ['verified_at'],
    
    $appends = ['isVerified'];

    public function isVerified(): Attribute
    {
        return Attribute::make(
            get: fn() => !empty($this->verified_at)
        );
    }

    /**
     * Scope unverified companies
     *
     * @param Builder $query
     * @return Builder
     */
    public function scopeUnverified(Builder $query): Builder
    {
        return $query->whereNull('verified_at');
    }

    /**
     * Scope verified companies
     *
     * @param Builder $query
     * @return Builder
     */
    public function scopeVerified(Builder $query): Builder
    {
        return $query->whereNotNull('verified_at');
    }

    /**
     * Set the company as verified
     *
     * @return Company
     */
    public function setCompanyAsVerified(): Company
    {
        if (empty($this->verified_at)) {
            $this->verified_at = now();
            $this->save();
        }

        return $this;
    }

    /**
     * Get all of the users for the Company
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }

    /**
     * Get all of the products for the Company
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}

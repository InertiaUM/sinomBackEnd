<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\{Builder, Model};
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Storage;

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
    
    $appends = ['isVerified', 'openFile'];

    /**
     * Make sure if this record verified or not
     *
     * @return Attribute
     */
    public function isVerified(): Attribute
    {
        return Attribute::make(
            get: fn() => !empty($this->verified_at)
        );
    }

    /**
     * Open the file
     *
     * @return Attribute
     */
    public function openFile(): Attribute
    {
        return Attribute::make(
            get: fn() => $this->validateIfExist()
        );
    }

    /**
     * Extension of openFile to validate if exist
     *
     * @return void
     */
    private function validateIfExist()
    {
        $path = storage_path('app/'.$this->loa);

        if (Storage::disk('local')->exists($this->loa)) {
            return response()->file($path);
        }

        abort(404);
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

    /**
     * Get all of the infos for the Company
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function infos(): HasMany
    {
        return $this->hasMany(CompanyInfo::class);
    }

    /**
     * Get all of the news for the Company
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function news(): HasMany
    {
        return $this->hasMany(CompanyNews::class);
    }
}

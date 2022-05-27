<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use NumberFormatter;

class Profit extends Model
{
    use HasFactory;

    protected $fillable = [
        'start_date',
        'end_date',
        'qty',
        // 'profit',
    ], $appends = ['range'],

    $dates = ['start_date', 'end_date', 'qtyUnits', 'readProfit'];

    /**
     * Range between start and end
     *
     * @return Attribute
     */
    public function range(): Attribute
    {
        return Attribute::make(
            get: fn() => $this->end_date->diffInDays($this->start_date).' hari ('
            .$this->start_date->translatedFormat('j F Y').' - '
            .$this->end_date->translatedFormat('j F Y').')'
        );
    }

    /**
     * Read with quantity units
     *
     * @return Attribute
     */
    public function qtyUnits(): Attribute
    {
        return Attribute::make(
            get: fn() => $this->qty.' unit'
        );
    }

    public function readProfit(): Attribute
    {
        return Attribute::make(
            get: fn() => numfmt_format_currency(
                numfmt_create('id_ID', NumberFormatter::CURRENCY),
                $this->profit,
                "IDR"
            )
        );
    }

    /**
     * Get the product that owns the Profit
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}

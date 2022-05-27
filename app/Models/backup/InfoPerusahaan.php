<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfoPerusahaan extends Model
{
    use HasFactory;

    protected $fillable = [
        'efisiensi',
        'info',
        'berita',
        'struktur_organisasi',
        'foto_dewan_komisaris',
        'laporan _dewan_komisaris'
    ];
}

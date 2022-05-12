<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_lengkap',
        'email',
        'password',
        'nomor_telepon',
        'jenis_kelamin',
        'tanggal_lahir'
    ];

    protected $hidden = [
    'password',
    ];
}

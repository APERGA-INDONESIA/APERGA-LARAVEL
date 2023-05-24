<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prt extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'gaji',
        'umur',
        'rating',
        'lokasi',
        'durasi',
        'catatan',
        'harga',
        'no_telepon',
    ];
}

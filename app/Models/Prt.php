<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Prt extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
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
        'profile_image',
        'user_id',
        'jamkerja',
        'deskripsi',
    ];


    /**
     * Get the user that owns the Prt.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

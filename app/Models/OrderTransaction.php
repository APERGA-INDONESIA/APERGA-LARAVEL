<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Prt;
use App\Models\User;

class OrderTransaction extends Model
{
    protected $fillable = [
        'user_id',
        'prt_id',
        'tipe_pembayaran',
        'tanggal_transaksi',
        'jam_kerja',
        'durasi_kerja',
        'catatan_khusus',
        'status_transaksi',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function prt()
    {
        return $this->belongsTo(Prt::class);
    }
}


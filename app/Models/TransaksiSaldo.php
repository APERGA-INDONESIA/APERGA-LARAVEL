<?php

namespace App\Models;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiSaldo extends Model
{
    use HasFactory;
    protected $fillable = [
        'kanal_pembayaran',
        'total_saldo',
        'status',
        'tanggal_transaksi',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

}

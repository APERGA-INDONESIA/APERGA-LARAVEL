<?php

namespace App\Models;
use App\Models\User;
use App\Models\Prt;
use App\Models\OrderTransaction;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfoPayment extends Model
{
    use HasFactory;

    protected $table = 'info_payments';

    protected $fillable = [
        'kanal_pembayaran',
        'tipe_pembayaran',
        'nomor_pembayaran',
        'nama_pemilik',
        'instruksi_pembayaran',
    ];
}

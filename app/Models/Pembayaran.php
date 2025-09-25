<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pembayaran extends Model
{
    use HasFactory, SoftDeletes;


    protected $fillable = [
        'id_pembayaran',
        'id_transaksi',
        'jumlah_bayar',
        'status_bayar',
    ];
}

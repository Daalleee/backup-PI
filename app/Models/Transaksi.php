<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaksi extends Model
{
    use HasFactory, SoftDeletes;



    protected $fillable = [
        'id_transaksi',
        'id_pelanggan',
        'id_unit_game_aksesoris',
        'durasi',
        'biaya',
        'waktu_pengembalian',
        'status',
    ];
}

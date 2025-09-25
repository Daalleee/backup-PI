<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Aksesoris extends Model
{
    use HasFactory;


    protected $fillable = [
        'id_aksesoris',
        'jenis',
        'jumlah',
        'kondisi',
        'status',
    ];
}

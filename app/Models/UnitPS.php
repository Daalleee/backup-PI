<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UnitPS extends Model
{
    use HasFactory;


    protected $fillable = [
        'id_unit',
        'nomor_seri',
        'tipe_ps',
        'kondisi',
        'status',
    ];
}

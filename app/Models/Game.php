<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Game extends Model
{
    use HasFactory;


    protected $fillable = [
        'id_game',
        'judul',
        'platform',
        'kondisi',
        'status',
    ];
}

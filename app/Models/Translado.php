<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Translado extends Model
{
    use HasFactory;

    protected $fillable = [
        'data',
        'prefixo',
        'horario'
    ];
}

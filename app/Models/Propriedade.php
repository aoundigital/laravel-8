<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Viagem;

class Propriedade extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome'
    ];

    public function viagem()
    {
        // 'foreign_key'
        return $this->belongsTo(Viagem::class, 'id', 'propriedades_id' );
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Viagem extends Model
{
    use HasFactory;

    protected $fillable = [
        'quantidade_dias',
        'data_entrada',
        'data_saida',
        'propriedades_id'
    ];

    public function propriedade()
    {
        return $this->hasOne(Propriedade::class, 'id', 'propriedades_id');
    }

    public function reembolso()
    {
      return $this->hasMany(Propriedade::class, 'viagems_id', 'id');

    }
}

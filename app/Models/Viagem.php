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

    // 'foreign_key', 'local_key'
    public function propriedade()
    {
        return $this->hasOne(Propriedade::class, 'id', 'propriedades_id');
    }

    public function reembolso()
    {
      return $this->hasMany(Reembolso::class, 'viagems_id', 'id');
    }

    public function pernoite()
    {
      return $this->hasMany(Pernoite::class, 'viagem_id', 'id');
    }

    public function translado()
    {
      return $this->hasMany(Translado::class, 'viagem_id', 'id');
    }

    public function avaliacao()
    {
      return $this->hasMany(Avaliacao::class, 'viagems_id', 'id');
    }
}

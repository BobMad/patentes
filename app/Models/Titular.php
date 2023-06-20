<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use function Termwind\renderUsing;

class Titular extends Model
{
    use HasFactory;

    protected $fillable = [
      'nome',
      'cnpj',
//    'email',
//    'telefone',
//    'endereco',
    ];

    public function endereco() : HasOne
    {
        return $this->hasOne(Endereco::class,'titular_id', 'id');
    }
}



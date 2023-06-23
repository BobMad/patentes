<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Representante extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'rg',
        'cpf',
        'campus',
        'produto',
    ];

    public function pis()
    {
        return $this->hasMany(ObjetoPI::class,'representante_id', 'id');
    }
}

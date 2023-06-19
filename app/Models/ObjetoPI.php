<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ObjetoPI extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'palavras_chave',
        'campo_invencao',
        'detalhe_invento',
        'diario_laboratorio',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnterioridadeReferencias extends Model
{
    use HasFactory;

    protected $fillable = [
        'outro_invento',
        'patente_similar',
        'relacao_bibliografica',
        'protecao_propriedade_intelectual',

        'descricao_outro_invento',

        'revelada',
        'outra_patente',
        'revelado_industria',
        'interesse_comercial',

        'detalhe_revelada',
        'detalhes_outra_patente',
        'detalhes_interesse_comercial',
    ];
}

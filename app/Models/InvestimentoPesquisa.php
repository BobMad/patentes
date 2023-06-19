<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvestimentoPesquisa extends Model
{
    use HasFactory;

    protected $fillable = [
        'orgaos',
        'contrato_termo',
        'foi_informado',
        'suporte_interno',
    ];
}

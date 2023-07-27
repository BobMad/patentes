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

    public function objetoPI()
    {
        return $this->belongsTo(ObjetoPI::class, 'objetoPI_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformacaoInvento extends Model
{
    use HasFactory;

    protected $fillable = [
        'detalhe_inovacao',
        'resolucao_vantagem',
        'comparacao',
        'desvantagem_limitacao',
        'uso_presente_futuro',
        'estagio_comercializacao',
    ];

    public function objetoPI()
    {
        return $this->belongsTo(ObjetoPI::class, 'objetoPI_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    public function representante(): BelongsTo
    {
        return $this->belongsTo(Representante::class, 'representante_id', 'id');
    }

    public function inventores()
    {
        return $this->belongsTo(Inventor::class, 'inventor_id', 'id');
    }

    public function titulares()
    {
        return $this->belongsTo(Titular::class, 'titular_id', 'id');
    }
}


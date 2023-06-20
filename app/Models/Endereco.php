<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Endereco extends Model
{
    use HasFactory;

    protected $fillable = [
        'cep',
        'logradouro',
        'numero',
        'bairro',
        'telefone',
        'celular',
        'email'
    ];

    public function inventor() : BelongsTo
    {
        return $this->belongsTo(Inventor::class, 'inventor_id');
    }

    public function titular() : BelongsTo
    {
        return $this->belongsTo(Titular::class, 'titular_id');
    }
}

